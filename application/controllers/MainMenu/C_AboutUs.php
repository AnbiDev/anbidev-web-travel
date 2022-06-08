<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_AboutUs extends CI_Controller
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
	}


	//AboutUs Page
	public function index()
	{

		$data = array();
		$data['data'] = $this->M_setting->selectMain();
		$data['about'] = $this->M_setting->selectAbout();

		$this->load->view('V_Header', $data);
		$this->load->view('MainMenu/V_AboutUs', $data);
		$this->load->view('V_Footer', $data);
	}
}
