<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class Users extends CI_Controller{
	private $module = 'users';
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){redirect(base_url());}
		//date_default_timezone_set ( 'America/Sao_Paulo' );
		$this->load->model('User');
		$this->data['module'] = $this->module;
	}
	public function index(){
		$this->data['list'] = $this->User->get();
		$this->data['view'] = 'index';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function show(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->data['item'] = $this->User->get($id);
			$this->load->view('show', $this->data);
		}else{
			redirect(base_url() . $this->module);
		}
	}
	public function create(){
		$this->data['view'] = 'new';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'E-mail', 'trim|required');
		$this->form_validation->set_rules('job', 'Job', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required');

		if ($this->form_validation->run() == false){
			$this->session->set_flashdata ('error', (validation_errors() ? validation_errors() : false));
		}else{
			$name = $this->input->post ( 'name', true );
			$job = $this->input->post ( 'job', true );
			$email = $this->input->post ( 'email', true );

			if ($this->User->add($name, $job, $email, date('Y-m-d H:i:s'))){
				$this->session->set_flashdata('success', $this->lang->line('save_success'));
			} else {
				$this->session->set_flashdata('error', $this->lang->line('save_error'));
			}
		}
		redirect (base_url() . $this->module);
	}
	public function edit(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->data['item'] = $this->User->get($id);
			$this->data['view'] = 'edit';
			$this->load->view($this->config->item('app_layout') . 'template', $this->data);
		}else{
			redirect (base_url() . $this->module);
		}
	}
	public function update(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_name', 'User name', 'trim|required');
		if ($this->form_validation->run() == false){
			$this->session->set_flashdata('error', (validation_errors() ? validation_errors() : false));
		}else{
			$id = $this->input->post('user_id', true);
			$name = $this->input->post('name', true);
			//$last_name = $this->input->post ( 'user_last_name', true );
			$job = $this->input->post('job', true);
			$email = $this->input->post('email', true);
			$password = md5($this->input->post('password', true));
			$password_again = md5($this->input->post('password-again', true));
			if ($password == $password_again){
				if ($this->User->update($id, $name, $job, $email, date('Y-m-d H:i:s'))){
					$this->session->set_flashdata('success', $this->lang->line('update_success'));
				}else{
					$this->session->set_flashdata('error', $this->lang->line('update_error'));
				}
			}else{
				$this->session->set_flashdata('error', $this->lang->line('password_error'));
			}
		}
		redirect(base_url() . $this->module);
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
