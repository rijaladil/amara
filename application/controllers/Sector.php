<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Sector extends CI_Controller{

 	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();
		$this->load->model('m_data_sector');
		$this->load->helper('url');
	}
	// login
	private function check_isvalidated()
    {
        if
            (
                (!$this->session->userdata('loggin'))
                ||
                (!in_array($this->session->userdata('level'), array(1)))
            )
        {
            redirect('login');
        }
	}
	// halaman utama 
	 function index(){
		$data['sector'] = $this->m_data_sector->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/user/datatable',$data);
		$this->load->view('template/footer/index');
	}



	// process input
 	public function p_input(){
 		
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$contact = $this->input->post('contact');
		$department = $this->input->post('department');
		$user_level = $this->input->post('user_level');
		$client_id = $this->input->post('client_id');

		$data = array(
			'name' => $name,
			'email' => $email,
			'contact' => $contact,
			'department' => $department,
			'user_level'=> $user_level,
			'client_id' => $client_id
			);

		$this->m_data_sector->input_data($data,'amc_m_sector');
		redirect('sector/index');
	}

	// display input
	function input(){
		$data['sector'] = $this->m_data_sector->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/user/input',$data);
		$this->load->view('template/footer/index');
	}

 	// process update
	function update(){
		$id= $this->input->post('id');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$contact = $this->input->post('contact');
		$department = $this->input->post('department');
		$user_level = $this->input->post('user_level');
		$password = $this->input->post('password');
		$client_id = $this->input->post('client_id');
		
		$data = array(
			'name' => $name,
			'email' => $email,
			'contact' => $contact,
			'department' => $department,
			'password' => sha1($password),
			'user_level'=> $user_level,
			'client_id' => $client_id
		);
		$where = array(
			'id' => $id
		);
		$this->m_data_sector->update_data($where,$data,'amc_m_sector');		
		redirect('sector/index');
	}



	// process delete
	function delete($id){
		$where = array('id' => $id);
		$this->m_data_sector->delete_data($where,'amc_m_sector');
		redirect('sector/index');
	}



}