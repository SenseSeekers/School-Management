<?php
	class User_model extends CI_Model{
/*===========================================================
| USER LOGIN APPROVALS
*/
	public function userLogin($data){
		$this->db->select('*');
		$this->db->from('tb_edu_user');
		$this->db->where('user_id',$data['user_id']);
		$this->db->where('password',md5($data['password']));
		$this->db->where('status','1');
		$qresult = $this->db->get(); 
		$has  = $qresult->num_rows(); 

		if($has === 1){
		$result = $qresult->row(); 
		return $result; 
		}
	}

	public function getUserByUserId($id){
		$this->db->select('*'); 
		$this->db->from('tb_edu_faculty'); 
		$this->db->where('user_profile_id',$id); 

		$result = $this->db->get(); 
		$result = $result->row(); 
		return $result; 
	}
}//end of model class.... 

?>