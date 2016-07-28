<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class Ideas_ajax extends CI_Controller{
	private $module = 'challenges';
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){redirect(base_url());}
		$this->load->model('Idea');
	}
  public function like(){
		$user_id = $this->session->userdata('user_id');
		$idea_id = $_GET['idea_id'];
		echo $this->Idea->like($user_id, $idea_id);
  }
	public function unlike(){
		$user_id = $this->session->userdata('user_id');
		$idea_id = $_GET['idea_id'];
		echo $this->Idea->unlike($user_id, $idea_id);
  }
}
