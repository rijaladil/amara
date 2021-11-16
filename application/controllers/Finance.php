<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class finance extends CI_Controller{


	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('t_finance');
		$this->load->helper('url');
	}
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
   public  function index(){
		$data['price'] = $this->m_data_price->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/finance/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$description = $this->input->post('description');
		$unit = $this->input->post('unit');
		$price = $this->input->post('price');

		$data = array(
			'description' => $description,
			'unit' => $unit,
			'price' => $price
			);

		$this->m_data_price->input_data($data,'amc_m_price');
		redirect('price/index');
	}

	// display input
	public function input(){
		$data['price'] = $this->m_data_price->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/price/input',$data);
		$this->load->view('template/footer/index');

	}

 	// process update
	 public function update(){
		$id= $this->input->post('id');
		$description = $this->input->post('description');
		$unit = $this->input->post('unit');
		$price = $this->input->post('price');

		$data = array(
			'description' => $description,
			'unit' => $unit,
			'price' => $price,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->m_data_price->update_data($where,$data,'amc_m_price');
		redirect('price/index');
		// var_dump ($data);
	}

	//display get data edit
	public function edit($id=''){
		$where = array('id' => $id);
		$data['price'] = $this->m_data_price->get_data_edit($where,'amc_m_price')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/price/edit',$data);
		$this->load->view('template/footer/index');
	}

	// process delete
	public function delete($id){
		$where = array('id' => $id);
		$this->m_data_price->delete_data($where,'amc_m_price');
		redirect('price/index');
	}



}