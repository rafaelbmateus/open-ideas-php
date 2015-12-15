<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Challenges extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('user_id')){redirect(base_url());}
	}
	public function index() {
		$this->data ['view'] = 'index';
		$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
	}
}
