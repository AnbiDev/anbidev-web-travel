<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {

	public function proseslogin($user,$pass)
	{
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('tbl_user')->row();
	}
}
