<?php
class Idea extends CI_Model{
	public $table = 'tb_idea';
	public $primary_key = 'idea_id';
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
		$this->db->where($this->is_deleted_field, null);
		$this->db->where($field, $content);
		return $this->db->get()->result();
	}

	function get_public_ideas_user($user_id){
		$this->db->from($this->table);
		$this->db->where($this->is_deleted_field, null);
		$this->db->where('idea_is_public', true);
		$this->db->where('user_id', $user_id);
		return $this->db->get()->result();
	}

	function get_sum($user_id){
		$query = $this->db->query('SELECT idea_id FROM tb_idea WHERE idea_is_public=true AND is_deleted IS NULL AND user_id=' . $user_id);
		return $query->num_rows();
	}

	public function add($is_public, $title, $description, $solution, $differential, $necessary_skills, $target_group, $area_id, $user_id, $timestamp){
		$data = array (
				'idea_is_public' => $is_public,
				'idea_title' => $title,
				'idea_description' => $description,
				'idea_solution' => $solution,
				'idea_differential' => $differential,
				'idea_necessary_skills' => $necessary_skills,
				'idea_target_group' => $target_group,
				'area_id' => $area_id,
				'user_id' => $user_id,
				$this->date_created_field => $timestamp
		);
		return $this->db->insert($this->table, $data);
	}

	public function update($id, $is_public, $title, $description, $solution, $differential, $necessary_skills, $target_group, $area_id, $user_id, $timestamp){
		$data = array (
				'idea_is_public' => $is_public,
				'idea_title' => $title,
				'idea_description' => $description,
				'idea_solution' => $solution,
				'idea_differential' => $differential,
				'idea_necessary_skills' => $necessary_skills,
				'idea_target_group' => $target_group,
				'area_id' => $area_id,
				'user_id' => $user_id,
				$this->date_updated_field => $timestamp
		);
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

	public function like($user_id, $idea_id){
		$data = array (
				'user_id' => $user_id,
				'idea_id' => $idea_id,
				$this->date_created_field => date('Y-m-d H:i:s')
		);
		return $this->db->insert('tb_like', $data);
	}

	public function unlike($user_id, $idea_id){
		$this->db->where('user_id', $user_id);
		$this->db->where('idea_id', $idea_id);
		$this->db->delete('tb_like');
	}

	public function is_liked($user_id, $idea_id){
		$this->db->select('idea_id');
		$this->db->from('tb_like');
		$this->db->where('user_id', $user_id);
		$this->db->where('idea_id', $idea_id);
		return $this->db->get()->result();
	}
}
