<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Room extends CI_Controller{
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
			$data['dataroom']=json_decode($this->curl->simple_get($this->API.'/room'));
			$this->load->view('partials/header');
			$this->load->view('room/list',$data);
			$this->load->view('partials/footer');
		}

		function create()
		{
			if (isset($_POST['submit'])) {
				$data = array(
				'room_id' => $this->input->post('room_id'),
				'roomtype_id' => $this->input->post('roomtype_id'),
				'id_service' => $this->input->post('id_service'),
				
			);
				
			$insert = $this->curl->simple_post($this->API.'/room', $data, array(CURLOPT_BUFFERSIZE => 10));
				if ($insert) {
					$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
				} else {
					$this->session->flashdata('hasil', 'Insert Data Gagal');
				}
				redirect('room');
			} else {
				$this->load->view('partials/header');
				$this->load->view('room/create');
				$this->load->view('partials/footer');
			}		
		}

		function edit()
		{
			if (isset($_POST['submit'])) {
				$data = array(
				'room_id' => $this->input->post('room_id'),
				'roomtype_id' => $this->input->post('roomtype_id'),
				'id_service' => $this->input->post('id_service'),
				
			);
			$update = $this->curl->simple_put($this->API.'/room', $data, array(CURLOPT_BUFFERSIZE => 10));
				if ($update) {
					$this->session->set_flashdata('hasil', 'Update Data Berhasil');
				} else {
					$this->session->set_flashdata('hasil', 'Update Data Gagal');
				}
				redirect('room');
			} else {
				$params = array('room_id'=> $this->uri->segment(3));
				$data['dataroom'] = json_decode($this->curl->simple_get($this->API.'/room', $params));
				$this->load->view('partials/header');
				$this->load->view('room/edit',$data);
				$this->load->view('partials/footer');
			}
			
		}

		function delete($id)
		{
			if (empty($id)) {
				redirect('room');
			} else {
				$delete = $this->curl->simple_delete($this->API.'/room', array('room_id'=>$id), array(CURLOPT_BUFFERSIZE => 10));
				if ($delete) {
					$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
				} else {
					$this->session->set_flashdata('hasil', 'Delete Data Gagal');
				}
				redirect('room');
			}
	}
}