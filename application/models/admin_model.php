<?php

class admin_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}
	
	
	
	function approve($data){
		$this->db->insert('confession', $data);

		$this->db->set('approved', '1');
		$this->db->where('id_request', $data['id_request']);
		$this->db->update('request');
	}

	function decline($data){
		$this->db->set('declined', '1');
		$this->db->where('id_request', $data['id_request']);
		$this->db->update('request');
	}

}

?>