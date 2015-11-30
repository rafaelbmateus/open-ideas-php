<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Sessions extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		date_default_timezone_set ( 'America/Sao_Paulo' );
		//$this->load->model ( 'User' );
	}
	public function index() {
		$this->load->view ( 'login');
	}
	public function register() {
		$this->load->view ( 'register');
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

			$this->load->view ( $this->config->item ( 'app_layout' ) . 'template');
		}
	}
	public function lock(){
		$this->load->view ( 'lock');
	}
	public function logout(){
		$this->load->view ( 'login');
	}
}
