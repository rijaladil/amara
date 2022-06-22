<?php 

 
class m_data_user extends CI_Model{
	
	function get_data(){
		// return $this->db->get('amc_m_user');
		return $this->db->query('SELECT  
										u.id, 
										u.nip,
										u.name,
										u.email, 
										u.contact, 
										u.department, 
										u.user_level, 
										u.client_id,
										u.last_login,
										c.name as company 
								FROM `amc_m_user` u
								LEFT JOIN amc_m_client c
								ON u.client_id = c.id
								');}

	

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);

	}

 

	function get_data_edit($where,$table){		
		return $this->db->get_where($table,$where);

	}

 

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);

	}	

}

?>