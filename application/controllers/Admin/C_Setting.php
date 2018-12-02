<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');	
		$this->load->library('session');
		$this->load->library('encrypt');

		$this->load->model('Admin/M_setting');

	}
	
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= MAIN PAGE -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	

	//Setting Index
	public function Main(){
		$this->checkSession();
		
		$data['Menu'] = 'Main Setting';
		$data['data'] = $this->M_setting->selectMain();

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Setting/V_Main',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	public function UpdateMain(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$facebook = $this->input->post('facebook');
		$twitter = $this->input->post('twitter');
		$instagram = $this->input->post('instagram');
		$youtube = $this->input->post('youtube');
		$alamat = $this->input->post('alamat');
		$short_description = $this->input->post('short_description');

		$update = $this->input->post('update');

		if(!empty($_FILES['icon']['name']) && isset($_FILES['icon']['name'])){

			$config['upload_path'] 			= './assets/images/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2048;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('icon')){

				$upload_data = $this->upload->data();

				$data = array(
					'nama' => $nama,
					'email' => $email,
					'no_telp' => $no_telp,
					'facebook_link' => $facebook,
					'twitter_link' => $twitter,
					'instagram_link' => $instagram,
					'youtube_link' => $youtube,
					'alamat' => $alamat,
					'short_description' => $short_description,
					'logo' => $upload_data['file_name']
				);			

				if($this->M_setting->setMain($data)){
					$this->session->set_flashdata('success','Setting Update');
					redirect('Admin/Setting/Main');	
				}else{
					$this->session->set_flashdata('error','Setting Failed');
					redirect('Admin/Setting/Main');
				}
			}else{
				$this->session->set_flashdata('error',$this->upload->display_errors());
				redirect('Admin/Setting/Main');	
			}
		}else{
			$data = array(
				'nama' => $nama,
				'email' => $email,
				'no_telp' => $no_telp,
				'facebook_link' => $facebook,
				'twitter_link' => $twitter,
				'instagram_link' => $instagram,
				'youtube_link' => $youtube,
				'alamat' => $alamat,
				'short_description' => $short_description
			);			

			if($this->M_setting->setMain($data)){
				$this->session->set_flashdata('success','Setting Update');
				redirect('Admin/Setting/Main');	
			}else{
				$this->session->set_flashdata('error','Setting Failed');
				redirect('Admin/Setting/Main');
			}
		}

		
	}
	
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= ABOUT PAGE -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	

	//Setting Index
	public function About(){
		$this->checkSession();
		
		$data['Menu'] = 'About Setting';
		$data['data'] = $this->M_setting->selectAbout();
		$data['desc'] = $this->M_setting->selectDesc();
		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Setting/V_About',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	// public function UpdateAbout(){
	// 	$nama = $this->input->post('nama');
	// 	$email = $this->input->post('email');
	// 	$no_telp = $this->input->post('no_telp');
	// 	$facebook = $this->input->post('facebook');
	// 	$twitter = $this->input->post('twitter');
	// 	$instagram = $this->input->post('instagram');
	// 	$youtube = $this->input->post('youtube');
	// 	$alamat = $this->input->post('alamat');
	// 	$short_description = $this->input->post('short_description');

	// 	$update = $this->input->post('update');

	// 	if(!empty($_FILES['icon']['name']) && isset($_FILES['icon']['name'])){

	// 		$config['upload_path'] 			= './assets/images/';
	// 		$config['allowed_types']        = 'gif|jpg|png|jpeg';
	// 		$config['max_size']             = 2048;

	// 		$this->load->library('upload', $config);

	// 		if ($this->upload->do_upload('icon')){

	// 			$upload_data = $this->upload->data();

	// 			$data = array(
	// 				'nama' => $nama,
	// 				'email' => $email,
	// 				'no_telp' => $no_telp,
	// 				'facebook_link' => $facebook,
	// 				'twitter_link' => $twitter,
	// 				'instagram_link' => $instagram,
	// 				'youtube_link' => $youtube,
	// 				'alamat' => $alamat,
	// 				'short_description' => $short_description,
	// 				'logo' => $upload_data['file_name']
	// 			);			

	// 			if($this->M_setting->setMain($data)){
	// 				$this->session->set_flashdata('success','Setting Update');
	// 				redirect('Admin/Setting/Main');	
	// 			}else{
	// 				$this->session->set_flashdata('error','Setting Failed');
	// 				redirect('Admin/Setting/Main');
	// 			}
	// 		}else{
	// 			$this->session->set_flashdata('error',$this->upload->display_errors());
	// 			redirect('Admin/Setting/Main');	
	// 		}
	// 	}else{
	// 		$data = array(
	// 			'nama' => $nama,
	// 			'email' => $email,
	// 			'no_telp' => $no_telp,
	// 			'facebook_link' => $facebook,
	// 			'twitter_link' => $twitter,
	// 			'instagram_link' => $instagram,
	// 			'youtube_link' => $youtube,
	// 			'alamat' => $alamat,
	// 			'short_description' => $short_description
	// 		);			

	// 		if($this->M_setting->setMain($data)){
	// 			$this->session->set_flashdata('success','Setting Update');
	// 			redirect('Admin/Setting/Main');	
	// 		}else{
	// 			$this->session->set_flashdata('error','Setting Failed');
	// 			redirect('Admin/Setting/Main');
	// 		}
	// 	}

	public function UpdateDescTitle(){
		$judul = $this->input->post('judul');
		$id_web_desc = $this->input->post('id_web_desc');

		$data = array(
			'judul' => $judul,
			'id_web_desc' => $id_web_desc,
			'id_web_main' => 1
		);

		$this->M_setting->setDesc($data);

		echo json_encode($data);

	}

	public function UpdateDescText(){
		$short_desc = $this->input->post('short_desc');
		$id_web_desc = $this->input->post('id_web_desc');

		$data = array(
			'short_desc' => $short_desc,
			'id_web_desc' => $id_web_desc,
			'id_web_main' => 1
		);

		$this->M_setting->setDesc($data);
		
		echo json_encode($data);

	}

	public function UpdateDescLogo(){
		
		$logo_desc = $this->input->post('logo_desc');
		$id_web_desc = $this->input->post('id_web_desc');

		$data = array(
			'logo_desc' => $logo_desc,
			'id_web_desc' => $id_web_desc,
			'id_web_main' => 1
		);

		$this->M_setting->setDesc($data);
		
		echo json_encode($data);

	}
		
	// }
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	// Insert Setting
	public function Insert(){
		
		$nama_setting = $this->input->post('nama_setting');
		$deskripsi = $this->input->post('deskripsi');

		$data = array( 
			'nama_setting' => $nama_setting,
			'deskripsi' => $deskripsi
		);
		
		if($id = $this->M_setting->insert($data)){
			
			/* Encrypt ID */
			$encrypted_string = $this->encrypt->encode($id);
			$id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
			
			redirect('Admin/Setting/Image/'.$id);
		}else{
			$this->session->set_flashdata('error','Terjadi error saat insert setting');
			redirect('Admin/Setting');
		}

	}

	// Upload Image Setting
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
				'status' => 'setting',
				'file_name' => $upload_data['file_name'],
				'location' => $upload_data['full_path'],
				'token' => $token
			);			
			$this->M_setting->insertImage($data);
		}else{
			echo $this->upload->display_errors();
		}

	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= UPDATE SECTION -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= */
	
	public function Update(){

		$id_setting = $this->input->post('id');
		$nama_setting = $this->input->post('nama_setting');
		$deskripsi = $this->input->post('deskripsi');

		$data = array( 
			'nama_setting' => $nama_setting,
			'deskripsi' => $deskripsi
		);
		
		if($id = $this->M_setting->update($data,$id_setting)){
			$this->session->set_flashdata('success','Setting berhasil diupdate');	
			redirect('Admin/Setting');
		}else{
			$this->session->set_flashdata('error','Terjadi error saat update setting');
			redirect('Admin/Setting');
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

		if($result = $this->M_setting->getImage($data)){

			$filename = $result[0]['file_name'];
			$path = str_replace("index.php", "",$_SERVER['SCRIPT_NAME']);
			$file = $_SERVER['CONTEXT_DOCUMENT_ROOT'].$path.'assets/images/'.$filename;
			
			$this->M_setting->removeImage($data);
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
			'status' => 'setting'
		);

		// Remove all picture
		if($result = $this->M_setting->getImage($image)){
			foreach($result as $value) {
				$filename = $value['file_name'];
				$path = str_replace("index.php", "",$_SERVER['SCRIPT_NAME']);
				$file = $_SERVER['CONTEXT_DOCUMENT_ROOT'].$path.'assets/images/'.$filename;

				$this->M_setting->removeImage($image);
				if(file_exists($file)){
					unlink($file);
				}
			}
			
		}


		$data = array(
			'id_setting' => $plaintext_string
		);

		if($this->M_setting->delete($data)){
			$this->session->set_flashdata('success' , "Setting berhasil didelete");
			redirect('Admin/Setting');
		}else{
			$this->session->set_flashdata('error' ,"Ada kesalahan saat menghapus data");
			redirect('Admin/Setting');
		}

	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= FUNCTION SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	public function goAhead($message){
		if(true){
			$this->session->set_flashdata('success' , "Setting berhasil ".$message);
			redirect('Admin/Setting');
		}else{
			$this->session->set_flashdata('error' ,$this->upload->display_errors());
			redirect('Admin/Setting');
		}
	}

	public function checkSession(){
		if(!$this->session->userdata('id_user')){
			redirect('Login');
		}
	}
}
