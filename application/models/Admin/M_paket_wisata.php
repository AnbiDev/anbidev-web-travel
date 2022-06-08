<?php
class M_paket_wisata extends CI_Model
{

	public function __construct()
	{
		$this->load->database();
		$this->load->library('encrypt');
		$this->load->helper('url');
		$this->load->library('session');
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function insert($data)
	{
		$this->db->insert('tbl_paket_wisata', $data);
		return $this->db->insert_id();
	}

	public function insertLink($data)
	{
		return $this->db->insert('tbl_link_destinasi_paket_wisata', $data);
	}

	public function insertImage($data)
	{
		return $this->db->insert('tbl_gambar', $data);
	}

	public function setFasilitas($data)
	{
		return $this->db->insert('tbl_fasilitas', $data);
	}

	public function setItinetary($data)
	{
		return $this->db->insert('tbl_itinetary', $data);
	}

	public function setHargaDetail($data)
	{
		$this->db->insert('tbl_harga_detail', $data);
		return $this->db->insert_id();
	}
	/* -=-=-=-=-=-=-=-=-=-=-=-=-= SELECT SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */

	public function selectAll()
	{
		$this->db->select('*');
		$this->db->from("tbl_paket_wisata");
		$data = $this->db->get();

		if ($data->num_rows() > 0) {
			return $data->result_array();
		} else {
			return false;
		}
	}

	public function getLinkDestinasi($data)
	{
		$this->db->select('*');
		$this->db->from('tbl_destinasi td');
		$this->db->join('tbl_link_destinasi_paket_wisata tl', ' td.id_destinasi = tl.id_destinasi', 'inner');
		$this->db->where($data);
		$data = $this->db->get();

		if ($data->num_rows() > 0) {
			return $data->result_array();
		} else {
			return false;
		}
	}

	public function getPaketWisata($data)
	{
		$data = $this->db->get_where('tbl_paket_wisata', $data);
		if ($data->num_rows() > 0) {
			return $data->result_array();
		} else {
			return false;
		}
	}

	public function getPaketWisataDetail($data)
	{
		$this->db->select("*, tw.deskripsi");
		$this->db->from('tbl_paket_wisata tw');
		$this->db->join('tbl_link_destinasi_paket_wisata tl', ' tw.id_paket_wisata = tl.id_paket_wisata', 'left');
		$this->db->join('tbl_destinasi td', ' td.id_destinasi = tl.id_destinasi', 'left');
		$this->db->join('tbl_gambar tg', ' tg.id = td.id_destinasi', 'outter');
		$this->db->where($data);

		$data  = $this->db->get();

		if ($data->num_rows() > 0) {
			return $data->result_array();
		} else {
			return false;
		}
	}

	public function getFasilitas($data)
	{
		$data = $this->db->get_where('tbl_fasilitas', $data);
		if ($data->num_rows() > 0) {
			return $data->result_array();
		} else {
			return false;
		}
	}

	public function getItinetary($data)
	{
		$data = $this->db->get_where('tbl_itinetary', $data);
		if ($data->num_rows() > 0) {
			return $data->result_array();
		} else {
			return false;
		}
	}

	public function getHargaDetail($data)
	{
		$data = $this->db->get_where('tbl_harga_detail', $data);
		if ($data->num_rows() > 0) {
			return $data->result_array();
		} else {
			return false;
		}
	}


	public function getImage($data)
	{
		$data = $this->db->get_where('tbl_gambar', $data);
		if ($data->num_rows() > 0) {
			return $data->result_array();
		} else {
			return false;
		}
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-= UPDATE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function update($data, $id)
	{
		$this->db->where('id_paket_wisata', $id);
		return $this->db->update('tbl_paket_wisata', $data);
	}

	public function updateLink($data, $id_paket_wisata, $id_destinasi)
	{
		$this->db->where('id_paket_wisata', $id_paket_wisata);
		$this->db->where('id_destinasi', $id_destinasi);
		return $this->db->update('tbl_link_destinasi_paket_wisata', $data);
	}

	public function updateFasilitas($data, $id)
	{
		$this->db->where('id_paket_wisata', $id);
		return $this->db->update('tbl_fasilitas', $data);
	}

	public function updateItinetary($data, $id)
	{
		$this->db->where('id_paket_wisata', $id);
		return $this->db->update('tbl_itinetary', $data);
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function removeImage($data)
	{
		$this->db->delete('tbl_gambar', $data);
	}

	public function removeHargaDetail($data)
	{
		$this->db->delete('tbl_harga_detail', $data);
	}

	public function delete($data)
	{
		return $this->db->delete('tbl_paket_wisata', $data);
	}

	public function deleteFasilitas($data)
	{
		return $this->db->delete('tbl_fasilitas', $data);
	}

	public function deleteItinetary($data)
	{
		return $this->db->delete('tbl_itinetary', $data);
	}

	public function deleteHargaDetail($data)
	{
		return $this->db->delete('tbl_harga_detail', $data);
	}

	public function deleteLink($data)
	{
		return $this->db->delete('tbl_link_destinasi_paket_wisata', $data);
	}
}
