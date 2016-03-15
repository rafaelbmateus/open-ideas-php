<?php defined ('BASEPATH') or exit ('No direct script access allowed');
	// Test deploy heroku
class App extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model('Database');
	}
  public function index(){
		if($this->session->userdata('user_id')){
			$this->data['menu_challenges'] = true;
			$this->load->model('challenges/Challenge');
			$this->data['list'] = $this->Challenge->get();
			$this->load->model('users/User');
			$this->data['list_users'] = $this->User->get();
			$this->load->model('areas/Area');
			$this->data['list_areas'] = $this->Area->get();
			$this->data['module'] = 'challenges';
			$this->data ['view'] = 'challenges/index';
			$this->load->view($this->config->item('app_layout') . 'template', $this->data);
			//redirect(base_url() . 'challenges');
		}else{
			$this->data['module'] = 'sessions';
			$this->load->view('sessions/login', $this->data);
		}
	}

	public function translate(){
		$this->lang->load("app_lang","english");
	}

	public function create_tables(){
		$this->Database->create_tables();
	}
	public function destroy_tables(){
		$this->Database->destroy_tables();
	}
	public function reset_tables(){
		$this->Database->reset_tables();
	}
}
