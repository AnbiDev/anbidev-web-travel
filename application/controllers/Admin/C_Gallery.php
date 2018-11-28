<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');	
		$this->load->library('session');
		$this->load->library('encrypt');

		$this->load->model('Admin/M_gallery');

		// if($this->session->userdata('logged_in')!=TRUE) {
		// 	$this->load->helper('url');
		// 	$this->session->set_userdata('last_page', current_url());
		// 	redirect('index');
		// 	$this->session->set_userdata('Responsbility', 'some_value');
		// }

	}
	
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= LOAD PAGE -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	

	//Gallery Index
	public function index(){
		$this->checkSession();
		
		$data['Menu'] = 'Gallery';
		$data['data'] = $this->M_gallery->selectAll();

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Gallery/V_Index',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Gallery Index
	public function All(){
		$this->checkSession();
		
		$data['Menu'] = 'Gallery';
		$data['data'] = $this->M_gallery->selectAllPicture();

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Gallery/V_ImageAll',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}



	//Upload Image View
	public function Image($id = false,$edit = false){
		
		$data['Menu'] = 'Image';

		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['id_gallery'] = $plaintext_string;
		
		$where = array(
			'id' => $plaintext_string,
			'status' => 'gallery'	
			);

		$data['message'] = 'ditambahkan';
		$data['image'] = '';
		
		if($edit){
			$data['image'] = $this->M_gallery->getImage($where);
			$data['message'] = 'diupdate';
		}

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Gallery/V_Image',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	public function getTitle(){
		
		$id = $this->input->post('id');

		$where = array(
			'id_gallery' => $id
			);

		$data = $this->M_gallery->getGallery($where);

		echo json_encode($data);
	}



	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	// Insert Gallery
	public function Insert(){
		
		$nama_gallery = $this->input->post('judul');

		$data = array( 
			'nama_gallery' => $nama_gallery,
			'deskripsi' => $deskripsi
			);
		
		if($id = $this->M_gallery->insert($data)){
			
			/* Encrypt ID */
			$encrypted_string = $this->encrypt->encode($id);
			$id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
			
			redirect('Admin/Gallery/Image/'.$id);
		}else{
			$this->session->set_flashdata('error','Terjadi error saat insert gallery');
			redirect('Admin/Gallery');
		}

	}

	// Upload Image Gallery
	public function UploadImage(){
		

		$token = $this->input->post('token');


		$config['upload_path'] = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		// $config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')){

			$upload_data = $this->upload->data();


			$gallery = array(
				'judul' => $upload_data['file_name']
				);

			if($id = $this->M_gallery->insert($gallery)){
				$data = array(
					'id' => $id,
					'status' => 'gallery',
					'file_name' => $upload_data['file_name'],
					'location' => $upload_data['full_path'],
					'token' => $token
					);			
				$this->M_gallery->insertImage($data);	
			}			
			
		}else{
			echo $this->upload->display_errors();
		}

	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= UPDATE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= */
	
	public function Update(){

		$id_gallery = $this->input->post('id');
		$nama_gallery = $this->input->post('nama_gallery');
		$deskripsi = $this->input->post('deskripsi');

		$data = array( 
			'nama_gallery' => $nama_gallery,
			'deskripsi' => $deskripsi
			);
		
		if($id = $this->M_gallery->update($data,$id_gallery)){
			$this->session->set_flashdata('success','Gallery berhasil diupdate');	
			redirect('Admin/Gallery');
		}else{
			$this->session->set_flashdata('error','Terjadi error saat update gallery');
			redirect('Admin/Gallery');
		}
	}


	public function UpdateTitle(){

		$token = $this->input->post('token');
		$title = $this->input->post('title');
		
		$where = array(
			'token' => $token,
			'status' => 'gallery'
			);

		$image = $this->M_gallery->getImage($where);


		$data = array( 
			'judul' => $title
			);

		if($this->M_gallery->update($data,$image[0]['id'])){
			echo json_encode($data);
		}else{
			echo json_encode(false);
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

		if($result = $this->M_gallery->getImage($data)){

			$filename = $result[0]['file_name'];
			$path = str_replace("index.php", "",$_SERVER['SCRIPT_NAME']);
			$file = $_SERVER['CONTEXT_DOCUMENT_ROOT'].$path.'assets/images/'.$filename;
			


			$this->M_gallery->removeImage($data);
			if(file_exists($file)){	
				unlink($file);
			}
			// }
			// echo $file;
		}
		echo "{}";

	}	

	function Delete(){
		//Ambil token foto
		$token = $this->input->post('token');

		$image  = array(
			'token' => $token
			);

		// Remove all picture
		if($result = $this->M_gallery->getImage($image)){
			foreach($result as $value) {
				$filename = $value['file_name'];
				$path = str_replace("index.php", "",$_SERVER['SCRIPT_NAME']);
				$file = $_SERVER['CONTEXT_DOCUMENT_ROOT'].$path.'assets/images/'.$filename;

				$data = array(
					'id_gallery' => $value['id']
					);

				if($this->M_gallery->delete($data)){
					$this->M_gallery->removeImage($image);
					if(file_exists($file)){
						unlink($file);
					}else{
						echo false;
					}	
				}else{
					echo false;
				}	
			}
		}


		echo json_encode($image);


	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= FUNCTION SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	public function goAhead($message){
		if(true){
			$this->session->set_flashdata('success' , "Gallery berhasil ".$message);
			redirect('Admin/Gallery');
		}else{
			$this->session->set_flashdata('error' ,$this->upload->display_errors());
			redirect('Admin/Gallery');
		}
	}

	public function checkSession(){
		if(!$this->session->userdata('id_user')){
			redirect('Login');
		}
	}
}
