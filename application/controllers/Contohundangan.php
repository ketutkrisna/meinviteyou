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

	public function classic()
	{
		$this->load->view('contohundangan/classic');
	}

	public function rustic()
	{
		$this->load->view('contohundangan/rustic');
	}

	public function tematic()
	{
		$this->load->view('contohundangan/tematic');
	}


}