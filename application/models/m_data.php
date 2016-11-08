<?php

/**
* 
*/
class M_data extends CI_Model
{
	
	function tampil_data()
	{
		return, $this->db->get('user');
	}
	function input_data
	{
		$this->db->insert($table, $data);
	}
}