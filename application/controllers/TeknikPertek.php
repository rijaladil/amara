<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class teknikpertek extends CI_Controller{


	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('t_teknik');
		$this->load->helper('url');
	}
	private function check_isvalidated()
    {
        if
            (
                (!$this->session->userdata('loggin'))
                ||
                (!in_array($this->session->userdata('level'), array(0,1,2,3,4,5)))
            )
        {
            redirect('login');
        }
	}
	
	// halaman utama 
   public  function index(){
   		$data['name'] = $this->input->post('name');
   		$data['product'] = $this->input->post('product');
	   	$data['min'] = $this->security->xss_clean($this->input->post('min'));
		$data['max'] = $this->security->xss_clean($this->input->post('max'));

		$data['teknik'] = $this->t_teknik->get_data()->result();
		$data['teknik_by_date'] = $this->t_teknik->get_data_by_date_pertek($data['name'], $data['product'], $data['min'], $data['max']);
		$data['client'] = $this->t_teknik->get_data_client()->result();
		$data['product'] = $this->t_teknik->get_data_product_pertek()->result();
		$data['user'] = $this->t_recapitulation->get_data_user()->result();
		$data['recapitulation'] = $this->t_recapitulation->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/teknik/pertek/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$recapitulation_id = $this->input->post('recapitulation_id');
		$planing_this_week = $this->input->post('planing_this_week');
		$start_date= $this->input->post('start_date');
		$finish_date = $this->input->post('finish_date');
		$realization = $this->input->post('realization');
		$problem = $this->input->post('problem');
		$solution = $this->input->post('solution');
		$planing_next_week = $this->input->post('planing_next_week');
		$user_id = $this->input->post('user_id');

		$data = array(
			'recapitulation_id'=> $recapitulation_id,
			'planing_this_week'=> $planing_this_week,
			'start_date' => $start_date, 
			'finish_date' => $finish_date, 
			'planing_this_week'=> $planing_this_week, 
			'realization' => $realization, 
			'problem' => $problem, 
			'solution' => $solution, 
			'planing_next_week' => $planing_next_week,
			'user_id' => $user_id,
			);

		$this->t_teknik->input_data($data,'amc_t_teknis_progress');
		redirect('teknik/index');
	}



	// display input
	public function input(){
		$data['teknik'] = $this->t_teknik->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/price/input',$data);
		$this->load->view('template/footer/index');

	}

 	// process update
	 public function update(){
		$id= $this->input->post('id');
		$recapitulation_id = $this->input->post('recapitulation_id');
		$planing_this_week = $this->input->post('planing_this_week');
		$start_date= $this->input->post('start_date');
		$finish_date = $this->input->post('finish_date');
		$realization = $this->input->post('realization');
		$problem = $this->input->post('problem');
		$solution = $this->input->post('solution');
		$planing_next_week = $this->input->post('planing_next_week');
		$user_id = $this->input->post('user_id');

		$data = array(
			'recapitulation_id'=> $recapitulation_id,
			'planing_this_week'=> $planing_this_week,
			'start_date' => $start_date, 
			'finish_date' => $finish_date, 
			'planing_this_week'=> $planing_this_week, 
			'realization' => $realization, 
			'problem' => $problem, 
			'solution' => $solution, 
			'planing_next_week' => $planing_next_week,
			'user_id' => $user_id,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->t_teknik->update_data($where,$data,'amc_t_teknis_progress');
		redirect('teknik/index');
		// var_dump ($data);
	}


	public function update_note(){
		$id= $this->input->post('id');
		$note = $this->input->post('note');


		$data = array(
			'note'=> $note,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->t_teknik->update_data($where,$data,'amc_t_teknis_progress');
		redirect('teknik/index');
		// var_dump ($data);
	}



public function update_no_report(){
		$id= $this->input->post('id');
		$no_report = $this->input->post('no_report');


		$data = array(
			'no_report'=> $no_report,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->t_teknik->update_data($where,$data,'amc_t_recapitulation_project');
		redirect('teknik/index');
		// var_dump ($data);
	}

	//display get data edit
	public function edit($id=''){
		$where = array('id' => $id);
		$data['teknik'] = $this->t_teknik->get_data_edit($where,'amc_t_teknis_progress')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/price/edit',$data);
		$this->load->view('template/footer/index');
	}

	// process delete
	public function delete($id){
		$where = array('id' => $id);
		$this->t_teknik->delete_data($where,'amc_t_teknis_progress');
		redirect('teknik/index');
	}



}