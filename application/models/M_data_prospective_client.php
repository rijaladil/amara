<?php 

 class m_data_prospective_client extends CI_Model{

	public function get_data_prospec(){
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
       // $this->db->where('c.status_client', 0);
        $this->db->order_by('c.id', 'DESC');
        $query = $this->db->get();
        return $query->result();

	}

	public function get_data_sector(){
		$this->db->from('amc_m_sector');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();
	}

	public function get_data_products(){
		$this->db->from('amc_m_products');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();
	}

	public function get_data_tlp($id=''){

		$this->db->select('c.id as id,  c.name, t.client_name, t.tlp');
		$this->db->from('amc_m_client_tlp t');		
		$this->db->join('amc_m_client c', 't.client_name = c.name', 'left');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();

	}

	public function get_data_email($id=''){

		$this->db->select('c.id as id,  c.name, e.client_name, e.email');
		$this->db->from('amc_m_client_email e');		
		$this->db->join('amc_m_client c', 'e.client_name = c.name', 'left');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();

	}

		public function get_data_pic_contact($id=''){

		$this->db->select('c.id as id,  c.name, p.client_name, p.pic, p.pic_contact ,p.email');
		$this->db->from('amc_m_client_pic_contact p');		
		$this->db->join('amc_m_client c', 'p.client_name = c.name', 'left');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result();

	}

// mengambil data user sebagai marketing
	public function get_data_user(){ 
		$this->db->from('amc_m_user');
        $this->db->order_by('id', 'DESC');
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