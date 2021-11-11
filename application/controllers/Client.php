<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class client extends CI_Controller{

 
	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('m_data_client');
		$this->load->helper('url');
	}

	private function check_isvalidated()
    {
        if
            (
                (!$this->session->userdata('loggin'))
                ||
                (!in_array($this->session->userdata('level'), array(1,2,3,4,5)))
            )
        {
            redirect('login');
        }
	}
	
	// halaman utama 
	public function index(){
		$data['client'] = $this->m_data_client->get_data();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/client/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$city_kabupaten = $this->input->post('city_kabupaten');
		$province = $this->input->post('province');
		$address2 = $this->input->post('address2');
		$contact = $this->input->post('contact');
		$email = $this->input->post('email');
		$sector = $this ->input->post('sector');
		$pic = $this ->input->post('pic');
		$pic_contact = $this ->input->post('pic_contact');
		$pic_2 = $this ->input->post('pic_2');
		$pic_contact_2 = $this ->input->post('pic_contact_2');
		$pic_3 = $this ->input->post('pic_3');
		$pic_contact_3 = $this ->input->post('pic_contact_3');
		$pic_4 = $this ->input->post('pic_4');
		$pic_contact_4 = $this ->input->post('pic_contact_4');
		$pic_5 = $this ->input->post('pic_5');
		$pic_contact_5 = $this ->input->post('pic_contact_5');
		

		$data = array(
			'name' => $name,
			'city_kabupaten' => $city_kabupaten,
			'province' => $province,
			'address2' => $address2,
			'contact' => $contact,
			'email' => $email,
			'sector' => $sector,
			'pic'=>$pic,
			'pic_contact'=>$pic_contact,
			'pic_2'=>$pic_2,
			'pic_contact_2'=>$pic_contact_2,
			'pic_3'=>$pic_3,
			'pic_contact_3'=>$pic_contact_3,
			'pic_4'=>$pic_4,
			'pic_contact_4'=>$pic_contact_4,
			'pic_5'=>$pic_5,
			'pic_contact_5'=>$pic_contact_5
			);

		$this->m_data_client->input_data($data,'amc_m_client');
		redirect('client/index');
	}

	// display input
	public function input(){
		$data['client'] = $this->m_data_client->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/client/input',$data);
		$this->load->view('template/footer/index');

	}

 	// process update
	 public function update(){
		$id= $this->input->post('id');
		$name = $this->input->post('name');
		$information = $this->input->post('information');
		$address = $this->input->post('address');
		$city_kabupaten = $this->input->post('city_kabupaten');
		$province = $this->input->post('province');
		$address2 = $this->input->post('address2');
		$contact = $this->input->post('contact');
		$email = $this->input->post('email');
		$sector = $this ->input->post('sector');
		$status_project = $this ->input->post('status_project');
		$pic = $this ->input->post('pic');
		$pic_contact = $this ->input->post('pic_contact');
		$pic_2 = $this ->input->post('pic_2');
		$pic_contact_2 = $this ->input->post('pic_contact_2');
		$pic_3 = $this ->input->post('pic_3');
		$pic_contact_3 = $this ->input->post('pic_contact_3');
		$pic_4 = $this ->input->post('pic_4');
		$pic_contact_4 = $this ->input->post('pic_contact_4');
		$pic_5 = $this ->input->post('pic_5');
		$pic_contact_5 = $this ->input->post('pic_contact_5');
		$status_client = $this ->input->post('status_client');

		$data = array(
			'name' => $name,
			'information' => $information,
			'address' => $address,
			'city_kabupaten' => $city_kabupaten,
			'province' => $province,
			'address2' => $address2,
			'contact' => $contact,
			'email' => $email,
			'sector' => $sector,
			'status_project' => $status_project,
			'pic'=>$pic,
			'pic_contact'=>$pic_contact,
			'pic_2'=>$pic_2,
			'pic_contact_2'=>$pic_contact_2,
			'pic_3'=>$pic_3,
			'pic_contact_3'=>$pic_contact_3,
			'pic_4'=>$pic_4,
			'pic_contact_4'=>$pic_contact_4,
			'pic_5'=>$pic_5,
			'pic_contact_5'=>$pic_contact_5,
			'status_client'=>$status_client,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->m_data_client->update_data($where,$data,'amc_m_client');
		redirect('client/index');
		// var_dump ($data);
	}

	//display get data edit
	public function edit($id=''){
		$where = array('id' => $id);
		$data['client'] = $this->m_data_client->get_data_edit($where,'amc_m_client')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/client/edit',$data);
		$this->load->view('template/footer/index');
	}

	// process delete
	public function delete($id){
		$where = array('id' => $id);
		$this->m_data_client->delete_data($where,'amc_m_client');
		redirect('client/index');
	}



}