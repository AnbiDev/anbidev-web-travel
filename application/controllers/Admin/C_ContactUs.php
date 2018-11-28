<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ContactUs extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');	
		$this->load->library('session');
		$this->load->library('encrypt');

		$this->load->model('Admin/M_contact_us');

		// if($this->session->userdata('logged_in')!=TRUE) {
		// 	$this->load->helper('url');
		// 	$this->session->set_userdata('last_page', current_url());
		// 	redirect('index');
		// 	$this->session->set_userdata('Responsbility', 'some_value');
		// }

	}
	
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= LOAD PAGE -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	

	//ContactUs Index
	public function index(){

		$this->checkSession();
		$data['Menu'] = 'ContactUs';
		$data['data'] = $this->M_contact_us->selectAll();
		
		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/ContactUs/V_Index',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Create  ContactUs View
	public function Create(){

		$this->checkSession();
		$data['Menu'] = 'Create ContactUs';
		
		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/ContactUs/V_Create',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Edit  ContactUs View
	public function Edit($id){
		
		$this->checkSession();

		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['Menu'] = 'Edit ContactUs';
		$data['id']  = $plaintext_string;

		$id = array(
			'id_contact_us' => $plaintext_string
		);

		$data['data'] = $this->M_contact_us->getContactUs($id);


		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/ContactUs/V_Edit',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}


	//  ContactUs View
	public function Detail($id){
		
		$this->checkSession();
		
		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$image = array(
					'id' => $plaintext_string,
					'status' => 'contact_us'
				);
		$where = array('id_contact_us' => $plaintext_string);

		$data['Menu'] = 'Detail';
		$data['image'] = $this->M_contact_us->getImage($image);
		$data['id'] = $plaintext_string;
		$data['data'] = $this->M_contact_us->getContactUs($where);

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/ContactUs/V_Detail',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Upload Image View
	public function Image($id,$edit = false){
		
		$data['Menu'] = 'Image';

		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['id_contact_us'] = $plaintext_string;
		
		$where = array(
			'id' => $plaintext_string,
			'status' => 'contact_us'	
		);
		$data['message'] = 'ditambahkan';
		$data['image'] = '';
		if($edit){
			$data['image'] = $this->M_contact_us->getImage($where);
			$data['message'] = 'diupdate';
		}

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/ContactUs/V_Image',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	// Insert ContactUs
	public function Insert(){
		
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');

		$data = array( 
			'nama' => $nama,
			'email'	=> $email,
			'pesan' => $pesan
		);
		
		if($id = $this->M_contact_us->insert($data)){
			$this->session->set_flashdata('success','Contact Us berhasil ditambahkan');			
			redirect('Admin/ContactUs');
		}else{
			$this->session->set_flashdata('error','Terjadi error saat insert contact_us');
			redirect('Admin/ContactUs');
		}

	}

	// Upload Image ContactUs
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
				'status' => 'contact_us',
				'file_name' => $upload_data['file_name'],
				'location' => $upload_data['full_path'],
				'token' => $token
			);			
			$this->M_contact_us->insertImage($data);
		}else{
			echo $this->upload->display_errors();
		}

	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= UPDATE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= */
	
	public function Update(){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');

		$data = array( 
			'nama' => $nama,
			'email'	=> $email,
			'pesan' => $pesan
		);
		
		if($id = $this->M_contact_us->update($data,$id)){
			$this->session->set_flashdata('success','Contact Us berhasil diupdate');			
			redirect('Admin/ContactUs');
		}else{
			$this->session->set_flashdata('error','Terjadi error saat insert contact_us');
			redirect('Admin/ContactUs');
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

		if($result = $this->M_contact_us->getImage($data)){

			$filename = $result[0]['file_name'];
			$path = str_replace("index.php", "",$_SERVER['SCRIPT_NAME']);
			$file = $_SERVER['CONTEXT_DOCUMENT_ROOT'].$path.'assets/images/'.$filename;
			
			$this->M_contact_us->removeImage($data);
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
			'status' => 'contact_us'
		);

		// Remove all picture
		if($result = $this->M_contact_us->getImage($image)){
			foreach($result as $value) {
				$filename = $value['file_name'];
				$path = str_replace("index.php", "",$_SERVER['SCRIPT_NAME']);
				$file = $_SERVER['CONTEXT_DOCUMENT_ROOT'].$path.'assets/images/'.$filename;

				$this->M_contact_us->removeImage($image);
				if(file_exists($file)){
					unlink($file);
				}
			}
			
		}

			
		$data = array(
			'id_contact_us' => $plaintext_string
		);

		if($this->M_contact_us->delete($data)){
			$this->session->set_flashdata('success' , "ContactUs berhasil didelete");
			redirect('Admin/ContactUs');
		}else{
			$this->session->set_flashdata('error' ,"Ada kesalahan saat menghapus data");
			redirect('Admin/ContactUs');
		}

	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= FUNCTION SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	public function goAhead($message){
		if(true){
			$this->session->set_flashdata('success' , "ContactUs berhasil ".$message);
			redirect('Admin/ContactUs');
		}else{
			$this->session->set_flashdata('error' ,$this->upload->display_errors());
			redirect('Admin/ContactUs');
		}
	}

	public function checkSession(){
		if(!$this->session->userdata('id_user')){
			redirect('Login');
		}
	}
}
