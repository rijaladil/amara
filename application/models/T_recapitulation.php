<?php 

 class t_recapitulation extends CI_Model{
	public function get_data(){
		return $this->db->query('
						SELECT 
								rp.id,
								c.name,
								pic.pic,
								rp.client_id,
								rp.no_order,
								rp.no_report,
								rp.contract_start_date,
								rp.contract_finish_date,
								rp.project_activity,
								rp.user_id,
								u.name as user_name,
								rp.percentage,
								p. name as product_name

		        				FROM amc_t_recapitulation_project rp
		        				LEFT JOIN amc_m_client c
		        				ON rp.client_id = c.id 
		        				LEFT JOIN amc_m_client_pic_contact pic
		        				ON pic.client_id = c.id
		        				LEFT JOIN amc_m_user u
		        				ON u.id = rp.user_id
		        				LEFT JOIN amc_m_products p
		        				ON p.id = c.product_id

		        		

		       ');
	}

		public function get_data_client(){
		return $this->db->query('SELECT * FROM amc_m_client WHERE status_client = 1 ORDER by name ASC');
	}

		public function get_data_user(){
		return $this->db->query('SELECT * FROM amc_m_user ');
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