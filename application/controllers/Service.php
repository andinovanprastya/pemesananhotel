<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

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
		$data['dataservice'] = json_decode($this->curl->simple_get($this->API.'/service'));
		$this->load->view('service/list', $data);
		$this->load->view('partials/footer');
		//redirect('genre');
	}

	function create()
	{
/*			$config['upload_path']   = './upload/';   
    		$config['allowed_types'] = 'jpg|png';
    		$config['overwrite']    =  TRUE;    
    		$config['max_size']      = '100000';
    		$config['max_width']     = '100000';
    		$config['max_height']    = '100000';
*/
    	$config['upload_path']          = './upload/service/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

    	$this->load->library('upload', $config);
    	//$this->upload->initialize($config);
		$this->upload->do_upload("gambar");
    	//$data = array('upload_data'=>$this->upload->data("gambar"));      
    	//$file_name = $data['upload_data']['file_name']; 


		if (isset($_POST['submit'])) {
			$data = array(
			'id_service' => $this->input->post('id_service'),
			'service' => $this->input->post('service'),
			'gambar' => $this->upload->data('file_name'),
			'charge' => $this->input->post('charge'),
			
		);
		$insert = $this->curl->simple_post($this->API.'/service', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($insert) {
				$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
			} else {
				$this->session->flashdata('hasil', 'Insert Data Gagal');
			}
			redirect('service');
		} else {
			$this->load->view('partials/header');
			$this->load->view('service/create');
			$this->load->view('partials/footer');
		}		
	}

	function edit()
	{

		$config['upload_path']          = './upload/service/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000000000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

    	$this->load->library('upload', $config);
    	//$this->upload->initialize($config);
		$this->upload->do_upload("gambar");
   
    	$params = array('id_service'=> $this->uri->segment(3));
		$data['dataservice'] = json_decode($this->curl->simple_get($this->API.'/service', $params));
		$data2 = json_decode($this->curl->simple_get($this->API.'/service', $params));
		$nama = $data2[0]->gambar;
		//$data = array('upload_data'=>$this->upload->data("gambar"));      
    	//$file_name = $data['upload_data']['file_name']; 
    	//$image_data = $this->upload->data

		if (isset($_POST['submit'])) {
			$data = array(
			'id_service' => $this->input->post('id_service'),
			'service' => $this->input->post('service'),
			'gambar' => $this->upload->data('file_name'),
			'charge' => $this->input->post('charge'),
			
		);
		$update = $this->curl->simple_put($this->API.'/service', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($update) {
				$this->session->set_flashdata('hasil', 'Update Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Update Data Gagal');
			}
			redirect('service');
		} else {
			$params = array('id_service'=> $this->uri->segment(3));
			$data['dataservice'] = json_decode($this->curl->simple_get($this->API.'/service', $params));
			$this->load->view('partials/header');
			$this->load->view('service/edit',$data);
			$this->load->view('partials/footer');

			unlink('upload/service/'.$nama);
		}
		
	}

	function delete($id)
	{
		if (empty($id)) {
			redirect('service');
		} else {
			$delete = $this->curl->simple_delete($this->API.'/service', array('id_service'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
			redirect('service');
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