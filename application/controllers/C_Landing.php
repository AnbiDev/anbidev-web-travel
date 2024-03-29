<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_Landing extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->library('session');
		$this->load->library('encrypt');

		$this->load->model('Admin/M_setting');
		$this->load->model('Admin/M_paket_wisata');
		$this->load->model('Admin/M_gallery');
	}

	//Landing Page
	public function index()
	{

		$data = array();
		$data['data'] = $this->M_setting->selectMain();
		$data['desc'] = $this->M_setting->selectDesc();
		$data['paket_wisata']  = $this->M_paket_wisata->selectAll();



		$gambar = array(
			'status' => 'gallery'
		);
		$data['gallery'] = $this->M_gallery->getImage($gambar);


		$this->load->view('V_Header', $data);
		$this->load->view('V_Landing', $data);
		$this->load->view('V_Footer', $data);
	}
}
