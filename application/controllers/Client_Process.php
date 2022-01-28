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

		$data['confirmation'] = $this->m_data_client_process->get_data_client_confimation();
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
		$no_po = $this->input->post('no_po');
		$client_id = $this->input->post('client_id');
		$description = $this->input->post('description');
		$product_id = $this->input->post('product_id');
		$price_bid = $this->input->post('price_bid');
		$price = $this->input->post('price');
		$process_1 = $this->input->post('process_1');
		$date_1 = $this->input->post('date_1');
		$process_2 = $this->input->post('process_2');
		$date_2 = $this->input->post('date_2');
		$process_3 = $this->input->post('process_3');
		$date_3 = $this->input->post('date_3');
		$process_4 = $this->input->post('process_4');
		$date_4 = $this->input->post('date_4');
		$process_5 = $this->input->post('process_5');
		$date_5 = $this->input->post('date_5');
		
		

		$data = array(
			'no_po' => $no_po,
			'client_id' => $client_id,
			'description' => $description,
			'product_id' => $product_id,
			'price_bid' => $price_bid,
			'price' => $price,
			'process_1' => $process_1,
			'date_1' => $date_1,
			'process_2' => $process_2,
			'date_2' => $date_2,
			'process_3' => $process_3,
			'date_3' => $date_3,
			'process_4' => $process_4,
			'date_4' => $date_4,
			'process_5' => $process_5,
			'date_5' => $date_5
			
			);

		$this->m_data_client_process->input_data($data,'amc_t_client_process');
		redirect('Client_Process/index');
	}

	// display input
	public function input(){		
		$data['client_process'] = $this->m_data_client_process->get_data()->result();
		$data['client'] = $this->m_data_client_process->get_data_client()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/client_process/input',$data);
		$this->load->view('template/footer/index');

	}

 	// process update
	 public function update(){
		$id= $this->input->post('id');
		$no_po = $this->input->post('no_po');
		$description = $this->input->post('description');
		$product_id = $this->input->post('product_id');
		$price_bid = $this->input->post('price_bid');
		$price = $this->input->post('price');
		$process_1 = $this->input->post('process_1');
		$date_1 = $this->input->post('date_1');
		$process_2 = $this->input->post('process_2');
		$date_2 = $this->input->post('date_2');
		$process_3 = $this->input->post('process_3');
		$date_3 = $this->input->post('date_3');
		$process_4 = $this->input->post('process_4');
		$date_4 = $this->input->post('date_4');
		$process_5 = $this->input->post('process_5');
		$date_5 = $this->input->post('date_5');

		$data = array(
			'no_po' => $no_po,
			'description' => $description,
			'product_id' => $product_id,
			'price_bid' => $price_bid,
			'price' => $price,
			'process_1' => $process_1,
			'date_1' => $date_1,
			'process_2' => $process_2,
			'date_2' => $date_2,
			'process_3' => $process_3,
			'date_3' => $date_3,
			'process_4' => $process_4,
			'date_4' => $date_4,
			'process_5' => $process_5,
			'date_5' => $date_5,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->m_data_client_process->update_data($where,$data,'amc_t_client_process');
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
		$where = array('id' => $id);
		$this->m_data_client_process->delete_data($where,'amc_t_client_process');
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