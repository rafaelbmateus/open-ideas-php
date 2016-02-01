<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class Incubators extends CI_Controller{
	private $module = 'incubators';
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){redirect(base_url());}
		$this->data['menu_incubators'] = true;
		$this->load->model('Incubator');
		$this->data['module'] = $this->module;
	}
	public function index(){
		$this->data['list'] = $this->Incubator->get();
		$this->data['view'] = 'index';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function show(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->data['item'] = $this->Incubator->get($id);
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
		//TODO, validete field
		$this->form_validation->set_rules('incubator_name', $this->lang->line('name'), 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('error', (validation_errors() ? validation_errors() : false));
		} else {
			$name = $this->input->post('incubator_name', TRUE );
			$description = $this->input->post('incubator_description', TRUE );
			$url = $this->input->post('incubator_url', TRUE );
			$phone = $this->input->post('incubator_phone', TRUE );
			$state = $this->input->post('incubator_state', TRUE );
			$city = $this->input->post('incubator_city', TRUE );

			if ($this->Incubator->add($name, $description, $url, $phone, $state, $city, date('Y-m-d H:i:s'))){
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
			$this->data['item'] = $this->Incubator->get($id);
			$this->data['view'] = 'edit';
			$this->load->view ($this->config->item('app_layout') . 'template', $this->data);
		}else{
			$this->session->set_flashdata('error', $this->lang->line('update_error'));
			redirect (base_url() . $this->module);
		}
	}
	public function update(){
		$this->load->library ('form_validation');
		$this->form_validation->set_rules('incubator_name', $this->lang->line('name'), 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata( 'error', (validation_errors() ? validation_errors() : false));
		}else{
			$id = $this->input->post('incubator_id', true);
			$name = $this->input->post('incubator_name', TRUE );
			$description = $this->input->post('incubator_description', TRUE );
			$url = $this->input->post('incubator_url', TRUE );
			$phone = $this->input->post('incubator_phone', TRUE );
			$state = $this->input->post('incubator_state', TRUE );
			$city = $this->input->post('incubator_city', TRUE );

			if ($this->Incubator->update($id, $name, $description, $url, $phone, $state, $city, date('Y-m-d H:i:s'))){
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
			if ($this->Incubator->delete($id)){
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
