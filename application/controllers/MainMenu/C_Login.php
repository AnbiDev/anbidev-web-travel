<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	//Login Page
	public function index(){
		
		$this->load->view('MainMenu/V_Login');
	}

	public function ceklogin()
	{
		if (isset($_POST['login'])) {
			$user = $this->input->post('username',true);
			$pass = $this->input->post('password',true);
			$cek = $this->app_model->proseslogin($user,$pass); 
			$hasil = count($cek);
			if ($hasil > 0) {
				redirect('Admin/Dashboard');
			} else {
				redirect('MainMenu/V_Login');
			}
		}
	}

}
