<?php 

 class m_data_vendor extends CI_Model{
	public function get_data(){
		// return $this->db->get('amc_m_vendor');
		return $this->db->query('select * from  amc_m_vendor ORDER BY validity_period DESC');
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