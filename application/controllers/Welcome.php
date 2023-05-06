<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{	
		$this->load->view('Header');
		$this->load->view('index');
		$this->load->view('Footer');
	}

	function ScannerQR(){
		$this->load->view('Header');
		$this->load->view('ScanerQR');
		$this->load->view('Footer');
	}

	function Hasil(){
		$Data['Isi'] = $this->input->post('noid');
		$this->load->view('Header');
		$this->load->view('HasilQR',$Data);
		$this->load->view('Footer');
	}
}
