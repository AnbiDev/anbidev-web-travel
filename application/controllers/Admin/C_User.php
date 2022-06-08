<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('encrypt');

		$this->load->model('Admin/M_user');

		// if($this->session->userdata('logged_in')!=TRUE) {
		// 	$this->load->helper('url');
		// 	$this->session->set_userdata('last_page', current_url());
		// 	redirect('index');
		// 	$this->session->set_userdata('Responsbility', 'some_value');
		// }

	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= LOAD SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */

	//Dashboard Index
	public function index()
	{
		$this->checkSession();


		$data['Menu'] = 'User';
		$data['data'] = $this->M_user->selectAll();

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header', $data);
		$this->load->view('Admin/V_Sidebar', $data);
		$this->load->view('Admin/User/V_Index', $data);
		$this->load->view('Admin/V_Footer', $data);
	}

	//Create Index
	public function Create()
	{
		$this->checkSession();


		$data['Menu'] = 'User';
		// $data['data'] = $this->M_user->selectAll();

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header', $data);
		$this->load->view('Admin/V_Sidebar', $data);
		$this->load->view('Admin/User/V_Create', $data);
		$this->load->view('Admin/V_Footer', $data);
	}

	//Create  User View
	public function Edit($id)
	{
		$this->checkSession();


		/* Decrypt ID */
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['Menu'] = 'Edit User';
		$data['id']  = $plaintext_string;

		$id = array(
			'id_user' => $plaintext_string
		);

		$data['data'] = $this->M_user->getUser($id);


		$this->load->view('Admin/V_Header', $data);
		$this->load->view('Admin/V_Sidebar', $data);
		$this->load->view('Admin/User/V_Edit', $data);
		$this->load->view('Admin/V_Footer', $data);
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */

	// Insert User
	public function Insert()
	{

		$username = $this->input->post('username');
		$level = $this->input->post('level');

		$password = $this->input->post('password');
		$password = md5(md5(md5($password)));


		$data = array(
			'username' => $username,
			'password' => $password,
			'level' => $level

		);

		if ($id = $this->M_user->insert($data)) {
			$this->session->set_flashdata('success', 'User berhasil ditambahkan');
			redirect('Admin/User');
		} else {
			$this->session->set_flashdata('error', 'Terjadi error saat insert user');
			redirect('Admin/User');
		}
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= UPDATE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= */

	public function Update()
	{

		$id_user = $this->input->post('id');
		$username = $this->input->post('username');
		$level = $this->input->post('level');

		$data = array(
			'username' => $nama_destinasi,
			'level' => $level
		);

		if ($id = $this->M_user->update($data, $id_user)) {
			$this->session->set_flashdata('success', 'User berhasil diupdate');
			redirect('Admin/User');
		} else {
			$this->session->set_flashdata('error', 'Terjadi error saat update user');
			redirect('Admin/User');
		}
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= */
	function Delete($id)
	{
		/* Decrypt ID */
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);


		$data = array(
			'id_user' => $plaintext_string
		);

		if ($this->M_user->delete($data)) {
			$this->session->set_flashdata('success', "User berhasil didelete");
			redirect('Admin/User');
		} else {
			$this->session->set_flashdata('error', "Ada kesalahan saat menghapus data");
			redirect('Admin/User');
		}
	}


	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= FUNCTION SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */

	public function checkSession()
	{
		if (!$this->session->userdata('id_user')) {
			redirect('Login');
		}
	}
}
