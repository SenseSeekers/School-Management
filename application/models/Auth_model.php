<?php
	class Auth_model extends CI_Model{

/*==========================================================================
Total Count   data method 
*/

	public function CountAll($table){
		$this->db->select(); 
		$this->db->from($table);
		$result = $this->db->get(); 
		$result = $result->num_rows();
		return $result; 
	}

	public function CountStudent($table){
		$this->db->select(); 
		$this->db->from($table);
		$this->db->where('status',1); 
		$result = $this->db->get(); 
		$result = $result->num_rows();
		return $result; 
	}

	public function Countmessage($table){
		$this->db->select(); 
		$this->db->from($table);
		$this->db->where('status',0); 
		$result = $this->db->get(); 
		$result = $result->num_rows();
		return $result; 
	}

/*==========================================================================
curriculam menu  data method 
*/
	public function getCarDetailsById($id){
		$this->db->select('*');
		$this->db->from('tb_edu_curri_menu'); 
		$this->db->where('id',$id); 

		$result = $this->db->get();
		$result = $result->row();
		return $result;
	}

/*==========================================================================
principal active  data method 
*/
	public function principal_model_base($table){
			$this->db->set('principal',0);
			$this->db->update($table);
	}
	public function principal_model_add($table,$data){
			$this->db->set('principal',$data['principal']);
			$this->db->where($data['match_col'],$data['match_by']);
			$this->db->update($table);
	}

/*==========================================================================
principal active  data method 
*/
	public function message_model_base($table){
			$this->db->set('status',1);
			$this->db->update($table);
	}
	public function message_model_add($table,$data){
			$this->db->set('status',$data['status']);
			$this->db->where($data['match_col'],$data['match_by']);
			$this->db->update($table);
	}

/*==========================================================================
Add data method 
*/
		public function write_data_model($table,$data){
			$this->db->insert($table,$data);
		}

/*==========================================================================
Add data method 
*/
		public function faculty_add_model($table,$data){
			$this->db->insert($table,$data);
			return $this->db->insert_id();
		}

/****************************************************************************
*REMOVE / GENERIC METHOD... 
*/	
		public function Trash_data_by_id_model($table,$data){
			$this->db->where($data['match_col'],$data['match_by']);
			$this->db->delete($table);
		}

/****************************************************************************
*GET / DATA METHOD... 
*/
		public function Get_data_model($table){
			$this->db->select('*');
			$this->db->from($table);
			if($table=='tb_edu_notice'){ $this->db->order_by('id','DESC'); }	
			if($table=='tb_edu_sliders'){ $this->db->order_by('id','DESC'); }	
			if($table=='tb_edu_curriculum'){ $this->db->order_by('id','DESC'); }
			if($table=='tb_edu_gallery'){ $this->db->order_by('id','DESC'); }	
			if($table=='tb_edu_students'){ $this->db->order_by('id','DESC'); }
			if($table=='tb_edu_faculty'){$this->db->where('principal','0');}
			//if($table=='tb_edu_message'){$this->db->where('status','0');}			
			$result = $this->db->get();
			$result = $result->result();
			return $result;
		}
/****************************************************************************
*GET Single data model/ DATA METHOD... 
*/
		public function Get_single_limited_data_model($Table){
			$this->db->select("*");
			$this->db->from($Table);
			$this->db->limit(1);
			$this->db->order_by('id',"DESC");
			$result = $this->db->get();
			$result = $result->row();			
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
*STATUS ACTIVE/INACTIVE MODEL METHOD... 
*/	
		public function Update_acitivity_model($table,$data){
			$this->db->set('status',$data['status']);
			$this->db->where($data['match_col'],$data['match_by']);
			$this->db->update($table);
		}


/*=========================================================================
| Site read data  method 
*/
		public function siteDataRead_model($sdata,$sTable){
			$this->db->set('id',$sdata['id']);
			$this->db->set('title',$sdata['title']);
			$this->db->set('name',$sdata['name']);
			$this->db->where('id',$sdata['id']); 
			$this->db->update($sTable); 
		}
		public function AddressDataRead_model($sadata,$saTable){
			$this->db->set('id',$sadata['id']);
			$this->db->set('map',$sadata['map']);
			$this->db->set('address',$sadata['address']);
			$this->db->where('id',$sadata['id']); 
			$this->db->update($saTable); 
		}

		public function contacrlinkDataRead_model($sadata,$saTable){
			$this->db->set('id',$sadata['id']);
			$this->db->set('email',$sadata['email']);
			$this->db->set('phone',$sadata['phone']);
			$this->db->set('hotline_phone',$sadata['hotline_phone']);
			$this->db->set('facebook',$sadata['facebook']);
			$this->db->set('linkedln',$sadata['linkedln']);
			$this->db->where('id',$sadata['id']); 
			$this->db->update($saTable); 
		}

		public function LogoDataRead_model($sldata,$usTable){
			$this->db->set('id',$sldata['id']);
			if(isset($sldata['logo'])){$this->db->set('logo',$sldata['logo']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($usTable); 
		}

		public function AboutDataRead_model($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			$this->db->set('about',$sldata['about']);
			if(isset($sldata['about_image'])){$this->db->set('about_image',$sldata['about_image']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}
		
		public function ProtfoliDataRead_model($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			$this->db->set('portfolio_title',$sldata['portfolio_title']);
			$this->db->set('portfolio_content',$sldata['portfolio_content']);
			if(isset($sldata['portfolio_background'])){$this->db->set('portfolio_background',$sldata['portfolio_background']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}
		public function ImpLinkDataEdit_model($mldata,$mTable){
			$this->db->set('id',$mldata['id']);
			$this->db->set('title',$mldata['title']);
			$this->db->set('link',$mldata['link']);
			$this->db->where('id',$mldata['id']); 
			$this->db->update($mTable); 
		}
/****************************************************************************
*Curriculam Menu  update function  MODEL METHOD... 
*/
		public function curriDataEdit_model($cldata,$cTable){
			$this->db->set('id',$cldata['id']);
			$this->db->set('name',$cldata['name']);
			$this->db->where('id',$cldata['id']); 
			$this->db->update($cTable); 
		}


/****************************************************************************
*Slider update function  MODEL METHOD... 
*/	

		public function SliderDataEdit_model($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			$this->db->set('title',$sldata['title']);
			if(isset($sldata['image'])){$this->db->set('image',$sldata['image']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}
		
/****************************************************************************
*Notice update function  MODEL METHOD... 
*/	

		public function NoticeDataUpdate_model($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			$this->db->set('published_date',$sldata['published_date']);
			$this->db->set('deadline_date',$sldata['deadline_date']);
			$this->db->set('title',$sldata['title']);
			$this->db->set('notice_tags',$sldata['notice_tags']);
			$this->db->set('notice_body',$sldata['notice_body']);
			if(isset($sldata['notice_file'])){$this->db->set('notice_file',$sldata['notice_file']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}

/****************************************************************************
*Event  update function  MODEL METHOD... 
*/	
		public function EventDataUpdate_model($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			$this->db->set('start_time',$sldata['start_time']);
			$this->db->set('end_time',$sldata['end_time']);
			$this->db->set('title',$sldata['title']);
			$this->db->set('venue',$sldata['venue']);
			$this->db->set('details',$sldata['details']);
			if(isset($sldata['image'])){$this->db->set('image',$sldata['image']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}

/****************************************************************************
*Citizen  update function  MODEL METHOD... 
*/	
		public function CitizenDataUpdate_model($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			$this->db->set('title',$sldata['title']);
			$this->db->set('content',$sldata['content']);
			if(isset($sldata['image'])){$this->db->set('image',$sldata['image']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}

/****************************************************************************
*Faculty  update function  MODEL METHOD... 
*/	
		public function FacultyDataUpdate_model($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			$this->db->set('user_profile_id',$sldata['user_profile_id']);
			$this->db->set('firstname',$sldata['firstname']);
			$this->db->set('lastname',$sldata['lastname']);
			$this->db->set('email',$sldata['email']);
			$this->db->set('department',$sldata['department']);
			$this->db->set('designation',$sldata['designation']);
			$this->db->set('educational_qualification',$sldata['educational_qualification']);
			$this->db->set('experiences',$sldata['experiences']);
			$this->db->set('hobby',$sldata['hobby']);
			$this->db->set('phone',$sldata['phone']);
			$this->db->set('about',$sldata['about']);
			$this->db->set('message',$sldata['message']);
			$this->db->set('facebook_link',$sldata['facebook_link']);
			if(isset($sldata['image'])){$this->db->set('image',$sldata['image']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}
/****************************************************************************
*Faculty  update function  MODEL METHOD... 
*/	
		public function StaffDataUpdate_model($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			$this->db->set('firstname',$sldata['firstname']);
			$this->db->set('lastname',$sldata['lastname']);
			$this->db->set('email',$sldata['email']);
			$this->db->set('branch',$sldata['branch']);
			$this->db->set('designation',$sldata['designation']);
			$this->db->set('educational_qualification',$sldata['educational_qualification']);
			$this->db->set('experiences',$sldata['experiences']);
			$this->db->set('hobby',$sldata['hobby']);
			$this->db->set('phone',$sldata['phone']);
			$this->db->set('about',$sldata['about']);
			$this->db->set('facebook_link',$sldata['facebook_link']);
			if(isset($sldata['image'])){$this->db->set('image',$sldata['image']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}

/****************************************************************************
*Department  update function  MODEL METHOD... 
*/	
		public function DpartmentDataUpdate_model($ddata,$dTable){
			$this->db->set('id',$ddata['id']);
			$this->db->set('title',$ddata['title']);
			$this->db->set('details',$ddata['details']);
			$this->db->set('about_course',$ddata['about_course']);
			$this->db->set('apply_process',$ddata['apply_process']);
			$this->db->set('curriculumn',$ddata['curriculumn']);
			$this->db->set('course_start',$ddata['course_start']);
			$this->db->set('course_duration',$ddata['course_duration']);
			$this->db->set('total_semester',$ddata['total_semester']);
			$this->db->set('class_duration',$ddata['class_duration']);
			$this->db->set('shift',$ddata['shift']);
			$this->db->set('no_of_seat',$ddata['no_of_seat']);
			$this->db->set('faculty_member',$ddata['faculty_member']);
			$this->db->set('success_level',$ddata['success_level']);
			if(isset($ddata['course_image'])){$this->db->set('course_image',$ddata['course_image']);}
			$this->db->where('id',$ddata['id']); 
			$this->db->update($dTable); 
		}

/****************************************************************************
*cover image function  MODEL METHOD... 
*/	
		public function siteCoverImg($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			if(isset($sldata['site_img'])){$this->db->set('site_img',$sldata['site_img']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}

		public function techCoverImg($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			if(isset($sldata['tech_img'])){$this->db->set('tech_img',$sldata['tech_img']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}

		public function teacherCoverImg($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			if(isset($sldata['teacher_img'])){$this->db->set('teacher_img',$sldata['teacher_img']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}

		public function stduentCoverImg($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			if(isset($sldata['student_img'])){$this->db->set('student_img',$sldata['student_img']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}

		public function noticeCoverImg($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			if(isset($sldata['notice_img'])){$this->db->set('notice_img',$sldata['notice_img']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}

		public function eventCoverImg($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			if(isset($sldata['event_img'])){$this->db->set('event_img',$sldata['event_img']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}

			public function curriCoverImg($sldata,$sTable){
			$this->db->set('id',$sldata['id']);
			if(isset($sldata['curri_img'])){$this->db->set('curri_img',$sldata['curri_img']);}
			$this->db->where('id',$sldata['id']); 
			$this->db->update($sTable); 
		}
}//end of model class.... 
