<?php 

 class t_finance extends CI_Model{
	function get_data(){
		// return $this->db->get('amc_t_finance');
		return $this->db->query('SELECT  
										f.id, 
										c.name,
										f.client_id, 
										f.invoice_no, 
										f.price,
										f.date, 
										f.due_date, 
										f.date_confirmation, 
										f.info

								FROM amc_t_finance f
								LEFT JOIN amc_m_client c
								ON f.client_id = c.id
								');

		
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