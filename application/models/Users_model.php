<?php

class Users_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}
	
	public function login ($username, $password){
	$this->db->where('username',$username);
		$result = $this->db->get('users');
		
		$result = $result->result_array();
		

		
		if(strcmp($result[0]['password'], $password) != 0) {
			return FALSE;
						
		}
		
		else {
			
		
		$data2 = array(
               'log' => 1,
            );
			
		$this->db->update('users', $data2, "username = '$username'");		
		
		
		return $result;
		
		}	
	}
	
	public function add($data) {
				
		$this->db->insert('users', $data);
		
		$id = $data['id_users'];
		$dn = $data['firstname'];
		$ln = $data['lastname'];
		$personalInfo = array(
			'id_personal_info' => '' ,
			'display_name' => $dn." ".$ln,
			'first_name' => $dn ,
			'last_name' => $ln ,
			'middle_name' => '' ,
			'email' => '' ,
			'contact_no' => '' ,
			'birthdate' => '',
			'sex' => '' 			
		);
		$this->db->insert('personal_info', $personalInfo); 
		
		$studentInfo = array(
			'id_student_info' => '' ,
			'student_no' => '',
			'course' => '' ,
			'college' => '' ,
			'year_graduated' => '' 			
		);
		$this->db->insert('student_info', $studentInfo); 
		
		$confessionInfo = array(
			'id_confession_info' => '' ,
			'confession_approved' => '',
			'confession_requests' => '' 			
		);
		$this->db->insert('confession_info', $confessionInfo);
		
		
		}

	public function getUsers(){
			$this->db->select('*');
            $this->db->from('personal_info'); 
            $this->db->join('student_info', 'student_info.id_student_info=personal_info.id_personal_info', 'left');
            $this->db->join('confession_info', 'confession_info.id_confession_info=personal_info.id_personal_info', 'left');
            $query = $this->db->get();
            return $query->result();
	}

	public function getUsers2($fn){
			$this->db->select('*');
            $this->db->from('personal_info'); 
            $this->db->join('student_info', 'student_info.id_student_info=personal_info.id_personal_info', 'left');
            $this->db->join('confession_info', 'confession_info.id_confession_info=personal_info.id_personal_info', 'left');
            $this->db->like('display_name', $fn);
            $query = $this->db->get();
            return $query->result();
	}

		
}

?>