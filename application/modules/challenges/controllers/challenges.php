<?php defined ('BASEPATH') or exit ('No direct script access allowed');
//TODO, Replace Challenges to ClassName
class Challenges extends CI_Controller{
	private $module = 'challenges';
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){redirect(base_url());}
		$this->load->model('Challenge');
		$this->data['module'] = $this->module;
	}
	public function index(){
		$this->data['list'] = $this->Challenge->get();
		$this->data['view'] = 'index';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
	public function show(){
		$id = $this->uri->segment(3);
		if ($id){
			$this->data['item'] = $this->Challenge->get($id);
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
		$this->form_validation->set_rules('challenge_title', $this->lang->line('title'), 'trim|required');
		$this->form_validation->set_rules('challenge_description', $this->lang->line('description'), 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('error', (validation_errors() ? validation_errors() : false));
		} else {
			$title = $this->input->post('challenge_title', TRUE );
			$description = $this->input->post('challenge_description', TRUE );
			$deadline = $this->input->post('challenge_deadline', TRUE );
			$user_id = $this->session->userdata('user_id');

			if ($this->Challenge->add($title, $description, $deadline, $user_id, date('Y-m-d H:i:s'))){
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
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata( 'error', (validation_errors() ? validation_errors() : false));
		}else{
			$id = $this->input->post('challenge_id', true);
			$name = $this->input->post('Challenge_name', true);

			if ($this->Challenge->update($id, $name, date('Y-m-d H:i:s'))){
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
