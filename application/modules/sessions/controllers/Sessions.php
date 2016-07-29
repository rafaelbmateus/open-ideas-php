<?php defined('BASEPATH') or exit ('No direct script access allowed');
class Sessions extends CI_Controller {
	private $module = 'sessions';
	public function __construct() {
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model ('Session');
		$this->data['module'] = $this->module;
	}
	public function index() {
		$this->load->view('login', $this->data);
	}
	public function register() {
		$this->load->model('jobs/Job');
		$this->data['jobs'] = $this->Job->get();
		$this->load->view('register', $this->data);
	}
	public function add() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', $this->lang->line('name'), 'trim|required');
		$this->form_validation->set_rules('email', $this->lang->line('email'), 'trim|required');
		$this->form_validation->set_rules('job_id', $this->lang->line('job'), 'trim|required');
		$this->form_validation->set_rules('password', $this->lang->line('password'), 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('error', (validation_errors() ? validation_errors() : false));
			$this->load->view('register');
		}else{
			$name = $this->input->post('name', true);
			$email = $this->input->post('email', true);
			$job = $this->input->post('job_id', true);
			$cnpj = str_replace('/','-', '', $this->input->post('cnpj', true));
			$password = md5($this->input->post('password', true));
			$resume = $this->input->post('resume', true);

			if ($cnpj) {
				if(!$this->validate_cnpj($cnpj)){
					$this->session->set_flashdata('error', $this->lang->line('cnpj_error') . ' ' . $cnpj);
					redirect(base_url());
				}
			}
			$this->load->model('users/User');
			if (!$this->User->get_where('user_email', $email)){
				if ($this->User->add($name, $email, $job, '2', $resume, $password, date('Y-m-d H:i:s'))){
					$user = $this->User->get_where('user_email', $email);
					$this->session->set_flashdata('success', $this->lang->line('welcome') . ' ' . $user->user_name);
					$this->create_session($user->user_id);
				} else {
					$this->session->sess_destroy();
					$this->session->set_flashdata('error', $this->lang->line('save_error'));
				}
			}else{
				$this->session->set_flashdata('error', $this->lang->line('email_error'));
			}
			redirect(base_url() . 'app');
		}
	}
	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
		$this->form_validation->set_rules('password', 'Senha', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata ('error', (validation_errors() ? validation_errors() : false));
		} else {
			$email = $this->input->post('email', true);
			$password = md5($this->input->post('password', true));
			$remember = $this->input->post('remember', true);
			$user = $this->Session->login($email, $password);
			if ($user){
				$this->create_session($user->user_id, $remember);
				$this->session->set_flashdata('success', $this->lang->line('welcome_again') . ' ' . $user->user_name);
			}else{
				$this->session->set_flashdata('success', $this->lang->line('login_incorrect') . ' ' . $user->user_name);
			}
			redirect(base_url() . 'app');
		}
	}
	public function create_session($user_id, $remember){
		$this->Session->create_session($user_id, $remember);
	}
	public function lock(){
		$this->load->helper('cookie');
		$id = $this->session->userdata('user_id');
		$this->load->model('users/User');
		$user = $this->User->get($id);
		$cookie = array('email_oi' => $user->user_email);
		// setcookie('email_oi', $user->user_email);
		$this->session->sess_destroy();
		$this->load->view('lock', $this->data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function validate_cnpj($cnpj){
		$cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);

		if ($cnpj=='11111111111111'){	// TODO, to test! REMOVE AFTER!
			return true;
		}
		// Valida tamanho
		if (strlen($cnpj) != 14){
			return false;
		}
		// Valida primeiro dígito verificador
		for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++){
			$soma += $cnpj{$i} * $j;
			$j = ($j == 2) ? 9 : $j - 1;
		}
		$resto = $soma % 11;
		if ($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto)){
			return false;
		}
		// Valida segundo dígito verificador
		for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++){
			$soma += $cnpj{$i} * $j;
			$j = ($j == 2) ? 9 : $j - 1;
		}
		$resto = $soma % 11;
		return $cnpj{13} == ($resto < 2 ? 0 : 11 - $resto);
	}
}
