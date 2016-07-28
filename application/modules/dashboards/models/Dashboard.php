<?php
class Dashboard extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function getTopIdeas(numIdeas = '5'){
		$this->db->from('tb_idea');
		return $this->db->get()->result();
	}

}
