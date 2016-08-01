<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class Api extends CI_Controller{
	public function __construct(){
		parent::__construct();
		// if(!$this->session->userdata('user_id')){redirect(base_url());}
		date_default_timezone_set('America/Sao_Paulo');
		$this->load->model('Api');
	}

  public function index() {
		$method = null;
		$route = null;
		if (isset($_GET["method"])) {
			$method = $_GET["method"];
		}
		if (isset($_GET["route"])) {
			$route = $_GET["route"];
		}

		$this->data['result'] = $this->Api->call($method, $route);
    $this->load->view('result_api', $this->data);
  }
}
