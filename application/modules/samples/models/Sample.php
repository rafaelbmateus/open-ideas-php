<?php
//TODO, Atulizar nome da classe
class Sample extends CI_Model {
	//TODO, Atulizar definições da tabela
	public $table = 'tb_sample';
	public $primary_key = 'sample_id';
	public $date_created_field = 'created_at';
	public $date_updated_field = 'updated_at';
	public $is_deleted_field = 'is_deleted';
	public function __construct() {
		parent::__construct ();
		$this->create_table ();
	}
	function create_table() {
		if (! $this->db->table_exists ( $this->table )) {
			//TODO, Atualizar query da criação da tabela
			$query = 'CREATE TABLE tb_user(
							sample_id SERIAL,
							sample_name character varying(255) NOT NULL,
							created_at timestamp without time zone,
  						updated_at timestamp without time zone,
	  					is_deleted boolean
					)';
			return $this->db->query($query);
		}
	}
	function get($id = null) {
		$this->db->from ( $this->table );
		if ($id) {
			$this->db->where ( $this->primary_key, $id );
		}
		$this->db->where ( $this->is_deleted_field, NULL );
		return $this->db->get ()->result ();
	}
	function get_all($id = null) {
		$this->db->from ( $this->table );
		if ($id) {
			$this->db->where ( $this->primary_key, $id );
		}
		return $this->db->get ()->result ();
	}
	function getWhere($field = "", $content = "") {
		$this->db->from ( $this->table );
		$this->db->where ( $field, $content );
		return $this->db->get ()->result ();
	}
	//TODO, Atualizar parâmetros
	function add($name, $timestamp) {
		$data = array (
				'sample_name' => $name,
				$this->date_created_field => $timestamp
		);
		return $this->db->insert ( $this->table, $data );
	}
	//TODO, Atualizar parâmetros
	function update($id, $name, $timestamp) {
		$data = array (
				'sample_name' => $name,
				$this->date_updated_field => $timestamp
		);
		$this->db->where ( $this->primary_key, $id );
		return $this->db->update ( $this->table, $data );
	}
	function delete($id) {
		$data = array (
				$this->is_deleted_field => true
		);
		$this->db->where ( $this->primary_key, $id );
		return $this->db->update ( $this->table, $data );
	}
	function destroy($id) {
		$this->db->where ( $this->primary_key, $id );
		$this->db->delete ( $this->table );
	}
}
