<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Landing extends CI_Controller {

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
	
	//Landing Page
	public function index(){
		
		$data = array();
		$data['desc'] = $this->M_setting->selectDesc();

		$this->load->view('V_Header',$data);
		$this->load->view('V_Landing',$data);
		$this->load->view('V_Footer',$data);
	}
}
