<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class contact_web extends CI_Controller{


	function __construct(){
		parent::__construct();
		// $this->check_isvalidated();
		$this->load->model('m_data_prospective_client');
		$this->load->helper('url');		
	}

	// login
	// private function check_isvalidated()
 //    {
 //        if
 //            (
 //                (!$this->session->userdata('loggin'))
 //                ||
 //                (!in_array($this->session->userdata('level'), array(0,1,2,3,4,5)))
 //            )
 //        {
 //            redirect('login');
 //        }
	// }


	function index(){
		$data['contact_web'] = $this->m_data_prospective_client->get_data_contact_web();
		$this->load->view('template/header/index_web');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/prospective_client/contact_web',$data);
		$this->load->view('template/footer/index');
	}

    // input contact web
	public function p_input_contact(){
		$name = $this->input->post('name');
		$information = $this->input->post('information');
		$address = $this->input->post('address');
		$city_kabupaten = $this->input->post('city_kabupaten');
		$province = $this->input->post('province');
		$email = $this->input->post('email');
		$contact = $this->input->post('contact');
		
		$data = array(
			'name' => $name,
			'information' => $information,
			'address' => $address,
			'city_kabupaten' => $city_kabupaten,
			'province' => $province,
			'email' => $email,
			'contact' => $contact
			
			);

		$this->m_data_prospective_client->input_data($data,'amc_m_contact_web');
		redirect('https://amaracisadane.co.id');

	}




}