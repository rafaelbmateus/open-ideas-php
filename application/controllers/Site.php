<?php defined ('BASEPATH') or exit ('No direct script access allowed');

class Site extends CI_Controller{
	public function __construct(){
		parent::__construct();
		date_default_timezone_set('America/Sao_Paulo');
	}
  public function index() {
    $this->load->view($this->config->item('app_layout') . 'page');
  }
}
