<?php
class Data_login extends CI_Model{

	//login
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
}
?>