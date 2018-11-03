<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	//Login Page
	public function index(){
		
		$this->load->view('Admin/V_Login');
	}
}
