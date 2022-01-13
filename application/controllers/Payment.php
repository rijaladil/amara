<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class payment extends CI_Controller{


	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('t_payment');
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
                (!in_array($this->session->userdata('level'),array(0,1,2,3,5)))
            )
        {
            redirect('login');
        }
	}
	
	// halaman utama 
   public  function index(){
		$data['payment'] = $this->t_payment->get_data()->result();
		$data['client'] = $this->m_data_client_process->get_data_client()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/payment/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$client_id = $this->input->post('client_id');
		$tahap = $this->input->post('tahap');
		$percentage = $this->input->post('percentage');
		$price = $this->input->post('price');
		$info = $this->input->post('info');
		$status = $this->input->post('status');

		$data = array(
			'client_id' => $client_id,
			'tahap' => $tahap,
			'percentage' => $percentage,
			'price' => $price,
			'info' => $info,
			'status' => $status

			);

		$this->t_payment->input_data($data,'amc_t_adm_payment');
		redirect('payment/index');
		 // var_dump ($data);
	}

	// display input
	public function input(){
		$data['payment'] = $this->t_payment->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/payment/datatable',$data);
		$this->load->view('template/footer/index');

	}

 	// process update
	 public function update(){
		$id= $this->input->post('id');
		$client_id = $this->input->post('client_id');
		$tahap = $this->input->post('tahap');
		$percentage = $this->input->post('percentage');
		$price = $this->input->post('price');
		$info = $this->input->post('info');
		$status = $this->input->post('status');

		$data = array(
			'client_id' => $client_id,
			'tahap' => $tahap,
			'percentage' => $percentage,
			'price' => $price,
			'info' => $info,
			'status' => $status,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->t_payment->update_data($where,$data,'amc_t_adm_payment');
		redirect('payment/index');
		// var_dump ($data);
	}

	//display get data edit
	public function edit($id=''){
		$where = array('id' => $id);
		$data['payment'] = $this->t_payment->get_data_edit($where,'amc_t_adm_payment')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/payment/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process delete
	public function delete($id){
		$where = array('id' => $id);
		$this->t_payment->delete_data($where,'amc_t_adm_payment');
		redirect('payment/index');
	}



}