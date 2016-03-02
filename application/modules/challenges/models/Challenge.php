<?php
class Challenge extends CI_Model{
	public $table = 'tb_challenge';
	public $primary_key = 'challenge_id';
	public $date_created_field = 'created_at';
	public $date_updated_field = 'updated_at';
	public $is_deleted_field = 'is_deleted';
	public function __construct(){
		parent::__construct();
		//$this->create_table();
	}
	public function create_table(){
		if (!$this->db->table_exists($this->table)){
			//TODO, Atualizar query da criação da tabela
			$query = 'CREATE TABLE tb_sample(
							sample_id SERIAL,
							sample_name character varying(255) NOT NULL,
							created_at timestamp without time zone,
  						updated_at timestamp without time zone,
	  					is_deleted boolean
					)';
			return $this->db->query($query);
		}
	}
	function get($id = null){
		$this->db->from($this->table);
		$this->db->where($this->is_deleted_field, null);
		if ($id){
			$this->db->where($this->primary_key, $id);
			$query = $this->db->get()->row();
		}else{
			$query = $this->db->get()->result();
		}
		return $query;
	}
	public function get_all($id = null){
		$this->db->from($this->table);
		if ($id){
			$this->db->where($this->primary_key, $id);
		}
		return $this->db->get()->result();
	}
	function get_where($field = "", $content = ""){
		$this->db->from($this->table);
		$this->db->where($field, $content);
		$query = $this->db->get();
		if ($query->num_rows() == 1){
			return $query->row();
		}else{
			return $query->result();
		}
	}
	function get_public_challenges_user($user_id = null){
		$this->db->from($this->table);
		$this->db->where($this->is_deleted_field, null);
		$this->db->where('user_id', $user_id);
		return $this->db->get()->result();
	}
	function get_sum($user_id){
		$query = $this->db->query('SELECT challenge_id FROM tb_challenge WHERE is_deleted IS NULL AND user_id=' . $user_id);
		return $query->num_rows();
	}
	public function add($title, $description, $deadline, $user_id, $timestamp){
		$data = array (
				'challenge_title' => $title,
				'challenge_description' => $description,
				'user_id' => $user_id,
				$this->date_created_field => $timestamp
		);
		if($deadline){
			$data['challenge_deadline'] = $deadline;
		}
		return $this->db->insert($this->table, $data);
	}
	public function update($title, $description, $deadline, $user_id, $timestamp){
		$data = array (
				'challenge_title' => $title,
				'challenge_description' => $description,
				'user_id' => $user_id,
				$this->date_updated_field => $timestamp
		);
		if($deadline){
			$data['challenge_deadline'] = $deadline;
		}
		$this->db->where($this->primary_key, $id);
		return $this->db->update($this->table, $data);
	}
	public function delete($id){
		$data = array (
				$this->is_deleted_field => true
		);
		$this->db->where($this->primary_key, $id);
		return $this->db->update($this->table, $data);
	}
	public function destroy($id){
		$this->db->where($this->primary_key, $id);
		$this->db->delete($this->table);
	}
}
