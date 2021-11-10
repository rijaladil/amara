<?php 

 class m_data_client_tender extends CI_Model{
	
	public function get_data(){    
		return $this->db->query('SELECT  
			t.id,
			t.client_id, 
			c.name,
			t.code_tender, 		
			c.product_id, 
			p.name as product_name,
			c.city_kabupaten,
			t.price_hps, 
			t.dk_date_download, 
			t.dk_date_penjelasan, 
			t.dk_date_upload, 
			t.dk_date_pembuktian, 
			t.dk_date_pengumuman, 
			t.dp_date_download, 
			t.dp_date_penjelasan, 
			t.dp_date_upload, 
			t.dp_date_pembukaan_evaluasi_teknis, 
			t.dp_date_pengumuman, 
			t.dp_date_pembukaan_evaluasi_harga, 
			t.pengumuman_pemenang, 
			t.keterangan
			FROM amc_t_client_rekapitulasi_tender t
			LEFT JOIN amc_m_client c
			ON  c.id = t.client_id
			LEFT JOIN amc_m_products p
			ON p.id = c.product_id

		');
	}

	public function get_data_client(){
		return $this->db->query('SELECT *
								FROM amc_m_client WHERE status_client = 1 ORDER BY name ASC'
		);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

 	function get_data_edit($where,$table){		
		 $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}

?>