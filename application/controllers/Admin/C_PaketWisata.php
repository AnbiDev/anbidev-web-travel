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

				$where = array(
					'id_paket_wisata' => $value['id_paket_wisata']
				);

				$destinasi = $this->M_paket_wisata->getLinkDestinasi($where);
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


		$data['destinasi'] = $this->M_destinasi->selectAll();
		$data['data'] = $this->M_paket_wisata->getPaketWisata($id);
		$data['current_destinasi'] = '';

		// cari destinasi
		if($current_destinasi = $this->M_paket_wisata->getLinkDestinasi($id)){
			foreach ($current_destinasi as $value) {
				$data['current_destinasi'][] =  $value['id_destinasi'];
			}
		}
		

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

		
		$where = array(
				'tw.id_paket_wisata' => $plaintext_string,
				'status' => 'destinasi'
		);

		$data['Menu'] = 'Detail';
		$data['id'] = $plaintext_string;

		$data['data'] = $this->M_paket_wisata->getPaketWisataDetail($where);

		$where2 = array(
			'id_paket_wisata' => $plaintext_string,
		);
		
		
		$data['fasilitas'] = $this->M_paket_wisata->getFasilitas($where2);
		$data['itinetary'] = $this->M_paket_wisata->getItinetary($where2);
		$data['harga_detail'] = $this->M_paket_wisata->getHargaDetail($where2);
		
		// echo "<pre>";
		// print_r($data);
		// exit();


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
		
		$where = array(
			'id_paket_wisata' => $plaintext_string,
		);

		$data['status'] = 'insert';
		$data['fasilitas'] = '';
		$data['itinetary'] = '';
		$data['harga_detail'] = '';

		if($edit){
			$data['fasilitas'] = $this->M_paket_wisata->getFasilitas($where);
			$data['itinetary'] = $this->M_paket_wisata->getItinetary($where);
			$data['harga_detail'] = $this->M_paket_wisata->getHargaDetail($where);
			$data['status'] = 'update';
		}

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
			redirect('Admin/PaketWisata');
		}

	}

	// Set Fasilitas
	public function setFasilitas(){
		
		$id_paket_wisata = $this->input->post('id_paket_wisata');
		$status = $this->input->post('status');

		$lokasi_keberangkatan = $this->input->post('lokasi_keberangkatan');
		$lokasi_kedatangan = $this->input->post('lokasi_kedatangan');
		$deskripsi = $this->input->post('deskripsi');

		$data = array( 
			'id_paket_wisata' => $id_paket_wisata,
			'lokasi_kedatangan' => $lokasi_kedatangan,
			'lokasi_keberangkatan' => $lokasi_keberangkatan,
			'deskripsi' => $deskripsi
			
		);
		


		if($status == "insert"){
			$this->M_paket_wisata->setFasilitas($data);
		
		}elseif($status == "update"){
			
			$where = array(
				'id_paket_wisata' => $id_paket_wisata
			);

			if($this->M_paket_wisata->getFasilitas($where)){
				$this->M_paket_wisata->updateFasilitas($data,$id_paket_wisata);	
			}else{
				$this->M_paket_wisata->setFasilitas($data);
			}
		}

		echo json_encode($data);

	}

	// Set Itinerary
	public function setItinetary(){
		
		$id_paket_wisata = $this->input->post('id_paket_wisata');
		$status = $this->input->post('status');

		$deskripsi = $this->input->post('deskripsi');

		$data = array( 
			'id_paket_wisata' => $id_paket_wisata,
			'deskripsi' => $deskripsi
		);
		
		if($status == "insert"){
			$this->M_paket_wisata->setItinetary($data);
		}elseif($status == "update"){
			$where = array(
				'id_paket_wisata' => $id_paket_wisata
			);

			if($this->M_paket_wisata->getItinetary($where)){
				$this->M_paket_wisata->updateItinetary($data,$id_paket_wisata);	
			}else{
				$this->M_paket_wisata->setItinetary($data);
			}
		}

		echo json_encode($data);

	}

	// Set Harga Detail
	public function setHargaDetail(){
		
		$id_paket_wisata = $this->input->post('id_paket_wisata');

		$nama_paket_harga = $this->input->post('nama_paket_harga');
		$harga =  $this->input->post('harga');
		$jumlah_orang = $this->input->post('jumlah_orang');
		$deskripsi = $this->input->post('deskripsi');

		$data = array( 
			'id_paket_wisata' => $id_paket_wisata,
			'nama_paket_harga' => $nama_paket_harga,
			'jumlah_orang' => $jumlah_orang,
			'harga' => $harga,
			'deskripsi' => $deskripsi
			
		);
		
		if($data['id'] = $this->M_paket_wisata->setHargaDetail($data)){
			echo json_encode($data);	
		}else{
			echo json_encode(false);
		}
		
	}
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */
	public function Update(){

		$id_paket_wisata = $this->input->post('id_paket_wisata');
		$nama_paket_wisata = $this->input->post('nama_paket_wisata');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$id_destinasi = $this->input->post('id_destinasi');

		$data = array( 
			'nama_paket_wisata' => $nama_paket_wisata,
			'deskripsi' => $deskripsi,
			'harga' => $harga
		);
		
		if($this->M_paket_wisata->update($data,$id_paket_wisata)){
			
			for($i = 0;$i < sizeof($id_destinasi); $i++) {
				
				$link = array(
					'id_destinasi' => $id_destinasi[$i],
					'id_paket_wisata' => $id_paket_wisata
				);

				$this->M_paket_wisata->updateLink($link,$id_paket_wisata,$id_destinasi[$i]);
			}

			/* Encrypt ID */
			$encrypted_string = $this->encrypt->encode($id_paket_wisata);
			$id_paket_wisata = str_replace(array('+', '/', '='), array('-', '_', '~'), $encrypted_string);
			
			redirect('Admin/PaketWisata/More/'.$id_paket_wisata.'/edit');
		}else{
			$this->session->set_flashdata('error','Terjadi error saat insert destinasi');
			redirect('Admin/PaketWisata');
		}
	}
	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= DELETE SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */

	
	public function Delete($id){
		/* Decrypt ID */			
		$plaintext_string = str_replace(array('-', '_', '~'), array('+', '/', '='), $id);
		$plaintext_string = $this->encrypt->decode($plaintext_string);
		
			
		$data = array(
			'id_paket_wisata' => $plaintext_string
		);

		if($this->M_paket_wisata->delete($data)){
			if($this->M_paket_wisata->deleteFasilitas($data)){
				if($this->M_paket_wisata->deleteItinetary($data)){
					if($this->M_paket_wisata->deleteHargaDetail($data)){
						if($this->M_paket_wisata->deleteLink($data)){
							$this->session->set_flashdata('success' , "Paket Wisata berhasil didelete");
							redirect('Admin/PaketWisata');	
						}
					}
				}
			}
		}

		$this->session->set_flashdata('error' ,"Ada kesalahan saat menghapus data");
		redirect('Admin/PaketWisata');
	}

	public function removeHargaDetail(){
		
		$id_paket_wisata = $this->input->post('id_paket_wisata');
		$id_harga_detail = $this->input->post('id_harga_detail');

		$data = array(
			'id_paket_wisata' => $id_paket_wisata,
			'id_harga_detail' => $id_harga_detail
		);

		if($this->M_paket_wisata->removeHargaDetail($data)){
			echo json_encode($data);
		}else{
			echo json_encode(false);
		}

	}




	/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= FUNCTION SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	

	public function goAhead($message){
		if(true){
			$this->session->set_flashdata('success' , "Paket Wisata berhasil ".$message);
			redirect('Admin/PaketWisata');
		}else{
			$this->session->set_flashdata('error' ,$this->upload->display_errors());
			redirect('Admin/PaketWisata');
		}
	}


	public function checkSession(){
		if($this->session->is_logged){
			
		}else{
			redirect('');
		}
	}
}
