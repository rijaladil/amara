<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Login extends CI_Controller {

	public function index()
	{
		if (count($_POST) > 0) {
	        $this->t_login->validate();
		}else{
			$this->load->view('pages/login/index');
		}
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

}
