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
		$this->db->insert('tbl_gambar',$data);
	}

	public function removeImage($data){
		$this->db->delete('tbl_gambar',$data);
	}

	public function getImage($data){
		$data = $this->db->get_where('tbl_gambar',$data);
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

}