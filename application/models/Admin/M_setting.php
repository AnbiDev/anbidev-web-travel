<?php
class M_setting extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
		$this->load->helper('url');
		$this->load->library('session');
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= SET SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */

	public function setMain($data){
		$this->db->where('id_web_main',1);
		return $this->db->update('tbl_web_main',$data);
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function removeImage($data){
		$this->db->delete('tbl_gambar',$data);
	}

	public function delete($data){
		return $this->db->delete('tbl_destinasi',$data);
	}
	

}