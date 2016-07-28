<?php
class Session extends CI_Model {
	public $table = 'tb_user';
	public $primary_key = 'user_id';
	public $date_created_field = 'created_at';
	public $date_updated_field = 'updated_at';
	public $is_deleted_field = 'is_deleted';

	function login($email, $password) {
		$this->db->from($this->table);
		$this->db->where('user_email', $email);
		$this->db->where('user_password', $password);
		return $this->db->get()->row();
	}
	function logout($mail){
		//TODO, Talvez, se for colocar um status de não logado.
	}
	function create_session($user_id, $remember=null){
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
}
