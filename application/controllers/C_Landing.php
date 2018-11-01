<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Landing extends CI_Controller {

	//Landing Page
	public function index(){
		
		$this->load->view('V_Landing');
	}
}
