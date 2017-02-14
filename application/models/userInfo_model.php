<?php

class userInfo_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}

			
	function getPersonal_info(){
		$this->db->select("id_personal_info, display_name, first_name, last_name, middle_name, email, contact_no, birthdate, sex");
		$this->db->from('personal_info');
		$query = $this->db->get();
		return $query->result();
	}

}

?>