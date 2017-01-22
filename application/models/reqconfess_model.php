<?php

class reqconfess_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}

	
	public function req($data) {
		
		$this->db->insert('confession', $data);
	}
		
	function getPosts(){
		$this->db->select("account_name, confession_title, confession_text, anonymous, hidden_name, college, date, time");
		$this->db->from('confession');
		$query = $this->db->get();
		return $query->result();
	}

}

?>