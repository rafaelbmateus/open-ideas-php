<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Challenges extends CI_Controller {
	public function __construct() {
		parent::__construct ();
	}
	public function index() {
		$this->data ['view'] = 'index';
		$this->load->view ( $this->config->item ( 'app_layout' ) . 'template', $this->data );
	}
}
