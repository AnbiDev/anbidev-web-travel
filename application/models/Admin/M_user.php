<?php
class M_user extends CI_Model
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
		$this->db->insert('tbl_user', $data);
		return $this->db->insert_id();
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-= SELECT SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */

	public function selectAll()
	{
		$this->db->select('*');
		$this->db->from("tbl_user");
		$data = $this->db->get();

		if ($data->num_rows() > 0) {
			return $data->result_array();
		} else {
			return false;
		}
	}


	public function getUser($data)
	{
		$data = $this->db->get_where('tbl_user', $data);
		if ($data->num_rows() > 0) {
			return $data->result_array();
		} else {
			return false;
		}
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= UPDATE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */
	public function update($data, $id)
	{
		$this->db->where('id_user', $id);
		return $this->db->update('tbl_user', $data);
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=- */

	public function delete($data)
	{
		return $this->db->delete('tbl_user', $data);
	}
}
