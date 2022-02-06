<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class client_process extends CI_Controller{

 
	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('m_data_client_process');
		$this->load->model('m_data_prospective_client');
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
	public function index(){
		$data['client_process'] = $this->m_data_client_process->get_data();
		$data['confirmation'] = $this->m_data_client_process->get_data_client_confirmation();
		$data['penawaran'] = $this->m_data_client_process->get_data_client_penawaran();
		$data['po'] = $this->m_data_client_process->get_data_client_po();
		$data['client'] = $this->m_data_client_process->get_data_client()->result();
		$data['products'] = $this->m_data_prospective_client->get_data_products();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/client_process/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$client_id = $this->input->post('client_id');
		$project_activity = $this->input->post('project_activity');
		
		

		$data = array(
			'client_id' => $client_id,
			'project_activity' => $project_activity
			);

		$this->m_data_client_process->input_data($data,'amc_t_client_process');

	// INPUT PENWARAN 
		$this->form_validation->set_rules('no_penawaran[]', 'no_penawaran', 'required|trim|xss_clean');
		$this->form_validation->set_rules('date_penawaran[]', 'date_penawaran', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bid_price[]', 'bid_price', 'required|trim|xss_clean');
		$this->form_validation->set_rules('info_penawaran[]', 'info_penawaran', 'required|trim|xss_clean');
		$penawaran = $this->input->post('no_penawaran');
		$penawaran = $this->input->post('date_penawaran');
		$penawaran = $this->input->post('bid_price');
		$penawaran = $this->input->post('info_penawaran');
	    $result = array();
		    foreach($penawaran AS $key => $val){
			     $result[] = array(
			     	  "client_id" 		=> $client_id,
				      "no_penawaran" 	=> $_POST['no_penawaran'][$key],
				      "date"  			=> $_POST['date_penawaran'][$key],
				      "price"  			=> $_POST['bid_price'][$key],
				      "info"  			=> $_POST['info_penawaran'][$key]
			     );
		    }    
	    $this->db->insert_batch('amc_t_client_penawaran', $result); 

	// INPUT CONFIRMATION
	    $this->form_validation->set_rules('date_confirmation[]', 'date_confirmation', 'required|trim|xss_clean');
		$this->form_validation->set_rules('info_confirmation[]', 'info_confirmation', 'required|trim|xss_clean');
		$confirmation = $this->input->post('date_confirmation');
		$confirmation = $this->input->post('info_confirmation');
	    $result2 = array();
		    foreach($confirmation AS $key => $val){
			     $result2[] = array(
			     	  "client_id" 		=> $client_id,
				      "date" 			=> $_POST['date_confirmation'][$key],
				      "info"  			=> $_POST['info_confirmation'][$key]
			     );
		    }    
	    $this->db->insert_batch('amc_t_client_confirmation', $result2); 

	// INPUT PO / KONTRAK
	    $this->form_validation->set_rules('no_po[]', 'no_po', 'required|trim|xss_clean');
		$this->form_validation->set_rules('date_po[]', 'date_po', 'required|trim|xss_clean');
		$this->form_validation->set_rules('price[]', 'price', 'required|trim|xss_clean');
		$this->form_validation->set_rules('info_po[]', 'info_po', 'required|trim|xss_clean');
		$po = $this->input->post('no_po');
		$po = $this->input->post('date_po');
		$po = $this->input->post('price');
		$po = $this->input->post('info_po');
	    $result3 = array();
		    foreach($po AS $key => $val){
			     $result3[] = array(
			     	  "client_id" 		=> $client_id,
				      "no_po" 			=> $_POST['no_po'][$key],
				      "date"  			=> $_POST['date_po'][$key],
				      "price"  			=> $_POST['price'][$key],
				      "info"  			=> $_POST['info_po'][$key]
			     );
		    }    
	    $this->db->insert_batch('amc_t_client_po', $result3); 


		redirect('Client_Process/index');
	}

	

 	// process update
	 public function update(){
		$client_id = $this->input->post('client_id');
		$project_activity = $this->input->post('project_activity');
		$status_client = $this->input->post('status_client');

		$data = array(
			'project_activity' => $project_activity,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array('client_id' => $client_id );

		$this->m_data_client_process->update_data($where,$data,'amc_t_client_process');

		//update client status black list
		$data2 = array(
			'status_client' => $status_client,
			'editDate'=>date('Y-m-d H:i:s')
		);
		
		$where2 = array(
			'id' => $client_id
		);

		$this->m_data_client_process->update_data($where2,$data2,'amc_m_client');


		// EDIT PENWARAN 
		$where = array("client_id" => $client_id);
		$this->m_data_client_process->delete_data($where,'amc_t_client_penawaran');
		$this->form_validation->set_rules('no_penawaran[]', 'no_penawaran', 'required|trim|xss_clean');
		$this->form_validation->set_rules('date_penawaran[]', 'date_penawaran', 'required|trim|xss_clean');
		$this->form_validation->set_rules('bid_price[]', 'bid_price', 'required|trim|xss_clean');
		$this->form_validation->set_rules('info_penawaran[]', 'info_penawaran', 'required|trim|xss_clean');
		$penawaran = $this->input->post('no_penawaran');
		$penawaran = $this->input->post('date_penawaran');
		$penawaran = $this->input->post('bid_price');
		$penawaran = $this->input->post('info_penawaran');
	    $result = array();
		    foreach($penawaran AS $key => $val){
			     $result[] = array(
			     	  "client_id" 		=> $client_id,
				      "no_penawaran" 	=> $_POST['no_penawaran'][$key],
				      "date"  			=> $_POST['date_penawaran'][$key],
				      "price"  			=> $_POST['bid_price'][$key],
				      "info"  			=> $_POST['info_penawaran'][$key]
			     );
		    }    
	    $this->db->insert_batch('amc_t_client_penawaran', $result); 

	// EDIT CONFIRMATION
	    $where = array("client_id" => $client_id);
		$this->m_data_client_process->delete_data($where,'amc_t_client_confirmation');
	    $this->form_validation->set_rules('date_confirmation[]', 'date_confirmation', 'required|trim|xss_clean');
		$this->form_validation->set_rules('info_confirmation[]', 'info_confirmation', 'required|trim|xss_clean');
		$confirmation = $this->input->post('date_confirmation');
		$confirmation = $this->input->post('info_confirmation');
	    $result2 = array();
		    foreach($confirmation AS $key => $val){
			     $result2[] = array(
			     	  "client_id" 		=> $client_id,
				      "date" 			=> $_POST['date_confirmation'][$key],
				      "info"  			=> $_POST['info_confirmation'][$key]
			     );
		    }    
	    $this->db->insert_batch('amc_t_client_confirmation', $result2); 

	// EDIT PO / KONTRAK
	    $where = array("client_id" => $client_id);
		$this->m_data_client_process->delete_data($where,'amc_t_client_po');
	    $this->form_validation->set_rules('no_po[]', 'no_po', 'required|trim|xss_clean');
		$this->form_validation->set_rules('date_po[]', 'date_po', 'required|trim|xss_clean');
		$this->form_validation->set_rules('price[]', 'price', 'required|trim|xss_clean');
		$this->form_validation->set_rules('info_po[]', 'info_po', 'required|trim|xss_clean');
		$po = $this->input->post('no_po');
		$po = $this->input->post('date_po');
		$po = $this->input->post('price');
		$po = $this->input->post('info_po');
	    $result3 = array();
		    foreach($po AS $key => $val){
			     $result3[] = array(
			     	  "client_id" 		=> $client_id,
				      "no_po" 			=> $_POST['no_po'][$key],
				      "date"  			=> $_POST['date_po'][$key],
				      "price"  			=> $_POST['price'][$key],
				      "info"  			=> $_POST['info_po'][$key]
			     );
		    }    
	    $this->db->insert_batch('amc_t_client_po', $result3); 

		redirect('Client_Process/index');
		// var_dump ($data);
	}

	//display get data edit
	public function edit($id=''){
		$where = array('id' => $id);
		$data['client_process'] = $this->m_data_client_process->get_data_edit($where,'amc_t_client_process')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/client_process/edit',$data);
		$this->load->view('template/footer/index');
	}

	// process delete
	public function delete($id){
		$data = array('status_client'=>'0');
		$where1 = array('id' => $id);
		$this->m_data_client_process->update_data($where1,$data,'amc_m_client');

		$where = array('client_id' => $id);
		$this->m_data_client_process->delete_data($where,'amc_t_client_process');
		$this->m_data_client_process->delete_data($where,'amc_t_client_penawaran');
		$this->m_data_client_process->delete_data($where,'amc_t_client_confirmation');
		$this->m_data_client_process->delete_data($where,'amc_t_client_po');

		redirect('Client_Process/index');
	}

	public function do_upload($id='') { 
		 $id= $this->input->post('id');
		 $image = 'MARKETING'.'-'.time().'-'.str_replace(' ', '_',$_FILES["upload"]['name']);
		 $config['file_name'] = $image;
         $config['upload_path']   = './upload/'; 
         $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|xlsx|csv|xls'; 
         $config['max_size']      = 10000;  

         $this->load->library('upload');
         $this->upload->initialize($config);

	         if ( ! $this->upload->do_upload('upload')) {
	            $error = array('error' => $this->upload->display_errors()); 
	            // var_dump($error);
	          
	            $this->load->view('pages/marketing/client_process/datatable', $error);
	            
	         }

	         else { 
	         	$data = array(
				'upload' => $image, 
				'editDate' =>date('Y-m-d H:i:s')
				   );


	         	$where = array('id' => $id);

	         	$this->t_recapitulation->update_data($where,$data,'amc_t_client_process');         
	            $error=array('error'=>'File has been uploaded'); 
	            redirect('Client_Process/index');
	         } 
      }


}