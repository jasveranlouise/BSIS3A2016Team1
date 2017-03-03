<?php

class suggestion_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}

	public function suggestion($data){
	
	$this->db->insert('suggestion', $data);
		
	}
}
?>