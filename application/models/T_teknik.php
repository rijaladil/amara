<?php 

 class t_teknik extends CI_Model{
	function get_data(){
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

public function get_data_by_date($min = '', $max = ''){
		$this->db->select('
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
			
            				');
        $this->db->from('amc_t_teknis_progress tk');
        $this->db->join('amc_t_recapitulation_project rp', 'tk.recapitulation_id = rp.id', 'left');
        $this->db->join('amc_m_client c', 'c.id = rp.client_id', 'left');
        $this->db->join('amc_m_user u', 'u.id = tk.user_id', 'left');
        $this->db->join('amc_m_client_pic_contact pic', 'c.name = pic.client_name ', 'left');
        $this->db->join('amc_m_products p', 'c.product_id = p.id', 'left');

        if ($min <> '') {
            $this->db->where('tk.start_date >= ', $min);
        }else{
            $this->db->where('tk.start_date = ', date('Y-m-d'));
        }

        if ($max <> '') {
            $this->db->where('tk.start_date <= ', $max);
        }else{
            $this->db->where('tk.start_date = ', date('Y-m-d'));
        }
        $this->db->order_by('rp.project_activity','DESC');
        $query = $this->db->get();
        // return $query->result();

		$data = array();
		if($query !== FALSE && $query->num_rows() > 0){
		    foreach ($query->result() as $row) {
		        $data[] = $row;
		    }
		}

		return $data;
	
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