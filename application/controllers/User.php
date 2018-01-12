<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$data['datauser'] = json_decode($this->curl->simple_get($this->API.'/user'));
		$this->load->view('user/list', $data);
		$this->load->view('partials/footer');
		//redirect('genre');
	}

	function create()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'user_id' => $this->input->post('user_id'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		);
		$insert = $this->curl->simple_post($this->API.'/user', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($insert) {
				$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
			} else {
				$this->session->flashdata('hasil', 'Insert Data Gagal');
			}
			redirect('user');
		} else {
			$this->load->view('partials/header');
			$this->load->view('user/create');
			$this->load->view('partials/footer');
		}		
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'user_id' => $this->input->post('user_id'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			
		);
		$update = $this->curl->simple_put($this->API.'/user', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($update) {
				$this->session->set_flashdata('hasil', 'Update Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Update Data Gagal');
			}
			redirect('user');
		} else {
			$params = array('user_id'=> $this->uri->segment(3));
			$data['datauser'] = json_decode($this->curl->simple_get($this->API.'/user', $params));
			$this->load->view('partials/header');
			$this->load->view('user/edit',$data);
			$this->load->view('partials/footer');
		}
		
	}

	function delete($id)
	{
		if (empty($id)) {
			redirect('user');
		} else {
			$delete = $this->curl->simple_delete($this->API.'/user', array('user_id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
			redirect('user');
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