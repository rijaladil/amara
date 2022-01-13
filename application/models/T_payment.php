<?php 

 class t_payment extends CI_Model{
	function get_data(){
		return $this->db->query('SELECT  
										p.id, 
										c.name,
										p.client_id, 
										p.tahap, 
										p.percentage, 
										p.price, 
										p.info, 
										p.status

								FROM amc_t_adm_payment p
								LEFT JOIN amc_m_client c
								ON p.client_id = c.id
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