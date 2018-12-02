<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

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

	public function setDesc($data){
		$this->db->where('id_web_desc',$data['id_web_desc']);
		return $this->db->update('tbl_web_desc',$data);
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= SELECT SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function selectMain(){
		$this->db->select('*');
		$this->db->from('tbl_web_main');
		$data = $this->db->get();

		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function selectAbout(){
		$this->db->select('*');
		$this->db->from('tbl_web_about');
		$data = $this->db->get();

		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	public function selectDesc(){
		$this->db->select('*');
		$this->db->from('tbl_web_desc');
		$data = $this->db->get();

		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function removeImage($data){
		$this->db->delete('tbl_gambar',$data);
	}

	public function delete($data){
		return $this->db->delete('tbl_destinasi',$data);
	}
	

}