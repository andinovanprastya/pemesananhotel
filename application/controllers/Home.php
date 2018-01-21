<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

var $API = "";
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('kasir_model');
		$this->load->model('kategori_model');
		$this->load->helper('html');
		$this->load->library('image_lib');
		$this->API="http://localhost/pemesananhotel-server/index.php";
		
	}

	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('dashboard');
		$this->load->view('partials/footer');

		
	}

	

	
	

	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */