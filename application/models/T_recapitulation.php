<?php 

 class t_recapitulation extends CI_Model{



	public function get_data(){
		return $this->db->query('
						SELECT 								 
								rp.id,
								c.name,
								c.id as client_id,
								pic.pic,
								rp.no_order,
								rp.no_report,
								rp.contract_start_date,
								rp.contract_finish_date,
								cp.project_activity,
				
								rp.denda,
								rp.user_id,
								rp.upload,
								u.name as user_name,
								rp.percentage,
								p.name as product_name


        				FROM amc_t_client_po po 
        				LEFT JOIN amc_t_recapitulation_project rp on po.client_id = rp.client_id 
        				LEFT JOIN amc_t_client_process	cp on cp.client_id = po.client_id
        				LEFT JOIN amc_m_client c ON po.client_id = c.id 
        				LEFT JOIN amc_m_client_pic_contact pic ON pic.client_id = c.id 
        				LEFT JOIN amc_m_user u ON u.id = rp.user_id 
        				LEFT JOIN amc_m_products p ON p.id = c.product_id 
        				GROUP BY po.client_id		        		
		       ');
	}

	public function get_data_client(){
		return $this->db->query('SELECT * FROM amc_m_client WHERE status_client = 1 ORDER by name ASC');
	}

	public function get_data_user(){
		return $this->db->query('SELECT * FROM amc_m_user ');
	}


	public function get_data_products(){
		return $this->db->query('SELECT cp.id,
		 								cp.id_project,
		  								cp.client_id,
		   								cp.client_name,
		   								cp.project_id,
		   								p.name as product_name
							    FROM amc_m_client_project  cp
							    LEFT JOIN amc_m_products p
							    ON p.id = cp.project_id'
		);
	}


	public function get_data_recapitulation_project_output($id=''){
		$this->db->select('
							poo.id, 
							poo.recapitulation_id, 
							poo.output_pekerjaan
						  ');
		$this->db->from('amc_t_recapitulation_project_output poo');
		$this->db->join('amc_t_recapitulation_project po', 'poo.recapitulation_id = po.id', 'left');		
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get();
        return $query->result();
	}

	public function  get_data_recapitulation_project_termin($id=''){
		$this->db->select('
							pot.id, 
							pot.recapitulation_id, 
							pot.termin, 
							pot.percentage, 
							pot.nominal, 
							pot.information, 
							pot.status
						  ');
		$this->db->from('amc_t_recapitulation_project_termin pot');
		$this->db->join('amc_t_recapitulation_project po','pot.recapitulation_id = po.id', 'left');		
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get();
        return $query->result();
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