<?php
class M_gallery extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
		$this->load->helper('url');
		$this->load->library('session');
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function insert($data){
		$this->db->insert('tbl_gallery',$data);
		return $this->db->insert_id();
	}

	public function insertImage($data){
		$this->db->insert('tbl_gambar',$data);
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-= SELECT SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	
	public function selectAll(){
		$this->db->select('*');
		$this->db->from("tbl_gallery");
		$this->db->join("tbl_gambar","tbl_gambar.id = tbl_gallery.id_gallery","left");
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}

	/* trial dev temp */
	public function selectAllPicture(){
		$this->db->select('*');
		$this->db->from("tbl_gambar");
		$data = $this->db->get();
		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}	
	}
	


	public function getGallery($data){
		$data = $this->db->get_where('tbl_gallery',$data);
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
		$this->db->where('id_gallery',$id);
		return $this->db->update('tbl_gallery',$data);

	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function removeImage($data){
		$this->db->delete('tbl_gambar',$data);
	}

	public function delete($data){
		return $this->db->delete('tbl_gallery',$data);
	}
	

}