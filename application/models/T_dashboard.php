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

	public function get_score_working_log(){
			
		return $this->db->query('
								SELECT 
										u.name

										,SUM(IF(DATE_FORMAT(w.date, "%d") = "01", 1, NULL )) AS "tgl1" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "02", 1,  NULL )) AS "tgl2" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "03", 1,  NULL )) AS "tgl3" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "04", 1,  NULL )) AS "tgl4" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "05", 1,  NULL )) AS "tgl5" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "06", 1,  NULL )) AS "tgl6" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "07", 1,  NULL )) AS "tgl7" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "08", 1,  NULL )) AS "tgl8" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "09", 1,  NULL )) AS "tgl9" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "10", 1,  NULL )) AS "tgl10" 


										,SUM(IF(DATE_FORMAT(w.date, "%d") = "11", 1,  NULL )) AS "tgl11" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "12", 1,  NULL )) AS "tgl12" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "13", 1,  NULL )) AS "tgl13" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "14", 1,  NULL )) AS "tgl14" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "15", 1,  NULL )) AS "tgl15" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "16", 1,  NULL )) AS "tgl16" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "17", 1,  NULL )) AS "tgl17" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "18", 1,  NULL )) AS "tgl18" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "19", 1,  NULL )) AS "tgl19" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "20", 1,  NULL )) AS "tgl20" 

										,SUM(IF(DATE_FORMAT(w.date, "%d") = "21", 1,  NULL )) AS "tgl21" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "22", 1,  NULL )) AS "tgl22" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "23", 1,  NULL )) AS "tgl23" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "24", 1,  NULL )) AS "tgl24" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "25", 1,  NULL )) AS "tgl25" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "26", 1,  NULL )) AS "tgl26" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "27", 1,  NULL )) AS "tgl27" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "28", 1,  NULL )) AS "tgl28" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "29", 1,  NULL )) AS "tgl29" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "30", 1,  NULL )) AS "tgl30" 
										,SUM(IF(DATE_FORMAT(w.date, "%d") = "31", 1,  NULL )) AS "tgl31" 

									FROM amc_t_work w
									LEFT JOIN amc_m_user u
									ON w.id_user = u.id

									WHERE date_format(w.date, "%Y-%m") = date_format(now(), "%Y-%m")
									GROUP BY u.id
								');
	}

}

?>