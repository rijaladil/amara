<?php 

 class m_data_client extends CI_Model{
	public function get_data(){
		$this->db->select( '
							c.id,
							c.name,
							c.information,
		  					c.address,
		   					c.city_kabupaten,
		   	 				c.province,
		     				c.address2,
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
        $this->db->order_by('c.id', 'DESC');
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