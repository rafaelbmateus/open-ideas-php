<?php
class Comment extends CI_Model{
	public $table = 'tb_comment';
	public $primary_key = 'comment_id';
	public $date_created_field = 'created_at';
	public $date_updated_field = 'updated_at';
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
	function get_challenge($id = null){
		$this->db->from($this->table);
    $this->db->where('challenge_id', $id);
		return $this->db->get()->result();
	}
	function get_idea($id = null){
		$this->db->from($this->table);
    $this->db->where('idea_id', $id);
		return $this->db->get()->result();
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
	public function add_challenge($user_id, $challenge_id, $description, $timestamp){
		$data = array (
        'user_id' => $user_id,
        'challenge_id' => $challenge_id,
        'comment_description' => $description,
				$this->date_created_field => $timestamp
		);
		return $this->db->insert($this->table, $data);
	}
	public function add_idea($user_id, $idea_id, $description, $timestamp){
		$data = array (
        'user_id' => $user_id,
        'idea_id' => $idea_id,
        'comment_description' => $description,
				$this->date_created_field => $timestamp
		);
		return $this->db->insert($this->table, $data);
	}
	public function update_challenge($id, $user_id, $challenge_id, $description, $timestamp){
		$data = array (
				'user_id' => $user_id,
				'challenge_id' => $challenge_id,
				'comment_description' => $description,
				$this->date_updated_field => $timestamp
		);
		$this->db->where($this->primary_key, $id);
		return $this->db->update($this->table, $data);
	}
	public function destroy($id){
		$this->db->where($this->primary_key, $id);
		return $this->db->delete($this->table);
	}
}
