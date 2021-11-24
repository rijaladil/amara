<?php 

 class m_data_client_process extends CI_Model{
	
	public function get_data(){
			return $this->db->query('SELECT 
								a.id as id,
								a.no_po,
								b.id as id_client,
								b.name as name,
								a.product_id,
								p.name as product_name,
								a.price_bid,
								a.price,
								a.description,
								a.date_1,
								a.process_1,
								a.date_2,
								a.process_2,
								a.date_3,
								a.process_3,
								a.date_4,
								a.process_4,
								a.date_5,
								a.process_5,
								a.upload,
								b.status_client
								FROM amc_m_client b  
								LEFT JOIN  amc_t_client_process a
								ON a.client_id = b.id
								LEFT JOIN amc_m_products p
								ON p.id = a.product_id
								WHERE b.status_client = 1'
		);
	}



	public function get_data_client(){
		return $this->db->query('SELECT *
								FROM amc_m_client WHERE status_client = 1'
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