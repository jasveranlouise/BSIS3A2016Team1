<?php

class reqconfess_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}

	
	public function req($data) {
	
		$this->db->insert('request', $data);
	}
		
	function getPosts(){
		$this->db->select("*");
		$this->db->from('confession');
		$this->db->order_by('date', 'DESC');
		$this->db->order_by('time', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	function getPosts2(){
		$this->db->select("*");
		$this->db->from('request');
		$this->db->order_by('id_request', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

	function getPosts3(){
		$this->db->select("*");
		$this->db->from('request');
		$this->db->where('approved', '0');
		$this->db->where('declined', '0');
		$this->db->order_by('id_request', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}

}

?>