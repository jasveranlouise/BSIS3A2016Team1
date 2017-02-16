<?php

class admin_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}
	
	
	
	function approve($data){
		$this->db->insert('confession', $data);
	}

	function decline($data){
		$id = $data['id_request'];
		$this->db->where('id_request', $id);
		$this->db->delete('request');
	}

}

?>