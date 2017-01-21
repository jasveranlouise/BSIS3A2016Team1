<?php

class reqconfess_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}

	
	public function req($data) {
		$this->db->insert('confession', $data);
		}
	
}

?>