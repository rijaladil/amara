<?php 

 class m_data_client_process extends CI_Model{
	
	public function get_data(){
			$this->db->select( '
							c.id,
							c.name,
							c.information,
		  					c.address,
		   					c.city_kabupaten,
		   	 				c.province,
		     				c.address2,
		     				c.city_kabupaten2,
		   	 				c.province2,
		      				c.contact,
		       				c.email,
		        			c.sector_id,
				 			c.product_id,
				  			c.status_client,
				   			c.id_user,
							p.name as product_name,
							s.name as sector_name
							');
		$this->db->from('amc_m_client c');
        $this->db->join('amc_m_products p', 'p.id = c.product_id', 'left');
        $this->db->join('amc_m_sector s', 's.id = c.sector_id', 'left');
        $this->db->where('c.status_client', 1);
        $this->db->order_by('c.id', 'DESC');
        $query = $this->db->get();
        return $query->result();

	}

	
	public function get_data_client_confimation($id=''){
 		
		$this->db->select('c.id as idc,
						   c.name,
						   cc.id,
						   cc.date,
						   cc.info ');
		$this->db->from('amc_t_client_confirmation cc');
		$this->db->join('amc_m_client c', 'cc.client_id = c.id', 'left');
		$this->db->order_by('id', 'DESC');
 		$query = $this->db->get();
        return $query->result();

	}

	public function get_data_client_penawaran($id=''){
 		
 		$this->db->select('c.id as idc,
						   c.name,
						   cp.id,
						   cp.no_penawaran,
						   cp.date,
						   cp.price,
						   cp.info');
 		$this->db->from('amc_t_client_penawaran cp');
		$this->db->join('amc_m_client c', 'cp.client_id = c.id', 'left');
		$this->db->order_by('id', 'DESC');
 		$query = $this->db->get();
        return $query->result();

	}

	public function get_data_client_po($id=''){
 		
		$this->db->select('c.id as idc,
						   c.name,
						   cpo.id,
						   cpo.no_po,
						   cpo.date,
						   cpo.price,
						   cpo.info');
 		$this->db->from('amc_t_client_po cpo');
		$this->db->join('amc_m_client c', 'cpo.client_id = c.id', 'left');
		$this->db->order_by('id', 'DESC');
 		$query = $this->db->get();
        return $query->result();

	}



	public function get_data_client(){
		return $this->db->query('SELECT * FROM amc_m_client WHERE status_client = 1'
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