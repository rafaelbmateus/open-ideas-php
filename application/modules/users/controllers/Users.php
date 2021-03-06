<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class Users extends CI_Controller{

	private $module = 'users';

	public function __construct(){
		parent::__construct();
		// if(!$this->session->userdata('user_id')){redirect(base_url());}
		date_default_timezone_set('America/Sao_Paulo');
		// $this->load->model('User');
		$this->data['module'] = $this->module;
	}
	public function index(){
		$this->data['menu_users'] = true;
		// teste api
		$this->data['list'] = $this->api();
		// $this->data['list'] = $this->User->get();
		$this->data['view'] = 'index';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function api(){
		$this->load->model('Api/Api');
		return $this->Api->call();
	}
	public function show(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->data['item'] = $this->User->get($id);
			$this->load->model('jobs/Job');
			$this->data['list_jobs'] = $this->Job->get();
			$this->load->model('ideas/Idea');
			$this->data['num_ideas'] = $this->Idea->get_sum($id);
			$this->data['list_ideas'] = $this->Idea->get_public_ideas_user($id);
			$this->load->model('challenges/Challenge');
			$this->data['list_challenges'] = $this->Challenge->get_public_challenges_user($id);
			$this->data['num_challenges'] = $this->Challenge->get_sum($id);
			$this->data['view'] = 'show';
			$this->load->view($this->config->item('app_layout') . 'template', $this->data);
		}else{
			redirect(base_url() . $this->module);
		}
	}
	public function create(){
		$this->load->model('jobs/Job');
		$this->data['jobs'] = $this->Job->get();
		$this->data['view'] = 'new';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', $this->lang->line('name'), 'trim|required');
		$this->form_validation->set_rules('email', $this->lang->line('email'), 'trim|required');
		$this->form_validation->set_rules('job_id', $this->lang->line('job'), 'trim|required');
		$this->form_validation->set_rules('password', $this->lang->line('password'), 'trim|required');

		if ($this->form_validation->run() == false){
			$this->session->set_flashdata('error', (validation_errors() ? validation_errors() : false));
		}else{
			$name = $this->input->post('name', true);
			$email = $this->input->post('email', true);
			$job = $this->input->post('job_id', true);
			$password = md5($this->input->post('password', true));
			$resume = $this->input->post('resume', true);

			if (!$this->User->get_where('user_email', $email)){
				if ($this->User->add($name, $email, $job, '2', $resume, $password, date('Y-m-d H:i:s'))){
					$user = $this->User->get_where('user_email', $email);
					$this->session->set_flashdata('success', $this->lang->line('welcome') . ' ' . $user->user_name);
				} else {
					$this->session->set_flashdata('error', $this->lang->line('save_error'));
				}
			}else{
				$this->session->set_flashdata('error', $this->lang->line('email_error'));
			}
			redirect (base_url() . $this->module);
		}
	}
	public function edit(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->load->model('jobs/Job');
			$this->data['jobs'] = $this->Job->get();
			$this->data['item'] = $this->User->get($id);
			$this->data['view'] = 'edit';
			$this->load->view($this->config->item('app_layout') . 'template', $this->data);
		}else{
			redirect (base_url() . $this->module);
		}
	}
	public function update_profile(){
		$this->load->model('jobs/Job');
		$this->data['jobs'] = $this->Job->get();
		$this->data['item'] = $this->User->get($this->session->userdata('user_id'));
		$this->data['view'] = 'update_profile';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function update(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', $this->lang->line('name'), 'trim|required');
		$this->form_validation->set_rules('email', $this->lang->line('email'), 'trim|required');

		if ($this->form_validation->run() == false){
			print_r(validation_errors()); return;
			$this->session->set_flashdata('error', 'Error');
		}else{
			$id = $this->input->post('user_id', true);
			$name = $this->input->post('name', true);
			$job_id = $this->input->post('job_id', true);
			$email = $this->input->post('email', true);
			$resume = $this->input->post('resume', true);

			$password = null;
			if ($this->input->post('password', true)){
				$password = md5($this->input->post('password', true));
			}
			if ($this->User->update($id, $name, $email, $job_id, '2', $resume, $password, date('Y-m-d H:i:s'))){
				$this->session->set_flashdata('success', $this->lang->line('update_success'));
			}else{
				$this->session->set_flashdata('error', $this->lang->line('update_error'));
			}
		}

		// To edit profile
		if($this->session->userdata('user_type')=='admin'){
			redirect(base_url() . $this->module);
		}else{
			$this->load->model('sessions/Session');
			$this->Session->create_session($this->session->userdata('user_id'));
			redirect(base_url() . 'app');
		}

	}
	public function delete(){
		$id = $this->input->post('id', true);
		if ($id){
			if ($this->User->delete($id)){
				$this->session->set_flashdata('success', $this->lang->line('delete_success'));
			}else{
				$this->session->set_flashdata('success', $this->lang->line('delete_error'));
			}
		}else{
			$this->session->set_flashdata('error', $this->lang->line('delete_error'));
		}
		redirect (base_url() . $this->module);
	}
}
