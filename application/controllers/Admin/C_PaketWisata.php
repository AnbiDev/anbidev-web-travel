<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_PaketWisata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');	
		$this->load->library('session');
		$this->load->library('encrypt');

		$this->load->model('Admin/M_paket_wisata');
		$this->load->model('Admin/M_destinasi');
		//$this->load->library('Database');

		// if($this->session->userdata('logged_in')!=TRUE) {
		// 	$this->load->helper('url');
		// 	$this->session->set_userdata('last_page', current_url());
		// 	redirect('index');
		// 	$this->session->set_userdata('Responsbility', 'some_value');
		// }

	}
	
	
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= LOAD PAGE -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	

	//PaketWisata Index
	public function index(){
		// $this->checkSession();
		// $user_id = $this->session->userid;
		
		$data['Menu'] = 'PaketWisata';
		
		$temp = array();
		$paket_wisata = $this->M_paket_wisata->selectAll();
		
		if(!empty($paket_wisata) && is_array($paket_wisata)){
			foreach ($paket_wisata as $value) {

				$destinasi = $this->M_paket_wisata->getLinkDestinasi($value['id_paket_wisata']);
				$value['destinasi'] = $destinasi;

				array_push($temp, $value);
			}
		}
		// echo "<pre>";
		// print_r($temp);
		// exit();	

		$data['data'] = $temp;

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/PaketWisata/V_Index',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Create  PaketWisata View
	public function Create(){
		// $this->checkSession();
		// $user_id = $this->session->userid;
		
		$data['Menu'] = 'Create PaketWisata';
		$data['destinasi'] = $this->M_destinasi->selectAll();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/PaketWisata/V_Create',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Edit  PaketWisata View
	public function Edit($id){
		// $this->checkSession();
		// $user_id = $this->session->userid;
		
		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['Menu'] = 'Edit PaketWisata';
		$data['id']  = $plaintext_string;

		$id = array(
			'id_paket_wisata' => $plaintext_string
		);

		$data['data'] = $this->M_paket_wisata->getPaketWisata($id);


		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/PaketWisata/V_Edit',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}


	//  PaketWisata View
	public function Detail($id){
		// $this->checkSession();
		// $user_id = $this->session->userid;
		
		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$image = array(
			'id' => $plaintext_string,
			'status' => 'paket_wisata'
		);
		$where = array('id_paket_wisata' => $plaintext_string);

		$data['Menu'] = 'Detail';
		$data['image'] = $this->M_paket_wisata->getImage($image);
		$data['id'] = $plaintext_string;
		$data['data'] = $this->M_paket_wisata->getPaketWisata($where);

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/PaketWisata/V_Detail',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Upload Image View
	public function Image($id,$edit = false){
		
		$data['Menu'] = 'Image';

		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['id_paket_wisata'] = $plaintext_string;
		
		$where = array(
			'id' => $plaintext_string,
			'status' => 'paket_wisata'	
		);
		$data['message'] = 'ditambahkan';
		$data['image'] = '';
		if($edit){
			$data['image'] = $this->M_paket_wisata->getImage($where);
			$data['message'] = 'diupdate';
		}

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/PaketWisata/V_Image',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}

	//Upload Image View
	public function More($id,$edit = false){
		
		$data['Menu'] = 'Tambahan';

		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);

		$data['id_paket_wisata'] = $plaintext_string;
		
		// $where = array(
		// 	'id' => $plaintext_string,
		// 	'status' => 'paket_wisata'	
		// );
		// $data['message'] = 'ditambahkan';
		// $data['image'] = '';
		// if($edit){
		// 	$data['image'] = $this->M_paket_wisata->getImage($where);
		// 	$data['message'] = 'diupdate';
		// }

		// echo "<pre>";
		// print_r($data);
		// exit();

		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/PaketWisata/V_More',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}
	
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= INSERT SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	
	
	// Insert Paket Wisata
	public function Insert(){
		
		$nama_paket_wisata = $this->input->post('nama_paket_wisata');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$id_destinasi = $this->input->post('id_destinasi');

		$data = array( 
			'nama_paket_wisata' => $nama_paket_wisata,
			'deskripsi' => $deskripsi,
			'harga' => $harga
		);
		
		if($id = $this->M_paket_wisata->insert($data)){
			
			for($i = 0;$i < sizeof($id_destinasi); $i++) {
				
				$link = array(
					'id_destinasi' => $id_destinasi[$i],
					'id_paket_wisata' => $id
				);

				$this->M_paket_wisata->insertLink($link);
			}

			/* Encrypt ID */
			$encrypted_string = $this->encrypt->encode($id);
			$id = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
			
			redirect('Admin/PaketWisata/More/'.$id);
		}else{
			$this->session->set_flashdata('error','Terjadi error saat insert destinasi');
			redirect('Admin/Destinasi');
		}

	}

	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= FUNCTION SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	

	public function checkSession(){
		if($this->session->is_logged){
			
		}else{
			redirect('');
		}
	}
}
