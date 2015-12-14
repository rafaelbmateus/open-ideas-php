<?php defined('BASEPATH') or exit ('No direct script access allowed');
class Sessions extends CI_Controller{
	private $module = 'sessions';
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model ('Session');
		$this->data['module'] = $this->module;
	}
	public function index(){
		//$this->session->unset_userdata('user_id');
		if($this->session->userdata('user_id')){
			redirect(base_url() . 'challenges');
		}else{
			$this->load->view('login', $this->data);
		}
	}
	public function goto_register(){
		$this->load->view('register', $this->data);
	}
	public function register(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'E-mail', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
		$this->form_validation->set_rules('password', 'Senha', 'trim|required');
		$this->form_validation->set_rules('password-again', 'Senha novamente', 'trim|required');

		if ($this->form_validation->run() == false){
			$this->session->set_flashdata('error', (validation_errors() ? validation_errors() : false));
			$this->load->view('register');
		}else{
			$name = $this->input->post('name', true );
			$email = $this->input->post('email', true );
			$password = md5($this->input->post('password', true));
			$password_again = md5($this->input->post('password-again', true));
			if ($password == $password_again){
				$this->load->model('users/User');
				if (!$this->User->getWhere('user_email', $email)){
					if ($this->User->add($email, $password, $name, '', '', date('Y-m-d H:i:s'))){
						$user = $this->User->getWhere('user_email', $email);
						$this->session->set_flashdata('success', $this->lang->line('welcome') . ' ' . $user->user_first_name);
						$this->create_session($user->user_id);
					} else {
						$this->session->set_flashdata('error', $this->lang->line('save_error'));
						//$this->load->view('register');
					}
				}else{
					$this->session->set_flashdata('error', $this->lang->line('email_error'));
					//$this->load->view('register');
				}
			}else{
				$this->session->set_flashdata('error', $this->lang->line('password_error'));
				//$this->load->view('register');
			}
			redirect(base_url() . $this->module);
		}
	}
	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
		$this->form_validation->set_rules('password', 'Senha', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata ('error', (validation_errors() ? validation_errors() : false));
		} else {
			$email = $this->input->post('email', true );
			$password = md5($this->input->post('password', true ));
			//TODO, login
			$user = $this->Session->login($email, $password);
			if ($user){
				$this->create_session($user->user_id);
				$this->session->set_flashdata('success', $this->lang->line('welcome_again') . ' ' . $user->user_name);
			}else{
				//$this->session->unset_userdata('user_id');
				$this->session->sess_destroy();
			}
			redirect(base_url() . $this->module);
		}
	}
	public function create_session($user_id){
		$this->load->model('users/User');
		$user = $this->User->getWhere('user_id', $user_id);
		$this->session->set_userdata('user_id', $user->user_id);
		$this->session->set_userdata('user_email', $user->user_email);
	}
	public function lock(){
		$this->load->view('lock');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url() . $this->module);
	}
}
