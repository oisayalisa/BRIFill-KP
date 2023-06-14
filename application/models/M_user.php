<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function t_user(){
        return $this->db->get('tb_user');
	}

}
