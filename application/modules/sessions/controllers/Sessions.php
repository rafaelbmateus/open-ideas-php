<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Sessions extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		date_default_timezone_set ( 'America/Sao_Paulo' );
		$this->load->model ( 'User' );
	}
	public function index() {
		$this->data ['view'] = 'login';
		$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
	}
	public function login(){
		$this->load->library ( 'form_validation' );
		$this->form_validation->set_rules ( 'email', 'E-mail', 'trim|required' );
		$this->form_validation->set_rules ( 'password', 'Senha', 'trim|required' );
		if ($this->form_validation->run () == false) {
			$this->session->set_flashdata ( 'error', (validation_errors () ? validation_errors () : false) );
		} else {
			$email = $this->input->post ( 'email', TRUE );
			$password = $this->input->post ( 'password', TRUE );
			//TODO, login

			//$this->data ['view'] = 'lock';
			$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
		}
	}
	public function lock(){
		$this->data ['view'] = 'lock';
		$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
	}
	public function logout(){
		$this->data ['view'] = 'logout';
		$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
	}
}
