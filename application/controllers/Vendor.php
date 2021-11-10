<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class vendor extends CI_Controller{

 
	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('m_data_vendor');
		$this->load->helper('url');
	}
	private function check_isvalidated()
    {
        if
            (
                (!$this->session->userdata('loggin'))
                ||
                (!in_array($this->session->userdata('level'), array(1,2,3,4)))
            )
        {
            redirect('login');
        }
	}
	
	// halaman utama 
	public function index(){
		$data['vendor'] = $this->m_data_vendor->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/vendor/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$name = $this->input->post('name');
		$no_registered = $this->input->post('no_registered');
		$date_registered = $this->input->post('date_registered');
		$validity_period = $this->input->post('validity_period');
		$link_web = $this ->input->post('link_web');
		$no_id = $this ->input->post('no_id');
        $password = $this ->input->post('password');
        $information = $this ->input->post('information');
		

		$data = array(
			'name' => $name,
            'no_registered' => $no_registered,
            'date_registered'=> $date_registered,
			'validity_period' => $validity_period,
			'link_web' => $link_web,
			'no_id' => $no_id,
			'password'=>$password,
			'information'=>$information
            );
            
		$this->m_data_vendor->input_data($data,'amc_m_vendor');
		redirect('vendor/index');
	}

	// display input
	public function input(){
		$data['vendor'] = $this->m_data_vendor->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/vendor/input',$data);
		$this->load->view('template/footer/index');

	}

 	// process update
	 public function update(){
		$id= $this->input->post('id');
		$name = $this->input->post('name');
		$no_registered = $this->input->post('no_registered');
		$date_registered = $this->input->post('date_registered');
		$validity_period = $this->input->post('validity_period');
		$link_web = $this ->input->post('link_web');
		$no_id = $this ->input->post('no_id');
        $password = $this ->input->post('password');
        $information = $this ->input->post('information');

		$data = array(
			'name' => $name,
            'no_registered' => $no_registered,
            'date_registered'=> $date_registered,
			'validity_period' => $validity_period,
			'link_web' => $link_web,
			'no_id' => $no_id,
			'password'=>$password,
			'information'=>$information,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->m_data_vendor->update_data($where,$data,'amc_m_vendor');
		redirect('vendor/index');
	}

	//display get data edit
	public function edit($id=''){
		$where = array('id' => $id);
		$data['vendor'] = $this->m_data_vendor->get_data_edit($where,'amc_m_vendor')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/vendor/edit',$data);
		$this->load->view('template/footer/index');
	}

	// process delete
	public function delete($id){
		$where = array('id' => $id);
		$this->m_data_vendor->delete_data($where,'amc_m_vendor');
		redirect('vendor/index');
	}



}