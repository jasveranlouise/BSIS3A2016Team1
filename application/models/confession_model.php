<?php

class confession_model extends CI_Model{
	public function construct(){
		
		parent::__construct();
	}
	
	
	
	function agree($idc, $idu){
		$agreeInfo = array(
			'id_agree' => '' ,
			'agree' => 1,
			'disagree' => '',
			'id_confess_agr' => $idc ,
			'id_user_agr' => $idu
		);

		$this->db->insert('agree', $agreeInfo);
	}

	function agree2($idc, $idu){
		$this->db->where('id_user_agr', $idu);
		$this->db->delete('agree');
	}


}

?>