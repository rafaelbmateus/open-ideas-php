<?php defined ('BASEPATH') or exit ('No direct script access allowed');
class Challenges_ajax extends CI_Controller{
	private $module = 'challenges';
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){redirect(base_url());}
		$this->load->model('Challenge');
	}
  public function like(){
		$user_id = $this->session->userdata('user_id');
		$challenge_id = $_GET['challenge_id'];
		echo $this->Challenge->like($user_id, $challenge_id);
  }
	public function unlike(){
		$user_id = $this->session->userdata('user_id');
		$challenge_id = $_GET['challenge_id'];
		echo $this->Challenge->unlike($user_id, $challenge_id);
  }
}
