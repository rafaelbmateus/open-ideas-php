<?php
class Database extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function create_tables(){
    return $this->run_query('create - mysql');
	}

  public function destroy_tables(){
		return $this->run_query('destroy');
  }

  public function reset_tables(){
		return $this->run_query('reset');
  }

	public function run_query($file) {
		$sql_contents = file_get_contents(base_url() . 'database/' . $file . '.sql');
    $sql_contents = explode(";", $sql_contents);

    foreach($sql_contents as $query){
			$result =  $this->db->query($query);
    }

		return $result;
	}
}
