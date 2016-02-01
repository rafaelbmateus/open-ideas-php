<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class App extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
	}
  public function index(){
		if($this->session->userdata('user_id')){
			$this->data['menu_challenges'] = true;
			$this->load->model('challenges/Challenge');
			$this->data['list'] = $this->Challenge->get();
			$this->data['module'] = 'challenges';
			$this->data ['view'] = 'challenges/index';
			$this->load->view($this->config->item('app_layout') . 'template', $this->data);
			//redirect(base_url() . 'challenges');
		}else{
			$this->data['module'] = 'sessions';
			$this->load->view('sessions/login', $this->data);
		}
	}
}
