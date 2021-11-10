<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Project extends CI_Controller{

 

	function __construct(){

		parent::__construct();		
		$this->check_isvalidated();
		$this->load->model('m_data_project');
		$this->load->helper('url');

	}
	private function check_isvalidated()
    {
        if
            (
                (!$this->session->userdata('loggin'))                ||
                (!in_array($this->session->userdata('level'), array(1,2)))
            )
        {
            redirect('login');
        }
	}
	
	// function check_login(){
	// 	if ( belum login ) {
	// 		redirect('login');
	// 	}
	// }

	// halaman utama 

	 function index(){

		$data['project'] = $this->m_data_project->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/project/datatable',$data);
		$this->load->view('template/footer/index');

	}



	// process input

 	function p_input(){

		$name = $this->input->post('name');
		$work_package = $this->input->post('work_package');
		$location = $this->input->post('location');
		$date = $this->input->post('date');
		$project = $this->input->post('project');
		$sector = $this->input->post('sector');

 

		$data = array(

			'name' => $name,
			'work_package' => $work_package,
			'location' => $location,
			'date' => $date,
			'project' => $project,
			'sector' => $sector

			);

		$this->m_data_project->input_data($data,'amc_m_project');
		redirect('project/index');

	}



	// display input

	function input(){

		$data['project'] = $this->m_data_project->get_data()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/project/input',$data);
		$this->load->view('template/footer/index');

	}



 	// process update

	function update(){

		$id= $this->input->post('id');		
		$name = $this->input->post('name');
		$work_package = $this->input->post('work_package');
		$location = $this->input->post('location');
		$date = $this->input->post('date');
		$project = $this->input->post('project');
		$sector = $this->input->post('sector');

		
		$data = array(

			'name' => $name,
			'work_package' => $work_package,
			'location' => $location,
			'date' => $date,
			'project' => $project,
			'sector' => $sector

		);



		$where = array(
			'id' => $id

		);


		$this->m_data_project->update_data($where,$data,'amc_m_project');
		redirect('project/index');

	}


	//display get data edit

	public function edit($id=''){

		$where = array('id' => $id);
		$data['project'] = $this->m_data_project->get_data_edit($where,'amc_m_project')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/project/edit',$data);
		$this->load->view('template/footer/index');

	}


	// process delete

	function delete($id){

		$where = array('id' => $id);
		$this->m_data_project->delete_data($where,'amc_m_project');
		redirect('project/index');
	}

 

}