<?php
	class Front_model extends CI_Model{


/*==========================================================================
Add data method 
*/
		public function student_add_model($table,$data){
			$this->db->insert($table,$data);
			return $this->db->insert_id();
		}

/*==========================================================================
Add data method 
*/
		public function add_data_model($table,$data){
			$this->db->insert($table,$data);
		}

	public function ProjectByListData($id){
	$this->db->select('*');
	$this->db->from('tb_edu_curri_menu');
	$this->db->where('id',$id);
	$result = $this->db->get();
	$result = $result->row();
	return $result;
	}
/****************************************************************************
*GET / DATA METHOD... 
*/
		public function Get_data_model($table){
			$this->db->select('*');
			$this->db->from($table);
			if($table=='tb_edu_notice'){ $this->db->order_by('id','DESC'); }	
			if($table=='tb_edu_sliders'){ $this->db->order_by('id','DESC'); }
			if($table=='tb_edu_event'){ $this->db->order_by('id','DESC'); }	
			if($table=='tb_edu_citizens'){ $this->db->order_by('id','DESC'); }			
			if($table=='tb_edu_sliders'){$this->db->where('status','1');}	
			if($table=='tb_edu_principal'){$this->db->where('status','1');}	
			if($table=='tb_edu_students'){ $this->db->order_by('id','DESC'); }			
			if($table=='tb_edu_students'){$this->db->where('status','1');}		
			$result = $this->db->get();
			$result = $result->result();
			return $result;
		}

/****************************************************************************
*GET / DATA METHOD... 
*/
		public function Get_data_model_principal($table){
			$this->db->select('*');
			$this->db->from($table);
			if($table=='tb_edu_faculty'){$this->db->where('principal','1');}	
			$result = $this->db->get();
			$result = $result->result();
			return $result;
		}
		
/****************************************************************************
*GET / DATA METHOD... 
*/
		public function Get_data_by_id_model($table,$data){
			//var_dump($data); die(); 
			$this->db->select('*');
			$this->db->from($table);
			$this->db->where($data['match_col'],$data['match_by']);
			$result = $this->db->get();
			$result = $result->row();
			return $result;
		}
		
/****************************************************************************
*GET / DATA METHOD... 
*/
		public function Get_data_model_byid($table,$data){
			//var_dump($data); die(); 
			$this->db->select('*');
			$this->db->from($table);
			if($table=='tb_edu_curriculum'){ $this->db->order_by('id','DESC'); }	
			$this->db->where($data['match_col'],$data['match_by']);
			$result = $this->db->get();
			$result = $result->result();
			return $result;
		}

	





}//end of model class.... 
?>