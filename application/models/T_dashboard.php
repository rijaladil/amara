<?php 

 class t_dashboard extends CI_Model{
	public function get_data_client_all(){
		return $this->db->query('
			select count(*) as client_all from amc_m_client
		');
	}

	public function get_data_client_prospective(){
		return $this->db->query('
			select count(*) as client_prospective from amc_m_client where status_client = 0
		');
	}

	public function get_data_client_process(){
		return $this->db->query('
			select count(*) as client_process from amc_m_client where status_client = 1
		');
	}

	public function get_data_client_closing(){
		return $this->db->query('
			select count(*) as client_closing from amc_m_client where status_client = 2
		');
	}

	public function get_data_project(){
		return $this->db->query('
			select count(*) as project from amc_m_project
		');
	}

}

?>