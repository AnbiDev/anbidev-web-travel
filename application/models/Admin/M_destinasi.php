<?php
class M_destinasi extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
		$this->load->helper('url');
		$this->load->library('session');
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function insert($data){
		$this->db->insert('tbl_destinasi',$data);
		return $this->db->insert_id();
	}

	public function insertImage($data){
		$this->db->insert('tbl_gambar',$data);
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-= SELECT SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	
	public function selectAll(){
		$this->db->select('*');
		$this->db->from("tbl_destinasi");
		$data = $this->db->get();

		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}
	


	public function getDestinasi($data){
		$data = $this->db->get_where('tbl_destinasi',$data);
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}


	public function getImage($data){
		$data = $this->db->get_where('tbl_gambar',$data);
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-= UPDATE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function update($data,$id){
		$this->db->where('id_destinasi',$id);
		return $this->db->update('tbl_destinasi',$data);

	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function removeImage($data){
		$this->db->delete('tbl_gambar',$data);
	}

	public function delete($data){
		return $this->db->delete('tbl_destinasi',$data);
	}
	

}