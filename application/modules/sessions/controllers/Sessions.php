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
		$this->load->view('login', $this->data);
	}
	public function register(){
		$this->load->model('jobs/Job');
		$this->data['jobs'] = $this->Job->get();
		$this->load->view('register', $this->data);
	}
	public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Nome', 'trim|required');
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
		$this->form_validation->set_rules('job_id', 'Tipo', 'trim|required');
		$this->form_validation->set_rules('password', 'Senha', 'trim|required');

		if ($this->form_validation->run() == false){
			$this->session->set_flashdata('error', (validation_errors() ? validation_errors() : false));
			$this->load->view('register');
		}else{
			$name = $this->input->post('name', true);
			$email = $this->input->post('email', true);
			$job = $this->input->post('job_id', true);
			$password = md5($this->input->post('password', true));

			$this->load->model('users/User');
			if (!$this->User->get_where('user_email', $email)){
				if ($this->User->add($name, $email, $job, '2', $password, date('Y-m-d H:i:s'))){
					$user = $this->User->get_where('user_email', $email);
					$this->session->set_flashdata('success', $this->lang->line('welcome') . ' ' . $user->user_name);
					$this->create_session($user->user_id);
				} else {
					$this->session->set_flashdata('error', $this->lang->line('save_error'));
				}
			}else{
				$this->session->set_flashdata('error', $this->lang->line('email_error'));
			}
			redirect(base_url());
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
			redirect(base_url());
		}
	}
	public function create_session($user_id, $remember){
		$this->load->model('users/User');
		$user = $this->User->get_where('user_id', $user_id);
		$this->session->set_userdata('user_id', $user->user_id);
		$this->session->set_userdata('user_name', $user->user_name);
		$this->session->set_userdata('user_email', $user->user_email);
		$this->session->set_userdata('user_type', $user->type_name);
		$this->session->set_userdata('user_job', $user->job_name);
		if($remember){
			$this->session->sess_expiration = 60*60*24*365;	// set session expire to a year
		}
	}
	public function lock(){
		$id = $this->session->userdata('user_id');
		$this->load->model('users/User');
		$this->data['user'] = $this->User->get($id);
		$this->session->sess_destroy();
		$this->load->view('lock', $this->data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
