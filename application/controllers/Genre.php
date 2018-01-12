<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genre extends CI_Controller {

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

		//rest
		$this->API="http://localhost/penjualanfilm-server/index.php";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
		$this->load->helper('url');
		
	}

	public function index()
	{
		//session agar tidak bisa dibuka
		// if($this->session->userdata('logged_in')){
		// 	$session_data= $this->session->userdata('logged_in');
		// 	// $data['username']=$session_data['username'];
		// 	if ($session_data['role'] === 'admin') {
		// 		$this->load->model('kasir_model');
		// 		$data['jum']=$this->kasir_model->jmlProduk();
		// 		$data['tot']=$this->kasir_model->totalTransaksi();
		// 		$data['jumlah']=$this->kasir_model->jumlah();
  //   			$this->load->view('partials/header');
		// 		$this->load->view('dashboard',$data);
		// 		$this->load->view('partials/footer');
  //   		}elseif($session_data['role'] === 'kasir'){
  //   			$this->load->view('partials/header_kasir');
  //   			$this->load->view('dashboard_kasir',$data);
  //   			$this->load->view('partials/footer');
  //   		}
		// }else{
		// 	redirect('login','refresh');
		// }

		$this->load->view('partials/header');
		$data['datagenre'] = json_decode($this->curl->simple_get($this->API.'/genre'));
		$this->load->view('genre/list', $data);
		$this->load->view('partials/footer');
		//redirect('genre');
	}

	function create()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'genre_id' => $this->input->post('genre_id'),
			'genre' => $this->input->post('genre'),
			
		);
		$insert = $this->curl->simple_post($this->API.'/genre', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($insert) {
				$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
			} else {
				$this->session->flashdata('hasil', 'Insert Data Gagal');
			}
			redirect('genre');
		} else {
			$this->load->view('partials/header');
			$this->load->view('genre/create');
			$this->load->view('partials/footer');
		}		
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'genre_id' => $this->input->post('genre_id'),
			'genre' => $this->input->post('genre'),
			
		);
		$update = $this->curl->simple_put($this->API.'/genre', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($update) {
				$this->session->set_flashdata('hasil', 'Update Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Update Data Gagal');
			}
			redirect('genre');
		} else {
			$params = array('genre_id'=> $this->uri->segment(3));
			$data['datagenre'] = json_decode($this->curl->simple_get($this->API.'/genre', $params));
			$this->load->view('partials/header');
			$this->load->view('genre/edit',$data);
			$this->load->view('partials/footer');
		}
		
	}

	function delete($id)
	{
		if (empty($id)) {
			redirect('genre');
		} else {
			$delete = $this->curl->simple_delete($this->API.'/genre', array('genre_id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
			redirect('genre');
		}
	}

	//ajax
	// public function data_server(){
	// 	$this->load->library('Datatables');
	// 	$this->datatables
	// 		->select('genre_id,genre')
	// 		->from('genre');
	// 		// ->join('produk','detail_transaksi.id_produk = produk.id_produk')	;
	// 		echo $this->datatables->generate();
	// }
	

	
	

	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */