<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Gallery extends CI_Controller {

	//Landing Page
	public function index(){
		
		$data = array();

		$this->load->view('V_Header',$data);
		$this->load->view('MainMenu/V_Gallery',$data);
		$this->load->view('V_Footer',$data);
	}
}
