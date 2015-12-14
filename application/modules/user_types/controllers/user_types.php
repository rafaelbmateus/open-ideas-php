<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class User_types extends CI_Controller{
	private $module = 'User_types';
	public function __construct(){
		parent::__construct();
		//date_default_timezone_set ( 'America/Sao_Paulo' );
		$this->load->model('User_type');
		$this->data['module'] = $this->module;
	}
	public function index(){
		$this->data['list'] = $this->User_type->get();
		$this->data['view'] = 'index';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function show(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->data['item'] = $this->User_type->get($id);
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
		$this->form_validation->set_rules('type_name', 'User name', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('error', (validation_errors() ? validation_errors() : false));
		} else {
			$name = $this->input->post ( 'type_name', TRUE );
			if ($this->User_type->add ($name, date ( 'Y-m-d H:i:s' ))){
				$this->session->set_flashdata ('success', $this->lang->line('save_success'));
			} else {
				$this->session->set_flashdata ('error', $this->lang->line('save_error'));
			}
		}
		redirect (base_url() . $this->module);
	}
	public function edit(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->data['item'] = $this->User_type->get($id);
			$this->data['view'] = 'edit';
			$this->load->view ($this->config->item('app_layout') . 'template', $this->data);
		}else{
			$this->session->set_flashdata('error', $this->lang->line('update_error'));
			redirect (base_url() . $this->module);
		}
	}
	public function update(){
		$this->load->library ('form_validation');
		$this->form_validation->set_rules('type_name', 'type name', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata( 'error', (validation_errors() ? validation_errors() : false));
		}else{
			$id = $this->input->post('type_id', true);
			$name = $this->input->post('type_name', true);

			if ($this->User_type->update($id, $name, date('Y-m-d H:i:s'))){
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
			if ($this->User_type->delete($id)){
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
