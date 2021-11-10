<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class recapitulation extends CI_Controller{

 
	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('t_recapitulation');
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
		$data['recapitulation'] = $this->t_recapitulation->get_data()->result();
		$data['client'] = $this->t_recapitulation->get_data_client()->result();
		$data['user'] = $this->t_recapitulation->get_data_user()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/recapitulation/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$client_id = $this->input->post('client_id');
		$no_order = $this->input->post('no_order');
		//$no_report = $this->input->post('no_report');
		$contract_start_date = $this->input->post('contract_start_date');
		$contract_finish_date = $this->input->post('contract_finish_date');
		$project_activity = $this ->input->post('project_activity');
		$user_id = $this ->input->post('user_id');
        //$percentage = $this ->input->post('percentage');
		

		$data = array(
			'client_id' => $client_id,
			'no_order' => $no_order,
            //'no_report' => $no_report,
            'contract_start_date'=> $contract_start_date,
			'contract_finish_date' => $contract_finish_date,
			'project_activity' => $project_activity,
			'user_id' => $user_id,
			//'percentage'=>$percentage,
			'createDate'=>date('Y-m-d H:i:s')
            );
            
		$this->t_recapitulation->input_data($data,'amc_t_recapitulation_project');
		redirect('recapitulation/index');
	}

	// display input
	public function input(){
		$data['recapitulation'] = $this->t_recapitulation->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/recapitulation/input',$data);
		$this->load->view('template/footer/index');

	}

 	// process update
	 public function update(){
		$id= $this->input->post('id');
		$client_id = $this->input->post('client_id');
		$no_order = $this->input->post('no_order');
		// $no_report = $this->input->post('no_report');
		$contract_start_date = $this->input->post('contract_start_date');
		$contract_finish_date = $this->input->post('contract_finish_date');
		$project_activity = $this ->input->post('project_activity');
		$user_id = $this ->input->post('user_id');
        // $percentage = $this ->input->post('percentage');

		$data = array(
			'client_id' => $client_id,
			'no_order' => $no_order,
            // 'no_report' => $no_report,
            'contract_start_date'=> $contract_start_date,
			'contract_finish_date' => $contract_finish_date,
			'project_activity' => $project_activity,
			'user_id' => $user_id,
			// 'percentage'=>$percentage,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->t_recapitulation->update_data($where,$data,'amc_t_recapitulation_project');
		redirect('recapitulation/index');
	}

	//display get data edit
	public function edit($id=''){
		$where = array('id' => $id);
		$data['recapitulation'] = $this->t_recapitulation->get_data_edit($where,'amc_t_recapitulation_project')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/recapitulation/edit',$data);
		$this->load->view('template/footer/index');
	}

	// process delete
	public function delete($id){
		$where = array('id' => $id);
		$this->t_recapitulation->delete_data($where,'amc_t_recapitulation_project');
		redirect('recapitulation/index');
	}



}