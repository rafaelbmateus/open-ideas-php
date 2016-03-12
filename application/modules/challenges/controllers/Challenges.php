<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class Challenges extends CI_Controller{
	private $module = 'challenges';
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){redirect(base_url());}
		date_default_timezone_set('America/Sao_Paulo');
		$this->data['menu_challenges'] = true;
		$this->load->model('Challenge');
		$this->data['module'] = $this->module;
	}
	public function index(){
		$this->data['list'] = $this->Challenge->get();
		$this->load->model('users/User');
		$this->data['list_users'] = $this->User->get();
		$this->load->model('areas/Area');
		$this->data['view'] = 'index';
		$this->data['list_areas'] = $this->Area->get();
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function show(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->data['item'] = $this->Challenge->get($id);
			$this->data['view'] = 'show';
			$this->load->view($this->config->item('app_layout') . 'template', $this->data);
		}else{
			redirect(base_url() . $this->module);
		}
	}
	public function create(){
		$this->load->model('areas/Area');
		$this->data['innovation_areas'] = $this->Area->get();

		$this->data['view'] = 'new';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('challenge_title', $this->lang->line('title'), 'trim|required');
		$this->form_validation->set_rules('challenge_description', $this->lang->line('description'), 'trim|required');
		if ($this->form_validation->run() == false){
			$this->session->set_flashdata('error', (validation_errors() ? validation_errors() : false));
		}else{
			$title = $this->input->post('challenge_title', true);
			$description = $this->input->post('challenge_description', true);
			$deadline = $this->input->post('challenge_deadline', true);
			$user_id = $this->session->userdata('user_id');
			$area_id = $this->input->post('area_id', true);

			if ($this->Challenge->add($title, $description, $deadline, $area_id, $user_id, date('Y-m-d H:i:s'))){
				$this->session->set_flashdata ('success', $this->lang->line('save_success'));
			}else{
				$this->session->set_flashdata ('error', $this->lang->line('save_error'));
			}
		}
		redirect (base_url() . $this->module);
	}
	public function edit(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->data['item'] = $this->Challenge->get($id);
			$this->data['view'] = 'edit';
			$this->load->view ($this->config->item('app_layout') . 'template', $this->data);
		}else{
			$this->session->set_flashdata('error', $this->lang->line('update_error'));
			redirect (base_url() . $this->module);
		}
	}
	public function update(){
		$this->load->library ('form_validation');
		$this->form_validation->set_rules('Challenge_name', 'Challenge name', 'trim|required');
		if ($this->form_validation->run() == false){
			$this->session->set_flashdata( 'error', (validation_errors() ? validation_errors() : false));
		}else{
			$id = $this->input->post('challenge_id', true);
			$title = $this->input->post('challenge_title', true);
			$description = $this->input->post('challenge_description', true);
			$deadline = $this->input->post('challenge_deadline', true);
			$user_id = $this->session->userdata('user_id');
			$area_id = $this->input->post('area_id', true);

			if ($this->Challenge->update($id, $title, $description, $deadline, $area_id, $user_id, date('Y-m-d H:i:s'))){
				$this->session->set_flashdata('success', $this->lang->line('update_success'));
			}else{
				$this->session->set_flashdata('error', $this->lang->line('update_error'));
			}
		}
		redirect(base_url() . $this->module);
	}
	public function delete(){
		$id = $this->input->post('id', true);
		if ($id){
			if ($this->Challenge->delete($id)){
				$this->session->set_flashdata('success', $this->lang->line('delete_success'));
			}else{
				$this->session->set_flashdata('error', $this->lang->line('delete_error'));
			}
		}else{
			$this->session->set_flashdata('error', $this->lang->line('delete_error'));
		}
		redirect (base_url() . $this->module);
	}
}
