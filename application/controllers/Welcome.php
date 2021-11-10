<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('page/index');
		$this->load->view('template/footer/index');
	}
}
