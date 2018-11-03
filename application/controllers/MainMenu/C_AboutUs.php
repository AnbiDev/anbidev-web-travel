<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_AboutUs extends CI_Controller {

	//AboutUs Page
	public function index(){
		
		$data = array();

		$this->load->view('V_Header',$data);
		$this->load->view('MainMenu/V_AboutUs',$data);
		$this->load->view('V_Footer',$data);
	}
}
