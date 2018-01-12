<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roomtype extends CI_Controller {

	var $API = "";

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		// $this->load->model('kasir_model');
		// $this->load->model('kategori_model');
		$this->load->helper('html');
		$this->load->library('image_lib');

		//rest

		$this->API="http://localhost/pemesananhotel-server/index.php";

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
		$data['datatype'] = json_decode($this->curl->simple_get($this->API.'/roomtype'));
		$this->load->view('roomtype/list', $data);
		$this->load->view('partials/footer');
		//redirect('genre');
	}

	function create()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'roomtype_id' => $this->input->post('roomtype_id'),
			'room_name' => $this->input->post('room_name'),
			// 'gambar' => $this->upload->data('gambar'),
			'stok' => $this->input->post('stok'),
			'price' => $this->input->post('price'),
			
		);
		$insert = $this->curl->simple_post($this->API.'/roomtype', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($insert) {
				$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
			} else {
				$this->session->flashdata('hasil', 'Insert Data Gagal');
			}
			redirect('roomtype');
		} else {
			$this->load->view('partials/header');
			$this->load->view('roomtype/create');
			$this->load->view('partials/footer');
		}		
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'roomtype_id' => $this->input->post('roomtype_id'),
			'room_name' => $this->input->post('room_name'),
			//'gambar' => $this->upload->data('gambar'),
			'stok' => $this->input->post('stok'),
			'price' => $this->input->post('price'),
			
		);
		$update = $this->curl->simple_put($this->API.'/roomtype', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($update) {
				$this->session->set_flashdata('hasil', 'Update Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Update Data Gagal');
			}
			redirect('roomtype');
		} else {
			$params = array('roomtype_id'=> $this->uri->segment(3));
			$data['datatype'] = json_decode($this->curl->simple_get($this->API.'/roomtype', $params));
			$this->load->view('partials/header');
			$this->load->view('roomtype/edit',$data);
			$this->load->view('partials/footer');
		}
		
	}

	function delete($id)
	{
		if (empty($id)) {
			redirect('roomtype');
		} else {
			$delete = $this->curl->simple_delete($this->API.'/roomtype', array('roomtype_id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
			redirect('roomtype');
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