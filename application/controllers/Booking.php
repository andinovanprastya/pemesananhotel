<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	var $API = "";

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url','form');
		$this->load->library('form_validation');
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
		
		$data['nama']=json_decode($this->curl->simple_get($this->API.'/user'));
		$data['room_name']=json_decode($this->curl->simple_get($this->API.'/roomtype'));
		$this->load->view('partials/header');
		$data['databooking'] = json_decode($this->curl->simple_get($this->API.'/booking'));
		$this->load->view('booking/list', $data);
		$this->load->view('partials/footer');
		//redirect('genre');
	}

	function create()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_booking' => $this->input->post('id_booking'),
			'user_id' => $this->input->post('user_id'),
			'roomtype_id' => $this->input->post('roomtype_id'),
			'booking_date' => $this->input->post('booking_date'),
			'checkin' => $this->input->post('checkin'),
			'checkout' => $this->input->post('checkout'),
			'status' => $this->input->post('status'),
		);
		$insert = $this->curl->simple_post($this->API.'/booking', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($insert) {
				$this->session->set_flashdata('hasil', 'Insert Data Berhasil');
			} else {
				$this->session->flashdata('hasil', 'Insert Data Gagal');
			}
			redirect('booking');
		} else {
			$data['nama']=json_decode($this->curl->simple_get($this->API.'/user'));
			$data['room_name']=json_decode($this->curl->simple_get($this->API.'/roomtype'));
			$this->load->view('partials/header');
			$this->load->view('booking/create',$data);
			$this->load->view('partials/footer');
		}		
	}

	

	function edit()
	{
		if (isset($_POST['submit'])) {
			$data = array(
			'id_booking' => $this->input->post('id_booking'),
			'user_id' => $this->input->post('user_id'),
			'roomtype_id' => $this->input->post('roomtype_id'),
			'booking_date' => $this->input->post('booking_date'),
			'checkin' => $this->input->post('checkin'),
			'checkout' => $this->input->post('checkout'),
			'status' => $this->input->post('status'),
			
		);
		$update = $this->curl->simple_put($this->API.'/booking', $data, array(CURLOPT_BUFFERSIZE => 10));
			if ($update) {
				$this->session->set_flashdata('hasil', 'Update Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Update Data Gagal');
			}
			redirect('booking');
		} else {
			$params = array('id_booking'=> $this->uri->segment(3));
			$data['databooking'] = json_decode($this->curl->simple_get($this->API.'/booking', $params));
			$data['nama']=json_decode($this->curl->simple_get($this->API.'/user'));
			$data['room_name']=json_decode($this->curl->simple_get($this->API.'/roomtype'));
			$this->load->view('partials/header');
			$this->load->view('booking/edit',$data);
			$this->load->view('partials/footer');
		}
		
	}

	function delete($id)
	{
		if (empty($id)) {
			redirect('booking');
		} else {
			$delete = $this->curl->simple_delete($this->API.'/booking', array('id_booking'=>$id), array(CURLOPT_BUFFERSIZE => 10));
			if ($delete) {
				$this->session->set_flashdata('hasil', 'Delete Data Berhasil');
			} else {
				$this->session->set_flashdata('hasil', 'Delete Data Gagal');
			}
			redirect('booking');
		}
	}



	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */