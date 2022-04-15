<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contohundangan extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect('pengunjung');
	}

	public function classic($warna1='ffffff', $warna2='f2f2f2')
	{
		$data['warna1']=$warna1;
		$data['warna2']=$warna2;
		$this->load->view('contohundangan/classic', $data);
	}

	public function rustic()
	{
		$this->load->view('contohundangan/rustic');
	}

	public function tematic()
	{
		$this->load->view('contohundangan/tematic');
	}

	public function vantage($warna1='dce0e0', $warna2='319e72')
	{
		$data['warna1']=$warna1;
		$data['warna2']=$warna2;
		$this->load->view('contohundangan/vantage', $data);
	}

	public function minimalis($warna1='eeeeee', $warna2='b5820b')
	{
		$data['warna1']=$warna1;
		$data['warna2']=$warna2;
		$this->load->view('contohundangan/minimalis', $data);
	}

	public function elegant($warna1='eeeeee', $warna2='b5820b')
	{
		$data['warna1']=$warna1;
		$data['warna2']=$warna2;
		$this->load->view('contohundangan/elegant', $data);
	}

	public function ethnic($warna1='eeeeee', $warna2='b5820b')
	{
		$data['warna1']=$warna1;
		$data['warna2']=$warna2;
		$this->load->view('contohundangan/ethnic', $data);
	}


}