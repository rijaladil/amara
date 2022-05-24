<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class dashboard extends CI_Controller{

 
	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('t_dashboard');
		$this->load->helper('url');
	}

	private function check_isvalidated()
    {
        if
            (
                (!$this->session->userdata('loggin'))
                ||
                (!in_array($this->session->userdata('level'), array(0,1,2,3,4,5)))
            )
        {
            redirect('login');
        }
	}
	
	//DASHBOARD
	public function index(){

	
		$data['client'] = $this->t_dashboard->get_data_client_all()->result();
		$data['prospective'] = $this->t_dashboard->get_data_client_prospective()->result();
		$data['process'] = $this->t_dashboard->get_data_client_process()->result();
		$data['closing'] = $this->t_dashboard->get_data_client_closing()->result();	
		$data['project'] = $this->t_dashboard->get_data_project()->result();	

		$data['score'] =  $this->t_dashboard->get_score_working_log()->result();		

		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/dashboard/index',$data);
		$this->load->view('template/footer/index');
	}

	


 	


}