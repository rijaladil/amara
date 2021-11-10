<?php 

 class t_teknik extends CI_Model{
	function get_data(){
		// return $this->db->get('amc_m_price');
		return $this->db->query('SELECT 
			tk.id,
			c.name,
			rp.id as recapitulation_id,
			rp.project_activity,
			pic.pic as pemrakarsa,
			p.name as document_product,			
			tk.start_date,
			tk.finish_date,
			tk.planing_this_week,
			tk.realization,
			tk.problem,
			tk.solution,
			tk.planing_next_week,
			u.name as user,
			u.id as user_id
				FROM amc_t_teknis_progress tk

 			LEFT JOIN amc_t_recapitulation_project rp
            ON tk.recapitulation_id = rp.id

            LEFT JOIN amc_m_client c
            ON c.id = rp.client_id

			LEFT JOIN amc_m_user u			
            ON u.id = tk.user_id
                    
            LEFT JOIN amc_m_client_pic_contact pic
            ON c.name = pic.client_name 

            LEFT JOIN amc_m_products p
            ON c.product_id = p.id

			-- WHERE tk.id in (SELECT max(id) from amc_t_teknis_progress GROUP BY client_id)
			ORDER by rp.project_activity

			');
		
	}



	function get_data_client(){
		// return $this->db->get('amc_m_price');
		return $this->db->query('SELECT * FROM `amc_m_client` WHERE status_client = 1 ');
		
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