<?php 

class t_work extends CI_Model{
	
	function get_data(){
		return $this->db->query('SELECT * FROM amc_t_work WHERE date = DATE_FORMAT(NOW(),"%Y-%m-%d")');
		
	}

	
	function get_data_by_date( $min = '', $max = ''){
		// $this->db->select('');
		$this->db->from('amc_t_work');
		
		if ($min <> '') {
            $this->db->where('date >= ', $min);
        }else{
        }

        if ($max <> '') {
            $this->db->where('date <= ', $max);
        }else{
        }
        $query = $this->db->get();

		$data = array();
		if($query !== FALSE && $query->num_rows() > 0){
		    foreach ($query->result() as $row) {
		        $data[] = $row;
		    }
		}

		return $data;

	}


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