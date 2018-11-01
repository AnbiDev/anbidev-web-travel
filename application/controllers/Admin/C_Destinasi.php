<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Destinasi extends CI_Controller {

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
	public function index(){
		// $this->checkSession();
		// $user_id = $this->session->userid;
		
		$data['Menu'] = 'Dashboard';
		
		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Destinasi/V_Index',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Create  Destinasi View
	public function Create(){
		// $this->checkSession();
		// $user_id = $this->session->userid;
		
		$data['Menu'] = 'Create';
		
		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Destinasi/V_Create',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Upload Image View
	public function Image($id){
		$data['Menu'] = 'Image';

		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);



		$data['id_destinasi'] = $plaintext_string;

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Destinasi/V_Image',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	// Insert Destinasi
	public function Insert(){
		
		$nama_destinasi = $this->input->post('nama_destinasi');
		$deskripsi = $this->input->post('deskripsi');

		$data = array( 
			'nama_destinasi' => $nama_destinasi,
			'deskripsi' => $deskripsi
		);
		
		if($id = $this->M_destinasi->insert($data)){
			
			/* Encrypt ID */
			$encrypted_string = $this->encrypt->encode($value['id_dok']);
			$id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
			
			redirect('Admin/Destinasi/Image/'.$id);
		}else{
			$this->session->set_flashdata('error','Terjadi error saat insert destinasi');
			redirect('Admin/Destinasi');
		}

	}

	// Upload Image Destinasi
	public function UploadImage(){
		$id = $this->input->post('id_destinasi');
		$token = $this->input->post('token');

		$config['upload_path'] = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')){

			$upload_data = $this->upload->data();
			$data = array(
				'id' => $id,
				'status' => 'destinasi',
				'file_name' => $upload_data['file_name'],
				'location' => $upload_data['full_path'],
				'token' => $token
			);			
			$this->M_destinasi->insertImage($data);
		}

	}
	
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= */
	
	//Untuk menghapus foto
	function RemoveImage(){

		//Ambil token foto
		$token = $this->input->post('token');

		$data  = array(
			'token' => $token
		);

		if($result = $this->M_destinasi->getImage($data)){
		
			$filename = $result[0]['file_name'];
		
			if(file_exists($file = base_url('assets/images/'.$filename))){
				unlink($file);
			}
			$this->M_destinasi->removeImage($data);
		}

		echo "{}";
	}	

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= FUNCTION SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	public function goAhead(){
		if(true){
			$this->session->set_flashdata('success' , "Destinasi berhasil ditambahkan");
			redirect('Admin/Destinasi');
		}else{
			$this->session->set_flashdata('error' ,$this->upload->display_errors());
			redirect('Admin/Destinasi');
		}
	}

	public function checkSession(){
		if($this->session->is_logged){

		}else{
			redirect('');
		}
	}
}
