<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Pemesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');	
		$this->load->library('session');
		$this->load->library('encrypt');

		$this->load->model('Admin/M_pemesanan');
		$this->load->model('Admin/M_paket_wisata');

		// if($this->session->userdata('logged_in')!=TRUE) {
		// 	$this->load->helper('url');
		// 	$this->session->set_userdata('last_page', current_url());
		// 	redirect('index');
		// 	$this->session->set_userdata('Responsbility', 'some_value');
		// }

	}
	
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= LOAD PAGE -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	

	//Pemesanan Index
	public function index(){
		$this->checkSession();
		
		
		$data['Menu'] = 'Pemesanan';
		$data['data'] = $this->M_pemesanan->selectAll();

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Pemesanan/V_Index',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Create  Pemesanan View
	public function Create(){
		$this->checkSession();
		
		
		$data['Menu'] = 'Create Pemesanan';
		$data['paket_wisata'] = $this->M_paket_wisata->selectAll();
		
		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Pemesanan/V_Create',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Edit  Pemesanan View
	public function Edit($id){
		$this->checkSession();
		
		
		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['Menu'] = 'Edit Pemesanan';
		$data['id']  = $plaintext_string;

		$id = array(
			'id_pemesanan' => $plaintext_string
		);
		$data['paket_wisata'] = $this->M_paket_wisata->selectAll();
		$data['data'] = $this->M_pemesanan->getPemesanan($id);


		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Pemesanan/V_Edit',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}


	//  Pemesanan View
	public function Detail($id){
		$this->checkSession();
		
		
		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$image = array(
					'id' => $plaintext_string,
					'status' => 'pemesanan'
				);
		$where = array('id_pemesanan' => $plaintext_string);

		$data['Menu'] = 'Detail';
		$data['id'] = $plaintext_string;
		$data['data'] = $this->M_pemesanan->getPemesanan($where);

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Pemesanan/V_Detail',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Upload Image View
	public function Image($id,$edit = false){
		
		$data['Menu'] = 'Image';

		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['id_pemesanan'] = $plaintext_string;
		
		$where = array(
			'id' => $plaintext_string,
			'status' => 'pemesanan'	
		);
		$data['message'] = 'ditambahkan';
		$data['image'] = '';
		if($edit){
			$data['image'] = $this->M_pemesanan->getImage($where);
			$data['message'] = 'diupdate';
		}

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Pemesanan/V_Image',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	// Insert Pemesanan
	public function Insert(){
		
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$id_paket_wisata = $this->input->post('id_paket_wisata');
		$no_telepon = $this->input->post('no_telepon');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$level = $this->input->post('level');

		$data = array( 
			'nama' => $nama,
			'pesan' => $pesan,
			'id_paket_wisata' => $id_paket_wisata,
			'no_telepon' => $no_telepon,
			'email' => $email,	
			'alamat' => $alamat,
			'tanggal' => date('Y-m-d h:i:s')
		);
		
		if($id = $this->M_pemesanan->insert($data)){
			$this->session->set_flashdata('success','Pemesanan berhasil ditambahkan');
			if ($level = 'user') {
				redirect('Reservasi');
			} elseif ($level = 'admin') {
				redirect('Admin/Pemesanan');
			}
		}else{
			$this->session->set_flashdata('error','Terjadi error saat insert pemesanan');
			redirect('Admin/Pemesanan');
		}

	}

	// Upload Image Pemesanan
	public function UploadImage(){
		$id = $this->input->post('id');
		$token = $this->input->post('token');

		$config['upload_path'] = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		// $config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')){

			$upload_data = $this->upload->data();
			$data = array(
				'id' => $id,
				'status' => 'pemesanan',
				'file_name' => $upload_data['file_name'],
				'location' => $upload_data['full_path'],
				'token' => $token
			);			
			$this->M_pemesanan->insertImage($data);
		}else{
			echo $this->upload->display_errors();
		}

	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= UPDATE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= */
	
	public function Update(){

		$id_pemesanan = $this->input->post('id');
		$nama = $this->input->post('nama');
		$pesan = $this->input->post('pesan');
		$id_paket_wisata = $this->input->post('id_paket_wisata');
		$no_telepon = $this->input->post('no_telepon');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');


		$data = array( 
			'nama' => $nama,
			'pesan' => $pesan,
			'id_paket_wisata' => $id_paket_wisata,
			'no_telepon' => $no_telepon,
			'email' => $email,	
			'alamat' => $alamat,
			// 'tanggal' => date('Y-m-d h:i:s')
		);
		
		if($id = $this->M_pemesanan->update($data,$id_pemesanan)){
			$this->session->set_flashdata('success','Pemesanan berhasil diupdate');	
			redirect('Admin/Pemesanan');
		}else{
			$this->session->set_flashdata('error','Terjadi error saat update pemesanan');
			redirect('Admin/Pemesanan');
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

		if($result = $this->M_pemesanan->getImage($data)){

			$filename = $result[0]['file_name'];
			$path = str_replace("index.php", "",$_SERVER['SCRIPT_NAME']);
			$file = $_SERVER['CONTEXT_DOCUMENT_ROOT'].$path.'assets/images/'.$filename;
			
			$this->M_pemesanan->removeImage($data);
			if(file_exists($file)){	
				unlink($file);
			}
			// }
			// echo $file;
		}
		echo "{}";

	}	

	function Delete($id){
		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$image = array(
			'id' => $plaintext_string,
			'status' => 'pemesanan'
		);

		// Remove all picture
		if($result = $this->M_pemesanan->getImage($image)){
			foreach($result as $value) {
				$filename = $value['file_name'];
				$path = str_replace("index.php", "",$_SERVER['SCRIPT_NAME']);
				$file = $_SERVER['CONTEXT_DOCUMENT_ROOT'].$path.'assets/images/'.$filename;

				$this->M_pemesanan->removeImage($image);
				if(file_exists($file)){
					unlink($file);
				}
			}
			
		}

			
		$data = array(
			'id_pemesanan' => $plaintext_string
		);

		if($this->M_pemesanan->delete($data)){
			$this->session->set_flashdata('success' , "Pemesanan berhasil didelete");
			redirect('Admin/Pemesanan');
		}else{
			$this->session->set_flashdata('error' ,"Ada kesalahan saat menghapus data");
			redirect('Admin/Pemesanan');
		}

	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= FUNCTION SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	public function goAhead($message){
		if(true){
			$this->session->set_flashdata('success' , "Pemesanan berhasil ".$message);
			redirect('Admin/Pemesanan');
		}else{
			$this->session->set_flashdata('error' ,$this->upload->display_errors());
			redirect('Admin/Pemesanan');
		}
	}

	public function checkSession(){
		if(!$this->session->userdata('id_user')){
			redirect('Login');
		}
	}
}
