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

	public function UpdateAbout(){
		$about = $this->input->post('about');
	
		$data = array(
			'id_web_main' => 1,
			'about' => $about
		);			

		if($this->M_setting->setAbout($data)){
			$this->session->set_flashdata('success','About Update');
			redirect('Admin/Setting/About');	
		}else{
			$this->session->set_flashdata('error','About Failed');
			redirect('Admin/Setting/About');
		}
	}




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

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= SLIDER PAGE -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	



	//Slidder Index
	public function Slider(){
		$this->checkSession();
		
		$data['Menu'] = 'Slider Setting';
		$data['data'] = $this->M_setting->selectSlider();

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Setting/V_Slider',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Slidder Add Index
	public function SliderAdd(){
		$this->checkSession();
		
		$data['Menu'] = 'Slider Setting';
		$data['data'] = $this->M_setting->selectSlider();

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Setting/V_SliderAdd',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	// Upload Add Slider
	public function UploadSlider(){
		
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$link_to = $this->input->post('link_to');


		$config['upload_path'] 			= 	'./assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		// $config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file')){

			$upload_data = $this->upload->data();


			$slider = array(
				'judul' => $upload_data['file_name']
			);

			if($id = $this->M_setting->setSlider($slider)){
				$data = array(
					'id' => $id,
					'status' => 'slidder',
					'file_name' => $upload_data['file_name'],
					'location' => $upload_data['full_path'],
					'token' => $token
				);			
				
				$this->M_setting->insertImage($data);	
			}			
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
