<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class Dashboards extends CI_Controller{
	private $module = 'dashboards';
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){redirect(base_url());}
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model('Dashboard_idea');
		$this->data['module'] = $this->module;
	}
	public function index(){
		$this->data['list'] = $this->Sample->get();
		$this->data['view'] = 'index';
		$this->load->view($this->config->item('app_layout') . 'template', $this->data);
	}
}
