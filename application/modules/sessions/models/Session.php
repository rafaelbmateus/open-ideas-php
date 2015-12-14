<?php
class Session extends CI_Model {
	public $table = 'tb_user';
	public $primary_key = 'user_id';
	public $date_created_field = 'created_at';
	public $date_updated_field = 'updated_at';
	public $is_deleted_field = 'is_deleted';

	function login($email, $password) {
		//TODO, login
		$this->db->from($this->table);
		$this->db->where('user_email', $email);
		$this->db->where('user_password', $password);
		return $this->db->get()->row();
	}
	function logout($mail){
		//TODO, Talvez, se for colocar um status de não logado.
	}
}
