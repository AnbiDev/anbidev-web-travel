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
		//$this->load->library('Database');

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

	//Create  Destinasi
	public function Create(){
		// $this->checkSession();
		// $user_id = $this->session->userid;
		
		$data['Menu'] = 'Create';
		
		$this->load->view('Admin/V_Header',$data);
		$this->load->view('Admin/V_Sidebar',$data);
		$this->load->view('Admin/Destinasi/V_Create',$data);
		$this->load->view('Admin/V_Footer',$data);
		
	}


/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= FUNCTION SECTION -=-=--=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=- */	

	public function checkSession(){
		if($this->session->is_logged){
			
		}else{
			redirect('');
		}
	}
}
