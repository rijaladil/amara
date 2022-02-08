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

				   			cp.project_activity,
				   			cp.upload,

							p.name as product_name,
							s.name as sector_name,

							pen.no_penawaran,
							pen.date as date_penawaran,
							pen.price as price_penawaran,
							pen.info as info_penawaran,

							po.no_po,
							po.date as date_po,
							po.price as price_po,
							po.info as info_po,
							po.upload  as po_upload,

				  			con.date as date_confirmation,
							con.info as info_confirmation

							');
		$this->db->from('amc_m_client c');
		$this->db->join('amc_t_client_process cp','c.id = cp.client_id ','left');
        $this->db->join('amc_m_products p', 'p.id = c.product_id', 'left');
        $this->db->join('amc_m_sector s', 's.id = c.sector_id', 'left');
      
        $this->db->join('amc_t_client_penawaran pen' , 'c.id = pen.client_id' , 'left');
        $this->db->join('amc_t_client_confirmation con' , 'c.id = con.client_id' , 'left');
        $this->db->join('amc_t_client_po po','c.id = po.client_id ','left');
        $this->db->where('c.status_client', 1);
        $this->db->order_by('c.id', 'DESC');
        $this->db->group_by('c.id');
        $query = $this->db->get();
        return $query->result();

	}


	public function get_datatable(){
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

				   			cp.project_activity,
				   			cp.upload,

							p.name as product_name,
							s.name as sector_name,

							max(pen.no_penawaran) as no_penawaran,
							max(pen.date) as date_penawaran,
							max(pen.price) as price_penawaran,
							max(pen.info) as info_penawaran,

							max(po.no_po) as no_po,
							max(po.date) as date_po,
							max(po.price) as price_po,
							max(po.info) as info_po,
							max(po.upload)  as po_upload,

				  			max(con.date) as date_confirmation,
							max(con.info) as info_confirmation

							');
		$this->db->from('amc_m_client c');
		$this->db->join('amc_t_client_process cp','c.id = cp.client_id ','left');
        $this->db->join('amc_m_products p', 'p.id = c.product_id', 'left');
        $this->db->join('amc_m_sector s', 's.id = c.sector_id', 'left');
      
        $this->db->join('amc_t_client_penawaran pen' , 'c.id = pen.client_id' , 'left');
        $this->db->join('amc_t_client_confirmation con' , 'c.id = con.client_id' , 'left');
        $this->db->join('amc_t_client_po po','c.id = po.client_id ','left');
        $this->db->where('c.status_client', 1);
        $this->db->order_by('c.id', 'DESC');
        $this->db->group_by('c.id');
        $query = $this->db->get();
        return $query->result();

	}


	public function get_data_client_penawaran($id=''){
 		
 		$this->db->select('c.id as idc,
						   c.name,
						   cp.id,
						   cp.client_id,
						   cp.id as id_penawaran,
						   cp.no_penawaran,
						   cp.date as date_penawaran,
						   cp.price as bid_price,
						   cp.info as info_penawaran');
 		$this->db->from('amc_t_client_penawaran cp');
		$this->db->join('amc_m_client c', 'cp.client_id = c.id', 'left');
		$this->db->order_by('cp.id', 'ASC');
 		$query = $this->db->get();
        return $query->result();

	}
	
	public function get_data_client_confirmation($id=''){
 		
		$this->db->select('c.id as idc,
						   c.name,
						   cc.id,
						   cc.client_id,
						   cc.id as id_confirmation,
						   cc.date as date_confirmation,
						   cc.info as info_confirmation ');
		$this->db->from('amc_t_client_confirmation cc');
		$this->db->join('amc_m_client c', 'cc.client_id = c.id', 'left');
		$this->db->order_by('cc.id', 'ASC');
 		$query = $this->db->get();
        return $query->result();

	}



	public function get_data_client_po($id=''){
 		
		$this->db->select('c.id as idc,
						   c.name,
						   po.id,
						   po.client_id,
						   po.id as id_po,
						   po.no_po,
						   po.date as date_po,
						   po.price,
						   po.info as info_po');
 		$this->db->from('amc_t_client_po po');
		$this->db->join('amc_m_client c', 'po.client_id = c.id', 'left');
		$this->db->order_by('po.id', 'ASC');
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