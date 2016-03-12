<?php
class User extends CI_Model{
	public $table = 'tb_user';
	public $primary_key = 'user_id';
	public $date_created_field = 'created_at';
	public $date_updated_field = 'updated_at';
	public $is_deleted_field = 'is_deleted';
	public function __construct(){
		parent::__construct ();
		$this->create_table ();
	}
	function create_table(){
		if (!$this->db->table_exists($this->table)){
			$query = 'CREATE TABLE tb_user(
							user_id SERIAL,
							user_name character varying(255) NOT NULL,
							user_job character varying(255) NOT NULL,
							created_at timestamp without time zone,
  						updated_at timestamp without time zone,
	  					is_deleted boolean
					)';
			return $this->db->query($query);
		}
	}
	function get($id = null){
		$this->db->from($this->table);
		$this->db->where($this->table . '.' . $this->is_deleted_field, null);
		$this->db->join('tb_job', 'tb_job.job_id = tb_user.job_id');
		$this->db->join('tb_user_type', 'tb_user_type.type_id = tb_user.type_id');
		if ($id){
			$this->db->where($this->primary_key, $id);
			$query = $this->db->get()->row();
		}else{
			$query = $this->db->get()->result();
		}
		return $query;
	}
	function get_where($field = "", $content = ""){
		$this->db->from($this->table);
		$this->db->where($field, $content);
		$this->db->join('tb_job', 'tb_job.job_id = tb_user.job_id');
		$this->db->join('tb_user_type', 'tb_user_type.type_id = tb_user.type_id');
		$query = $this->db->get();
		if ($query->num_rows() == 1){
			return $query->row();
		}else{
			return $query->result();
		}
	}
	function add($name, $email, $job_id, $type_id, $resume, $password, $timestamp){
		$data = array (
				'user_name' => $name,
				'job_id' => $job_id,
				'type_id' => $type_id,
				'user_email' => $email,
				'user_resume' => $resume,
				'user_password' => $password,
				$this->date_created_field => $timestamp
		);
		return $this->db->insert($this->table, $data);
	}
	function update($id, $name, $email, $job_id, $type_id, $resume, $password, $timestamp){
		$data = array (
				'user_name' => $name,
				'type_id' => $type_id,
				'user_email' => $email,
				'user_resume' => $resume,
				$this->date_updated_field => $timestamp
		);

		if ($job_id){
			$data['job_id'] = $job_id;
		}

		if ($password){
			$data['password'] = $password;
		}
		$this->db->where($this->primary_key, $id);
		return $this->db->update($this->table, $data);
	}
	function delete($id){
		$data = array (
				$this->is_deleted_field => true
		);
		$this->db->where($this->primary_key, $id);
		return $this->db->update($this->table, $data);
	}
	function destroy($id){
		$this->db->where($this->primary_key, $id);
		$this->db->delete($this->table);
	}
}
