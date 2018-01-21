<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Pembayaran extends CI_Controller{
		var $API="";

		function __construct(){
			parent::__construct();
		
			$this->load->helper('url','form');
			$this->load->library('form_validation');
			$this->load->helper('html');
			$this->load->library('image_lib');

			//rest

			$this->API="http://localhost/pemesananhotel-server/index.php";

			$this->load->library('session');
			$this->load->library('curl');
			


		}

		//Menampilkan data room
		function index(){
			$data['datapembayaran']=json_decode($this->curl->simple_get($this->API.'/pembayaran'));
			$data['id_booking']=json_decode($this->curl->simple_get($this->API.'/booking'));
			$this->load->view('partials/header');
			$this->load->view('pembayaran/list',$data);
			$this->load->view('partials/footer');
		}

		function create()
		{
			if (isset($_POST['submit'])) {
				$data = array(
				'id_pembayaran' => $this->input->post('id_pembayaran'),
				'id_booking' => $this->input->post('id_booking'),
				'tgl_bayar' => $this->input->post('tgl_bayar'),
				'total' => $this->input->post('total'),
				// 'status' => $this->input->post('status'),
			);
			
			$insert = $this->curl->simple_post($this->API.'/pembayaran', $data, array(CURLOPT_BUFFERSIZE => 10));
				if ($insert) {
					$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
				} else {
					$this->session->flashdata('hasil', 'Insert Data Gagal');
				}
				redirect('pembayaran');
			} else {
				$data['id_booking']=json_decode($this->curl->simple_get($this->API.'/pembayaran'));
				//$data['service']=json_decode($this->curl->simple_get($this->API.'/service'));
				$this->load->view('partials/header');
				$this->load->view('pembayaran/create',$data);
				//$this->load->view('room/create');
				$this->load->view('partials/footer');
			}		
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$data = array(
				'id_pembayaran' => $this->input->post('id_pembayaran'),
				'id_booking' => $this->input->post('id_booking'),
				'tgl_bayar' => $this->input->post('tgl_bayar'),
				'total' => $this->input->post('total'),
				// 'status' => $this->input->post('status'),
			);
			$update = $this->curl->simple_put($this->API.'/pembayaran', $data, array(CURLOPT_BUFFERSIZE => 10));
				if ($update) {
					$this->session->set_flashdata('hasil', 'Update Data Berhasil');
				} else {
					$this->session->set_flashdata('hasil', 'Update Data Gagal');
				}
				redirect('pembayaran');
			} else {
				$params = array('id_pembayaran'=> $this->uri->segment(3));
				$data['datapembayaran'] = json_decode($this->curl->simple_get($this->API.'/pembayaran', $params));
				$data['id_booking']=json_decode($this->curl->simple_get($this->API.'/pembayaran'));
				$this->load->view('partials/header');
				$this->load->view('pembayaran/edit',$data);
				$this->load->view('partials/footer');
			}
			
		}

		function delete($id)
		{
			if (empty($id)) {
				redirect('pembayaran');
			} else {
				$delete = $this->curl->simple_delete($this->API.'/pembayaran', array('id_pembayaran'=>$id), array(CURLOPT_BUFFERSIZE => 10));
				if ($delete) {
					$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
				} else {
					$this->session->set_flashdata('hasil', 'Delete Data Gagal');
				}
				redirect('pembayaran');
			}
	}
}