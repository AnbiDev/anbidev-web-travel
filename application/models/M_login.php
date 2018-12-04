<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_login extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
		$this->load->helper('url');
		$this->load->library('session');
	}


	public function getData($user,$pass){
		return $this->db->get_where('tbl_user',array('username' => $user, 'password' => $pass))->result_array();
	}

	public function proseslogin($user)
	{
		$this->db->where('username',$user);
		return $this->db->get('tbl_user')->row();
	}
}
