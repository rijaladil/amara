<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Customer extends CI_Controller{

 	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();
		$this->load->model('m_data_user');
		$this->load->helper('url');
	}
	// login
	private function check_isvalidated()
    {
        if
            (
                (!$this->session->userdata('loggin'))
                ||
                (!in_array($this->session->userdata('level'),array(0,1,2,3,4,5)))
            )
        {
            redirect('login');
        }
	}
	// halaman utama 
	 function index(){
		$data['customer'] = $this->m_data_user->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/customer/index',$data);
		$this->load->view('template/footer/index');
	}

	// process input
 	function p_input(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$contact = $this->input->post('contact');
		$department = $this->input->post('department');

		$data = array(
			'name' => $name,
			'email' => $email,
			'contact' => $contact,
			'department' => $department
			);

		$this->m_data_user->input_data($data,'amc_m_user');
		redirect('user/index');
	}

	// display input
	function input(){
		$data['user'] = $this->m_data_user->get_data()->result();
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
		
		$data = array(
			'name' => $name,
			'email' => $email,
			'contact' => $contact,
			'department' => $department
		);
		$where = array(
			'id' => $id
		);

		$this->m_data_user->update_data($where,$data,'amc_m_user');
		redirect('user/index');
	}

	//display get data edit
	function edit($id=''){
		$where = array('id' => $id);
		$data['user'] = $this->m_data_user->get_data_edit($where,'amc_m_user')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/user/edit',$data);
		$this->load->view('template/footer/index');
	}

	// process delete
	function delete($id){
		$where = array('id' => $id);
		$this->m_data_user->delete_data($where,'amc_m_user');
		redirect('user/index');
	}



}