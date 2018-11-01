<?php
class M_destinasi extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function insert($data){
		 $this->db->insert('tbl_destinasi',$data);
		 return $this->db->insert_id();
	}

	public function insertImage($data){
		$this->db->insert('tbl_image',$data);
	}


}