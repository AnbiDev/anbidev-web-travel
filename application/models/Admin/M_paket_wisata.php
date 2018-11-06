<?php
class M_paket_wisata extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
		$this->load->helper('url');
		$this->load->library('session');
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function insert($data){
		$this->db->insert('tbl_paket_wisata',$data);
		return $this->db->insert_id();
	}

	public function insertLink($data){
		return $this->db->insert('tbl_link_destinasi_paket_wisata',$data)
	}

	public function insertImage($data){
		return $this->db->insert('tbl_gambar',$data);
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-= SELECT SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	
	public function selectAll(){
		$this->db->select('*');
		$this->db->from("tbl_paket_wisata");
		$data = $this->db->get();

		if($data->num_rows() > 0){
			return $data->result_array();
		}else{
			return false;
		}
	}


	public function getPaketWisata($data){
		$data = $this->db->get_where('tbl_paket_wisata',$data);
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
		return $this->db->update('tbl_paket_wisata',$data);

	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function removeImage($data){
		$this->db->delete('tbl_gambar',$data);
	}

	public function delete($data){
		return $this->db->delete('tbl_paket_wisata',$data);
	}
	

}