<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function index()
	{
		$this->load->model('Mahasiswa_model');

		$data['mahasiswas'] = $this->Mahasiswa_model->get_last_five_entries();

		$this->load->view('templates/header');
		$this->load->view('mhs/index',$data);
		$this->load->view('templates/footer');
	}
}
