<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_profil extends CI_Model {

	public function input($data)
	{
		return $this->db->insert('tb_client',$data);
	}
	
	
}

