<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Product extends CI_Controller{

 	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();
		$this->load->model('m_data_product');
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
		$data['product'] = $this->m_data_product->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/user/datatable',$data);
		$this->load->view('template/footer/index');
	}



	// process input
 	public function p_input(){
 		
		$name = $this->input->post('name');
		$category_teknik = $this->input->post('category_teknik');

		$data = array(
			'name' => $name,
			'category_teknik' => $category_teknik
			);

		$this->m_data_product->input_data($data,'amc_m_products');
		redirect('product/index');
	}

	// display input
	function input(){
		$data['product'] = $this->m_data_product->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/user/input',$data);
		$this->load->view('template/footer/index');
	}

 	// process update
	function update(){
		$id= $this->input->post('id');
		$name = $this->input->post('name');
		$category_teknik = $this->input->post('category_teknik');
		
		$data = array(
			'name' => $name,
			'category_teknik' => $category_teknik
		);
		$where = array(
			'id' => $id
		);

		$this->m_data_product->update_data($where,$data,'amc_m_products');		
		redirect('product/index');
	}


	// process delete
	function delete($id){
		$where = array('id' => $id);
		$this->m_data_product->delete_data($where,'amc_m_products');
		redirect('product/index');
	}



}