<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');
 
class work extends CI_Controller{

 

	function __construct(){

		parent::__construct();	
		$this->check_isvalidated();
		$this->load->model('t_work');
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

	 function index(){

		$data['work'] = $this->t_work->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/work/datatable',$data);
		$this->load->view('template/footer/index');

	}



	// process input

 	function p_input(){

		$item = $this->input->post('item');
		$id_job = $this->input->post('id_job');
		$date = $this->input->post('date');
		$start = $this->input->post('start');
		$finish = $this->input->post('finish');
		$note = $this->input->post('note');
		$id_user = $this->input->post('id_user');

 

		$data = array(

			'item' => $item,
			'id_job' => $id_job,
			'date' => $date,
			'start' => $start,
			'finish' =>$finish,
			'note' =>$note,
			'id_user'=>$id_user

			);

		$this->t_work->input_data($data,'amc_t_work');
		redirect('work');

	}



	// display input

	function input(){

		$data['work'] = $this->t_work->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/work/input',$data);
		$this->load->view('template/footer/index');

	}



 	// process update

	function update(){

		$id= $this->input->post('id');
		$item = $this->input->post('item');
		$id_job = $this->input->post('id_job');
		$date = $this->input->post('date');
		$start = $this->input->post('start');
		$finish = $this->input->post('finish');
		$note = $this->input->post('note');
		$id_user = $this->input->post('id_user');

		

		$data = array(

			'item' => $item,
			'id_job' => $id_job,
			'date' => $date,
			'start' => $start,
			'finish' =>$finish,
			'note' =>$note,
			'id_user'=>$id_user

		);



		$where = array(
			'id' => $id

		);



		$this->t_work->update_data($where,$data,'amc_t_work');
		redirect('work');

	}



	//display get data edit

	function edit($id=''){

		$where = array('id' => $id);
		$data['work'] = $this->t_work->get_data_edit($where,'amc_t_work')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/work/edit',$data);
		$this->load->view('template/footer/index');

	}



	// process delete

	function delete($id){

		$where = array('id' => $id);
		$this->t_work->delete_data($where,'amc_t_work');
		redirect('work');

	}



 

}