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
				$log = $this->db->get_where('tbl_user',array('username' => $user, 'password' => $pass))->row();
				if ($log->level == 'admin') {
					redirect('Admin/Dashboard');
				} elseif ($log->level == 'admin') {
					redirect('Admin/Dashboard');
			} else {
				redirect('Login');
			}
		}
	}

}
