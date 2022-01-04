<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contohundanganengaged extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect('pengunjung');
	}

	public function elegant($warna1='ffffff', $warna2='f2f2f2')
	{
		$data['warna1']=$warna1;
		$data['warna2']=$warna2;
		$this->load->view('contohundangan/engaged/elegant', $data);
	}


}