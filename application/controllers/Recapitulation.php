<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class recapitulation extends CI_Controller{

 
	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('t_recapitulation');
		$this->load->model('t_teknik');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
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
	public function index(){
		$data['recapitulation'] = $this->t_recapitulation->get_data()->result();
		$data['client'] = $this->t_recapitulation->get_data_client()->result();
		$data['user'] = $this->t_recapitulation->get_data_user()->result();
		$data['teknik'] = $this->t_teknik->get_data()->result();
		$data['data_product'] = $this->t_recapitulation->get_data_products()->result();	
		$data['termin'] = $this->t_recapitulation->get_data_recapitulation_project_termin();
		$data['output'] = $this->t_recapitulation->get_data_recapitulation_project_output();	
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/administration/recapitulation/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$client_id = $this->input->post('client_id');
		$no_order = $this->input->post('no_order');
		$contract_start_date = $this->input->post('contract_start_date');
		$contract_finish_date = $this->input->post('contract_finish_date');
		$project_activity = $this ->input->post('project_activity');
		$termin = $this ->input->post('termin');
		$output_pekerjaan = $this ->input->post('output_pekerjaan');
		$denda = $this ->input->post('denda');
		$user_id = $this ->input->post('user_id');
		

		$data = array(
			'client_id' => $client_id,
			'no_order' => $no_order,
            'contract_start_date'=> $contract_start_date,
			'contract_finish_date' => $contract_finish_date,
			'project_activity' => $project_activity,
			'termin' => $termin,
			'output_pekerjaan' => $output_pekerjaan,
			'denda' => $denda,
			'user_id' => $user_id,
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
		$contract_start_date = $this->input->post('contract_start_date');
		$contract_finish_date = $this->input->post('contract_finish_date');
		$project_activity = $this ->input->post('project_activity');
		$termin = $this ->input->post('termin');
		$output_pekerjaan = $this ->input->post('output_pekerjaan');
		$denda = $this ->input->post('denda');
		$user_id = $this ->input->post('user_id');

		$data = array(
			'client_id' => $client_id,
			'no_order' => $no_order,
            'contract_start_date'=> $contract_start_date,
			'contract_finish_date' => $contract_finish_date,
			'project_activity' => $project_activity,
			'termin' => $termin,
			'output_pekerjaan' => $output_pekerjaan,
			'denda' => $denda,
			'user_id' => $user_id,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		   if ( $id <> '' ) 
		   {
		      $this->t_recapitulation->update_data($where,$data,'amc_t_recapitulation_project');
		   } else {
		      $this->t_recapitulation->input_data($data,'amc_t_recapitulation_project');
		      $insert_id = $this->db->insert_id(); 
		   }

		//$this->t_recapitulation->update_data($where,$data,'amc_t_recapitulation_project');
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



	public function do_upload($id='') { 
		 $id= $this->input->post('id');
		 $image = 'TEKNIK'.'-'.time().'-'.str_replace(' ', '_',$_FILES["upload"]['name']);
		 $config['file_name'] = $image;
         $config['upload_path']   = './upload/'; 
         $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|xlsx|csv|xls'; 
         $config['max_size']      = 10000;  

         $this->load->library('upload');
         $this->upload->initialize($config);

	         if ( ! $this->upload->do_upload('upload')) {
	            $error = array('error' => $this->upload->display_errors()); 
	            // var_dump($error);
	          
	            $this->load->view('pages/administration/recapitulation/datatable', $error);
	            
	         }

	         else { 
	         	$data = array(
				'upload' => $image, 
				'editDate' =>date('Y-m-d H:i:s')
				   );


	         	$where = array('id' => $id);

	         	$this->t_recapitulation->update_data($where,$data,'amc_t_recapitulation_project');         
	            $error=array('error'=>'File has been uploaded'); 
	            redirect('recapitulation/index');
	         } 
      }

}