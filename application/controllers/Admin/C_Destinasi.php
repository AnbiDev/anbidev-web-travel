<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Destinasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('session');
		$this->load->library('encrypt');

		$this->load->model('Admin/M_destinasi');

		// if($this->session->userdata('logged_in')!=TRUE) {
		// 	$this->load->helper('url');
		// 	$this->session->set_userdata('last_page', current_url());
		// 	redirect('index');
		// 	$this->session->set_userdata('Responsbility', 'some_value');
		// }

	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= LOAD PAGE -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */

	//Destinasi Index
	public function index()
	{
		$this->checkSession();

		$data['Menu'] = 'Destinasi';
		$data['data'] = $this->M_destinasi->selectAll();

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header', $data);
		$this->load->view('Admin/V_Sidebar', $data);
		$this->load->view('Admin/Destinasi/V_Index', $data);
		$this->load->view('Admin/V_Footer', $data);
	}

	//Create  Destinasi View
	public function Create()
	{
		$this->checkSession();

		$data['Menu'] = 'Create Destinasi';

		$this->load->view('Admin/V_Header', $data);
		$this->load->view('Admin/V_Sidebar', $data);
		$this->load->view('Admin/Destinasi/V_Create', $data);
		$this->load->view('Admin/V_Footer', $data);
	}

	//Edit  Destinasi View
	public function Edit($id)
	{
		$this->checkSession();

		/* Decrypt ID */
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['Menu'] = 'Edit Destinasi';
		$data['id']  = $plaintext_string;

		$id = array(
			'id_destinasi' => $plaintext_string
		);

		$data['data'] = $this->M_destinasi->getDestinasi($id);


		$this->load->view('Admin/V_Header', $data);
		$this->load->view('Admin/V_Sidebar', $data);
		$this->load->view('Admin/Destinasi/V_Edit', $data);
		$this->load->view('Admin/V_Footer', $data);
	}


	//  Destinasi View
	public function Detail($id)
	{
		$this->checkSession();

		/* Decrypt ID */
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$image = array(
			'id' => $plaintext_string,
			'status' => 'destinasi'
		);
		$where = array('id_destinasi' => $plaintext_string);

		$data['Menu'] = 'Detail';
		$data['image'] = $this->M_destinasi->getImage($image);
		$data['id'] = $plaintext_string;
		$data['data'] = $this->M_destinasi->getDestinasi($where);

		$this->load->view('Admin/V_Header', $data);
		$this->load->view('Admin/V_Sidebar', $data);
		$this->load->view('Admin/Destinasi/V_Detail', $data);
		$this->load->view('Admin/V_Footer', $data);
	}

	//Upload Image View
	public function Image($id, $edit = false)
	{

		$data['Menu'] = 'Image';

		/* Decrypt ID */
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['id_destinasi'] = $plaintext_string;

		$where = array(
			'id' => $plaintext_string,
			'status' => 'destinasi'
		);
		$data['message'] = 'ditambahkan';
		$data['image'] = '';
		if ($edit) {
			$data['image'] = $this->M_destinasi->getImage($where);
			$data['message'] = 'diupdate';
		}

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header', $data);
		$this->load->view('Admin/V_Sidebar', $data);
		$this->load->view('Admin/Destinasi/V_Image', $data);
		$this->load->view('Admin/V_Footer', $data);
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */

	// Insert Destinasi
	public function Insert()
	{

		$nama_destinasi = $this->input->post('nama_destinasi');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
			'nama_destinasi' => $nama_destinasi,
			'deskripsi' => $deskripsi
		);

		if ($id = $this->M_destinasi->insert($data)) {

			/* Encrypt ID */
			$encrypted_string = $this->encrypt->encode($id);
			$id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);

			redirect('Admin/Destinasi/Image/' . $id);
		} else {
			$this->session->set_flashdata('error', 'Terjadi error saat insert destinasi');
			redirect('Admin/Destinasi');
		}
	}

	// Upload Image Destinasi
	public function UploadImage()
	{
		$id = $this->input->post('id');
		$token = $this->input->post('token');

		$config['upload_path'] = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		// $config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')) {

			$upload_data = $this->upload->data();
			$data = array(
				'id' => $id,
				'status' => 'destinasi',
				'file_name' => $upload_data['file_name'],
				'location' => $upload_data['full_path'],
				'token' => $token
			);
			$this->M_destinasi->insertImage($data);
		} else {
			echo $this->upload->display_errors();
		}
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= UPDATE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= */

	public function Update()
	{

		$id_destinasi = $this->input->post('id');
		$nama_destinasi = $this->input->post('nama_destinasi');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
			'nama_destinasi' => $nama_destinasi,
			'deskripsi' => $deskripsi
		);

		if ($id = $this->M_destinasi->update($data, $id_destinasi)) {
			$this->session->set_flashdata('success', 'Destinasi berhasil diupdate');
			redirect('Admin/Destinasi');
		} else {
			$this->session->set_flashdata('error', 'Terjadi error saat update destinasi');
			redirect('Admin/Destinasi');
		}
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= */

	//Untuk menghapus foto
	function RemoveImage()
	{

		//Ambil token foto
		$token = $this->input->post('token');

		$data  = array(
			'token' => $token
		);

		if ($result = $this->M_destinasi->getImage($data)) {

			$filename = $result[0]['file_name'];
			$path = str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
			$file = $_SERVER['CONTEXT_DOCUMENT_ROOT'] . $path . 'assets/images/' . $filename;

			$this->M_destinasi->removeImage($data);
			if (file_exists($file)) {
				unlink($file);
			}
			// }
			// echo $file;
		}
		echo "{}";
	}

	function Delete($id)
	{
		/* Decrypt ID */
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$image = array(
			'id' => $plaintext_string,
			'status' => 'destinasi'
		);

		// Remove all picture
		if ($result = $this->M_destinasi->getImage($image)) {
			foreach ($result as $value) {
				$filename = $value['file_name'];
				$path = str_replace("index.php", "", $_SERVER['SCRIPT_NAME']);
				$file = $_SERVER['CONTEXT_DOCUMENT_ROOT'] . $path . 'assets/images/' . $filename;

				$this->M_destinasi->removeImage($image);
				if (file_exists($file)) {
					unlink($file);
				}
			}
		}


		$data = array(
			'id_destinasi' => $plaintext_string
		);

		if ($this->M_destinasi->delete($data)) {
			$this->session->set_flashdata('success', "Destinasi berhasil didelete");
			redirect('Admin/Destinasi');
		} else {
			$this->session->set_flashdata('error', "Ada kesalahan saat menghapus data");
			redirect('Admin/Destinasi');
		}
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= FUNCTION SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */

	public function goAhead($message)
	{
		if (true) {
			$this->session->set_flashdata('success', "Destinasi berhasil " . $message);
			redirect('Admin/Destinasi');
		} else {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect('Admin/Destinasi');
		}
	}

	public function checkSession()
	{
		if (!$this->session->userdata('id_user')) {
			redirect('Login');
		}
	}
}
