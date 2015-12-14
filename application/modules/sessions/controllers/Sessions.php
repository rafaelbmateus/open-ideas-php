<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Sessions extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->lang->load("app","pt-br");
		date_default_timezone_set ( 'America/Sao_Paulo' );
		$this->load->model ( 'Session' );
	}
	public function index() {
		//$this->session->unset_userdata('user_id');
		if($this->session->userdata('user_id')){
			redirect ( base_url () . 'challenges' );
		}else{
			$this->load->view ( 'login');
		}
	}
	public function goto_register(){
		$this->load->view ( 'register');
	}
	public function register() {
		$this->load->library ( 'form_validation' );
		$this->form_validation->set_rules ( 'email', 'E-mail', 'trim|required' );
		$this->form_validation->set_rules ( 'password', 'Senha', 'trim|required' );
		if ($this->form_validation->run () == false) {
			$this->session->set_flashdata ( 'error', (validation_errors () ? validation_errors () : false) );
			$this->load->view ( 'register');
		} else {
			$email = $this->input->post ( 'email', TRUE );
			$password = $this->input->post ( 'password', TRUE );
			//TODO, login
			$user_id = $this->Session->login ($email, $password);
			if ($user_id){
				redirect ( base_url () . 'challenges' );
			}else{
				$this->load->view ( 'register');
			}
		}
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
			$user_id = $this->Session->login ($email, $password);
			if ($user_id){
				$this->session->set_userdata('user_id', $user_id);
			}else{
				$this->session->unset_userdata('user_id');
			}
			redirect ( base_url () . 'sessions' );
		}
	}
	public function lock(){
		$this->load->view ( 'lock');
	}
	public function logout(){
		//TODO, matar sessão
		$this->load->view ( 'login');
	}
}
