<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class tender extends CI_Controller{

 
	function __construct(){
		parent::__construct();	
		$this->check_isvalidated();	
		$this->load->model('m_data_client_tender');
		$this->load->helper('url');
	}

	private function check_isvalidated()
    {
        if
            (
                (!$this->session->userdata('loggin'))
                ||
                (!in_array($this->session->userdata('level'), array(1,2)))
            )
        {
            redirect('login');
        }
	}
	
	// halaman utama 
	public function index(){
		$data['client_tender'] = $this->m_data_client_tender->get_data()->result();
		$data['client'] = $this->m_data_client_tender->get_data_client()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/tender/datatable',$data);
		$this->load->view('template/footer/index');
	}

	// process input
	public function p_input(){
		$client_id = $this->input->post('client_id');
		$code_tender = $this->input->post('code_tender');
		$price_hps = $this->input->post('price_hps');
		$dk_date_download = $this->input->post('dk_date_download');
		$dk_date_penjelasan = $this->input->post('dk_date_penjelasan');
		$dk_date_upload = $this->input->post('dk_date_upload');
		$dk_date_pembuktian = $this->input->post('dk_date_pembuktian');
		$dk_date_pengumuman = $this->input->post('dk_date_pengumuman');
		$dp_date_download = $this->input->post('dp_date_download');
		$dp_date_penjelasan = $this->input->post('dp_date_penjelasan');
		$dp_date_upload = $this->input->post('dp_date_upload');
		$dp_date_pembukaan_evaluasi_teknis = $this->input->post('dp_date_pembukaan_evaluasi_teknis');
		$dp_date_pengumuman = $this->input->post('dp_date_pengumuman');
		$dp_date_pembukaan_evaluasi_harga = $this->input->post('dp_date_pembukaan_evaluasi_harga');
		$pengumuman_pemenang = $this->input->post('pengumuman_pemenang');

		$keterangan = $this->input->post('keterangan');
		
		

		$data = array(
			'client_id' => $client_id,
			'code_tender' => $code_tender,
			'price_hps' => $price_hps,
			'dk_date_download' => $dk_date_download,
			'dk_date_penjelasan' => $dk_date_penjelasan,
			'dk_date_upload' => $dk_date_upload,
			'dk_date_pembuktian' => $dk_date_pembuktian,
			'dk_date_pengumuman' => $dk_date_pengumuman,
			'dp_date_download' => $dp_date_download,
			'dp_date_penjelasan' => $dp_date_penjelasan,
			'dp_date_upload' => $dp_date_upload,
			'dp_date_pembukaan_evaluasi_teknis'=>$dp_date_pembukaan_evaluasi_teknis,
			'dp_date_pengumuman'=>$dp_date_pengumuman,
			'dp_date_pembukaan_evaluasi_harga'=>$dp_date_pembukaan_evaluasi_harga,
			'pengumuman_pemenang'=>$pengumuman_pemenang,
			'keterangan'=>$keterangan,
			'createDate'=>date('Y-m-d H:i:s')
			
			);

		$this->m_data_client_tender->input_data($data,'amc_t_client_rekapitulasi_tender');
		redirect('tender/index');
	}

	// display input
	public function input(){		
		$data['client_tender'] = $this->m_data_client_tender->get_data()->result();
		$data['client'] = $this->m_data_client_tender->get_data_client()->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/tender/input',$data);
		$this->load->view('template/footer/index');

	}

 	// process update
	 public function update(){
		$id= $this->input->post('id');
		$client_id = $this->input->post('client_id');
		$code_tender = $this->input->post('code_tender');
		$price_hps = $this->input->post('price_hps');
		$dk_date_download = $this->input->post('dk_date_download');
		$dk_date_penjelasan = $this->input->post('dk_date_penjelasan');
		$dk_date_upload = $this->input->post('dk_date_upload');
		$dk_date_pembuktian = $this->input->post('dk_date_pembuktian');
		$dk_date_pengumuman = $this->input->post('dk_date_pengumuman');
		$dp_date_download = $this->input->post('dp_date_download');
		$dp_date_penjelasan = $this->input->post('dp_date_penjelasan');
		$dp_date_upload = $this->input->post('dp_date_upload');
		$dp_date_pembukaan_evaluasi_teknis = $this->input->post('dp_date_pembukaan_evaluasi_teknis');
		$dp_date_pengumuman = $this->input->post('dp_date_pengumuman');
		$dp_date_pembukaan_evaluasi_harga = $this->input->post('dp_date_pembukaan_evaluasi_harga');
		$pengumuman_pemenang = $this->input->post('pengumuman_pemenang');		
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'client_id' => $client_id,
			'code_tender' => $code_tender,
			'price_hps' => $price_hps,
			'dk_date_download' => $dk_date_download,
			'dk_date_penjelasan' => $dk_date_penjelasan,
			'dk_date_upload' => $dk_date_upload,
			'dk_date_pembuktian' => $dk_date_pembuktian,
			'dk_date_pengumuman' => $dk_date_pengumuman,
			'dp_date_download' => $dp_date_download,
			'dp_date_penjelasan' => $dp_date_penjelasan,
			'dp_date_upload' => $dp_date_upload,
			'dp_date_pembukaan_evaluasi_teknis'=>$dp_date_pembukaan_evaluasi_teknis,
			'dp_date_pengumuman'=>$dp_date_pengumuman,
			'dp_date_pembukaan_evaluasi_harga'=>$dp_date_pembukaan_evaluasi_harga,
			'pengumuman_pemenang'=>$pengumuman_pemenang,
			'keterangan'=>$keterangan,
			'editDate'=>date('Y-m-d H:i:s')
		);

		$where = array(
			'id' => $id
		);

		$this->m_data_client_tender->update_data($where,$data,'amc_t_client_rekapitulasi_tender');
		redirect('tender/index');
		// var_dump ($data);
	}

	//display get data edit
	public function edit($id=''){
		$where = array('id' => $id);
		$data['client_tender'] = $this->m_data_client_tender->get_data_edit($where,'amc_t_client_rekapitulasi_tender')->result();
		$this->load->view('template/header/index');
		$this->load->view('template/menu/index');
		$this->load->view('pages/marketing/tender/edit',$data);
		$this->load->view('template/footer/index');
	}

	// process delete
	public function delete($id){
		$where = array('id' => $id);
		$this->m_data_client_tender->delete_data($where,'amc_t_client_rekapitulasi_tender');
		redirect('tender/index');
	}



}