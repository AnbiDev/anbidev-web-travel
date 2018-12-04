<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');	
		$this->load->library('session');
		$this->load->library('encrypt');

		$this->load->model('M_login');
	}

	//Login Page
	public function index(){
		
		$this->load->view('MainMenu/V_Login');
	}

	public function ceklogin()
	{
		if (isset($_POST['login'])) {
			
			////////* Danger Area *//////////
			//$this->session->set_userdata('id_user',1);
			/////////////////////////////////

			$user = $this->input->post('username',true);
			$pass = md5(md5(md5($this->input->post('password',true))));
			$cek = $this->M_login->proseslogin($user); 
			$hasil = count($cek);

			if ($hasil > 0) {
				if($cek->password == $pass){
					$log = $this->M_login->getData($user,$pass);	
					$this->session->set_userdata($log[0]);

					redirect('Admin/Dashboard');
				}else{
					$this->session->set_flashdata('error','Password salah!');
					redirect('Login');
				}
			}else{
				$this->session->set_flashdata('error','User belum terdaftarkan!');
				redirect('Login');
			}
		}

	}

	public function Logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
