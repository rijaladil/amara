<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class finance extends CI_Controller{


	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('t_finance');
		$this->load->model('m_data_client_process');
		$this->load->helper('url');
		// $this->load->libaray('form_validation');
	}
	private function check_isvalidated()
    {
        if
            (
                (!$this->session->userdata('loggin'))
                ||
                (!in_array($this->session->userdata('level'),array(0,1,2,5,3)))
            )
        {
            redirect('login');
        }
	}
	
	// halaman utama 
   public  function index(){
		$data['finance'] = $this->t_finance->get_data()->result();
		$data['client'] = $this->m_data_client_process->get_data_client()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/finance/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$client_id = $this->input->post('client_id');
		$invoice_no = $this->input->post('invoice_no');
		$price = $this->input->post('price');
		$date = $this->input->post('date');
		$due_date = $this->input->post('due_date');
		$date_confirmation = $this->input->post('date_confirmation');
		$info = $this->input->post('info');

		$data = array(
			'client_id' => $client_id,
			'invoice_no' => $invoice_no,
			'price' => $price,
			'date' => $date,
			'due_date' => $due_date,
			'date_confirmation' => $date_confirmation,
			'info' => $info

			);

		$this->t_finance->input_data($data,'amc_t_finance');
		redirect('finance/index');
		 // var_dump ($data);
	}

	// display input
	public function input(){
		$data['finance'] = $this->t_finance->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/finance/datatable',$data);
		$this->load->view('template/footer/index');

	}

 	// process update
	 public function update(){
		$id= $this->input->post('id');
		$client_id = $this->input->post('client_id');
		$invoice_no = $this->input->post('invoice_no');
		$price = $this->input->post('price');
		$date = $this->input->post('date');
		$due_date = $this->input->post('due_date');
		$date_confirmation = $this->input->post('date_confirmation');
		$info = $this->input->post('info');

		$data = array(
			'client_id' => $client_id,
			'invoice_no' => $invoice_no,
			'price' => $price,
			'date' => $date,
			'due_date' => $due_date,
			'date_confirmation' => $date_confirmation,
			'info' => $info,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->t_finance->update_data($where,$data,'amc_t_finance');
		redirect('finance/index');
		// var_dump ($data);
	}

	//display get data edit
	public function edit($id=''){
		$where = array('id' => $id);
		$data['finance'] = $this->t_finance->get_data_edit($where,'amc_t_finance')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/finance/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process delete
	public function delete($id){
		$where = array('id' => $id);
		$this->t_finance->delete_data($where,'amc_t_finance');
		redirect('finance/index');
	}



}