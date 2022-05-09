<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class prospective_client extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->check_isvalidated();
		$this->load->model('m_data_prospective_client');
		$this->load->helper('url');		
	}

	// login
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
	 
		$data['prospective_client'] = $this->m_data_prospective_client->get_data_prospec();
		$data['sector'] = $this->m_data_prospective_client->get_data_sector();
		$data['products'] = $this->m_data_prospective_client->get_data_products();
		$data['project'] = $this->m_data_prospective_client->get_data_project();
		$data['tlp'] = $this->m_data_prospective_client->get_data_tlp();
		$data['email'] = $this->m_data_prospective_client->get_data_email();
		$data['pic'] = $this->m_data_prospective_client->get_data_pic_contact();
		$data['marketing'] = $this->m_data_prospective_client->get_data_user();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/prospective_client/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$name = $this->input->post('name');
		$npwp = $this->input->post('npwp');
		$information = $this->input->post('information');
		$address = $this->input->post('address');
		$city_kabupaten = $this->input->post('city_kabupaten');
		$province = $this->input->post('province');
		$address2 = $this->input->post('address2');
		$city_kabupaten2 = $this->input->post('city_kabupaten2');
		$province2 = $this->input->post('province2');
		$sector_id = $this ->input->post('sector_id');
		$status_client = $this ->input->post('status_client');
		$id_user = $this ->input->post('id_user');

		$data = array(
			'name' => $name,
			'npwp' =>$npwp,
			'information' => $information,
			'address' => $address,
			'city_kabupaten' => $city_kabupaten,
			'province' => $province,
			'address2' => $address2,
			'city_kabupaten2' => $city_kabupaten2,
			'province2' => $province2,
			'sector_id' => $sector_id,
			'id_user'=> $id_user,
			'status_client'=> $status_client
			);

		$this->m_data_prospective_client->input_data($data,'amc_m_client');
		$insert_id = $this->db->insert_id(); 
		



		// INPUT EMAIL
		$this->form_validation->set_rules('email[]', 'email', 'required|trim|xss_clean');
		$email = $this->input->post('email');
	    $result = array();
		    foreach($email AS $key => $val){
			     $result[] = array(
			     	  "id_email" => "E".$insert_id.date("YmdHis"),
			     	  "client_id" => $insert_id,
				      "client_name" => $name,
				      "email"  => $_POST['email'][$key]
			     );
		    } 
	    $this->db->insert_batch('amc_m_client_email', $result);
	   

	    // INPUT TELP
		$this->form_validation->set_rules('contact[]', 'contact', 'required|trim|xss_clean');
		$contact = $this->input->post('contact');
	    $result2 = array();
		    foreach($contact AS $key => $val){
			     $result2[] = array(
			     	  "id_tlp" => "T".$insert_id.date("YmdHis"),
			     	  "client_id" => $insert_id,
				      "client_name" => $name,
				      "tlp"  => $_POST['contact'][$key]
			     );
		    }  
	    $this->db->insert_batch('amc_m_client_tlp', $result2);

	   // INPUT PRODUCT
		$this->form_validation->set_rules('project_id[]', 'project_id', 'required|trim|xss_clean');
		$project_id = $this->input->post('project_id');
	    $result3 = array();
		    foreach($project_id AS $key => $val){
			     $result3[] = array(
			     	  "id_project" => "PJ".$insert_id.date("YmdHis"),
			     	  "client_id" => $insert_id,
				      "client_name" => $name,
				      "project_id"  => $_POST['project_id'][$key]
			     );
		    }       
     	$this->db->insert_batch('amc_m_client_project', $result3);  

	 // INPUT PIC CONTACT
		$this->form_validation->set_rules('pic[]', 'pic', 'required|trim|xss_clean');
		$this->form_validation->set_rules('pic_contact[]', 'pic_contact', 'required|trim|xss_clean');
		$this->form_validation->set_rules('pic_email[]', 'pic_email', 'required|trim|xss_clean');
		$pic = $this->input->post('pic');
		$pic = $this->input->post('pic_contact');
		$pic = $this->input->post('pic_email');
	    $result4 = array();
		    foreach($pic AS $key => $val){
			     $result4[] = array(
			     	  "id_pic" => "P".$insert_id.date("YmdHis"),
			     	  "client_id" => $insert_id,
				      "client_name" => $name,
				      "pic"  => $_POST['pic'][$key],
				      "pic_contact"  => $_POST['pic_contact'][$key],
				      "email"  => $_POST['pic_email'][$key]
			     );
		    }    
	    $this->db->insert_batch('amc_m_client_pic_contact', $result4); 


		redirect('Prospective_Client/index');
		
		
	}

	// display input
	public function input(){
		// $data['prospective_client'] = $this->m_data_client->get_data_prospec();
		$data['prospective_client'] = $this->m_data_prospective_client->get_data_prospec();
		$data['sector'] = $this->m_data_prospective_client->get_data_sector();
		$data['products'] = $this->m_data_prospective_client->get_data_products();
		$data['tlp'] = $this->m_data_prospective_client->get_data_tlp();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/prospective_client/input',$data);
		$this->load->view('template/footer/index');

	}

 	// process update
	 public function update(){
		$id= $this->input->post('id');
		$name = $this->input->post('name');
		$npwp = $this->input->post('npwp');
		$information = $this->input->post('information');
		$address = $this->input->post('address');
		$city_kabupaten = $this->input->post('city_kabupaten');
		$province = $this->input->post('province');
		$address2 = $this->input->post('address2');
		$city_kabupaten2 = $this->input->post('city_kabupaten2');
		$province2 = $this->input->post('province2');
		$sector_id = $this ->input->post('sector_id');
		$id_user = $this ->input->post('id_user');
		$status_client = $this ->input->post('status_client');
		$user_id = $this->session->userdata('id');
		

		$data = array(
			'name' => $name,
			'npwp' =>$npwp,
			'information' => $information,
			'address' => $address,
			'city_kabupaten' => $city_kabupaten,
			'province' => $province,
			'address2' => $address2,
			'city_kabupaten2' => $city_kabupaten2,
			'province2' => $province2,
			'sector_id' => $sector_id,
			'id_user'=> $id_user,
			'status_client'=>$status_client,
			'editUser'=>$user_id,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->m_data_prospective_client->update_data($where,$data,'amc_m_client');
		
		//EDIT EMAIL
		$where = array("client_id" => $id);
		$this->m_data_prospective_client->delete_data($where,'amc_m_client_email');
		$this->form_validation->set_rules('email[]', 'email', 'required|trim|xss_clean');
		$hid= $this->input->post('id');
		$id_email= $this->input->post('id_email');
		$email = $this->input->post('email');
	    $result = array();
		    foreach($email AS $key => $val){
			     $result[] = array(
			     	  "id"=>$hid,
			     	  "id_email"=> $id_email,
			     	  "client_id"=> $id,
				      "client_name" => $name,
				      "email"  => $_POST['email'][$key]
			     );
		    } 
		$this->db->insert_batch('amc_m_client_email', $result);

	    // EDIT TELP
	    $where = array("client_id" => $id);
		$this->m_data_prospective_client->delete_data($where,'amc_m_client_tlp');
		$this->form_validation->set_rules('contact[]', 'contact', 'required|trim|xss_clean');
		$hid= $this->input->post('id');
		$id_tlp= $this->input->post('id_tlp');
		$contact = $this->input->post('contact');
	    $result2 = array();
		    foreach($contact AS $key => $val){
			     $result2[] = array(
			     	  "id"=>$hid,
			     	  "id_tlp"=>$id_tlp,
			     	  "client_id"=> $id,
				      "client_name" => $name,
				      "tlp"  => $_POST['contact'][$key]
			     );
		    }     
		$this->db->insert_batch('amc_m_client_tlp', $result2); 

	   // EDIT PRODUCT	   
	    $where = array("client_id" => $id);
	    $this->m_data_prospective_client->delete_data($where,'amc_m_client_project');   
		$this->form_validation->set_rules('project_id[]', 'project_id', 'required|trim|xss_clean');
		$hid= $this->input->post('id');
		$id_project= $this->input->post('id_project');
		$project_id = $this->input->post('project_id');
	    $result3 = array();
		    foreach($project_id AS $key => $val){
			     $result3[] = array(
			     	  "id"=>$hid,
			     	  "id_project" => $id_project,
			     	  "client_id"=> $id,
				      "client_name" => $name,
				      "project_id"  => $_POST['project_id'][$key]
			     );
		    }     
	    $this->db->insert_batch('amc_m_client_project', $result3); 


	 	// EDIT PIC CONTACT	    
	    $where = array("client_id" => $id);
		$this->m_data_prospective_client->delete_data($where,'amc_m_client_pic_contact');
		$this->form_validation->set_rules('pic[]' , 'pic', 'required|trim|xss_clean');
		$this->form_validation->set_rules('pic_contact[]' , 'pic_contact', 'required|trim|xss_clean');
		$this->form_validation->set_rules('pic_email[]' , 'pic_email', 'required|trim|xss_clean');
		$hid= $this->input->post('id');
		$id_pic= $this->input->post('id_pic');
		$pic = $this->input->post('pic');
		$pic = $this->input->post('pic_contact');
		$pic = $this->input->post('pic_email');
	    $result4 = array();
	    foreach($pic AS $key => $val){
		     $result4[] = array(
		     	  "id"=>$hid,
		     	  "id_pic"=> $id_pic,
		          "client_id"=> $id,
			      "client_name" => $name,
			      "pic"  => $_POST['pic'][$key],
			      "pic_contact"  => $_POST['pic_contact'][$key],
			      "email"  => $_POST['pic_email'][$key]
		     );
	    }   
	    $this->db->insert_batch('amc_m_client_pic_contact', $result4); 
		redirect('Prospective_Client/index');
	}


	//display get data edit
	public function edit($id=''){
		$where = array('id' => $id);
		$data['prospective_client'] = $this->m_data_client->get_data_edit($where,'amc_m_client');
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/prospective_client/edit',$data);
		$this->load->view('template/footer/index');
	}


	public function edit_tlp($id=''){
		$where = array('id' => $id);
		$data['tlp'] = $this->m_data_client->get_data_edit_tlp($where,'amc_m_client_tlp');
		$this->load->view('pages/marketing/prospective_client/edit',$data);
	}


	// process delete
	public function delete($id){
		$where = array('id' => $id);
		$this->m_data_prospective_client->delete_data($where,'amc_m_client');

		$where1 = array("client_id" => $id);
		$this->m_data_prospective_client->delete_data($where1,'amc_m_client_email');
		$this->m_data_prospective_client->delete_data($where1,'amc_m_client_tlp');
		$this->m_data_prospective_client->delete_data($where1,'amc_m_client_project');   
		$this->m_data_prospective_client->delete_data($where1,'amc_m_client_pic_contact');

		redirect('Prospective_Client/index');
	}



}