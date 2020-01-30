<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */ 
	public function __construct(){
		parent::__construct(); 
		/*----------------------------------*/
		$this->load->model("Front_model");
		
		$this->load->helper(array('form', 'url','date','text'));			
		/*----------------------------------*/
		/*
		$login_user = $this->session->userdata('user_id'); 
		if(isset($login_user)){
			$login_user; 
		}else{
			
			redirect('User/'); 
		} */
	}

	public function index()
	{//echo $this->session->userdata('user_id'); 
			$this->Home(); 
		
	}


////HOME PAGE CI........
	public function Home()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Principal Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'GalleryDataList' => $this->Front_model->Get_data_model('tb_edu_gallery'),//Gallery Link ALL 
			'FacultyDataList' => $this->Front_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
			'SliderDataList' => $this->Front_model->Get_data_model('tb_edu_sliders'),//Slider ALL
			'EventDataList' => $this->Front_model->Get_data_model('tb_edu_event'),//Slider ALL 
		);

		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'slider' => $this->load->view('front/Slider.php',$loadData),
			'content' => $this->load->view('front/Homepage.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////ABOUT PAGE CI........
	public function About()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'FacultyDataList' => $this->Front_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/About.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////HISTORY PAGE CI........
	public function History()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Brief_history.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////COMPUTER TECHNOLOGY  PAGE CI........
	public function Course_Details($id)
	{
		$cdata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);		

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages  
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL 
			'CourseDataById' => $this->Front_model->Get_data_by_id_model('tb_edu_course',$cdata),//Course by ID
			'FacultyDataList' => $this->Front_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Course_details.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}


	////COMPUTER TECHNOLOGY  PAGE CI........
	public function Course()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL 
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Course.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}



	////TEACHER DATABASE  PAGE CI........
	public function Teacher()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'FacultyDataList' => $this->Front_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Faculty.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////TEACHER DATABASE  PAGE CI........
	public function Teacher_Details($id)
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$tdata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);

		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'TeacherData' => $this->Front_model->Get_data_by_id_model('tb_edu_faculty',$tdata),//Teacher Data details 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Faculty_details.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}



	////PRINCIPAL MESSAGE   PAGE CI........
	public function Principal_sMs($id)
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$mdata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 		
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
			'PrincipalData' => $this->Front_model->Get_data_by_id_model('tb_edu_faculty',$mdata),//Principal details
			'FacultyDataList' => $this->Front_model->Get_data_model('tb_edu_faculty'),//Faculty ALL  
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Principal_message.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////STUDENT DATABASE  PAGE CI........
	public function Student()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'StudentDataList' => $this->Front_model->Get_data_model('tb_edu_students'),//Studern  ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Student.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////STUDENT SIGNUP   PAGE CI........
	public function Student_Reg()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption 
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/StudentReg.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	
	////STUDENT SIGNUP   PAGE CI........
	public function StudentDetails($id)
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$sdata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'StudentData' => $this->Front_model->Get_data_by_id_model('tb_edu_students',$sdata),//Studern  ALL
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Student_details.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////STAFF DATABASE  PAGE CI........
	public function Staff()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
			'FacultyDataList' => $this->Front_model->Get_data_model('tb_edu_faculty'),//Faculty ALL  
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Staff.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////CITIZEN_CHARTER   PAGE CI........
	public function Citizen_charter()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'CitizenDataList' => $this->Front_model->Get_data_model('tb_edu_citizens'),//citizen ALL
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Citizen_charter.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////CITIZEN_CHARTER   PAGE CI........
	public function Citizen_blog($id)
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$cdata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'CitizenDataList' => $this->Front_model->Get_data_model('tb_edu_citizens'),//citizen ALL
			'CitizenData' => $this->Front_model->Get_data_by_id_model('tb_edu_citizens',$cdata),//citizen by Id
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Citizen_blog.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

////Admission Info    PAGE CI........
public function Admission_Info()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'CitizenDataList' => $this->Front_model->Get_data_model('tb_edu_citizens'),//citizen ALL
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Admission_info.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

////Admission Info    PAGE CI........
public function A_Calendar()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'CitizenDataList' => $this->Front_model->Get_data_model('tb_edu_citizens'),//citizen ALL
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Calendar.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////CCONTACT   PAGE CI........
	public function Contact()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Contact.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////NOTICE   PAGE CI........
	public function Notice()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),
		);
		
		$data = array(

			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Notice.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////NOTICE   DETAILS PAGE CI........
	public function Notice_Details($id)
	{
		$ddata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);		

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL 
			'NoticeDataById' => $this->Front_model->Get_data_by_id_model('tb_edu_notice',$ddata),//NOTICE by ID
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Notice_details.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////PHOTO GALLERY   PAGE CI........
	public function Photo_Gallery()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'GalleryDataList' => $this->Front_model->Get_data_model('tb_edu_gallery'),//Gallery Link ALL 
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'footer' => $this->load->view('front/Photo_gallery.php',$loadData),
			'content' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////video Gallery   PAGE CI........
	public function Video_Gallery()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'footer' => $this->load->view('front/Video_gallery.php',$loadData),
			'content' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	////Evemt   PAGE CI ........
	public function Events()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL
			'EventDataList' => $this->Front_model->Get_data_model('tb_edu_event'),//Slider ALL 

		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'footer' => $this->load->view('front/Events.php',$loadData),
			'content' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

////Event details PAGE CI ........
	public function Event_details($id)
	{
		
		$edata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);		

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		
		$loadData = array(
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL 
			'EventDataList' => $this->Front_model->Get_data_model('tb_edu_event'),//NOTICE ALL 
			'EventDataById' => $this->Front_model->Get_data_by_id_model('tb_edu_event',$edata),//NOTICE by ID
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'footer' => $this->load->view('front/Event_details.php',$loadData),
			'content' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

////Curriculum   PAGE CI ........
	public function Curriculum($id)
	{
		
		$edata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);

		$cdata = array(
			'match_col' => 'curri_id',
			'match_by'  => $id
		);			

		$cmdata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);			

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cimgdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		
		$loadData = array(
			'CurriDataListId' => $this->Front_model->Get_data_model_byid('tb_edu_curriculum',$cdata),//Curriculum ALL
			'CurriDataList' => $this->Front_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Front_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimgData' => $this->Front_model->Get_data_by_id_model('tb_edu_coverimg',$cimgdata),//Cover Image
			'PrincipalDataList' => $this->Front_model->Get_data_model_principal('tb_edu_faculty'),//Messages 
			'curriData' => $this->Front_model->Get_data_by_id_model('tb_edu_curri_menu',$cmdata),//siteoption
			'ImportantDataLink' => $this->Front_model->Get_data_model('tb_edu_link'),//important Link ALL 
			'NoticeDataList' => $this->Front_model->Get_data_model('tb_edu_notice'),//NOTICE ALL 
			'CourseDataList' => $this->Front_model->Get_data_model('tb_edu_course'),//COURSE ALL 
			'EventDataList' => $this->Front_model->Get_data_model('tb_edu_event'),//Evemt ALL 
			'EventDataById' => $this->Front_model->Get_data_by_id_model('tb_edu_event',$edata),//NOTICE by ID
		);
		
		$data = array(
			'header' => $this->load->view('front/Header.php',$loadData),
			'content' => $this->load->view('front/Curriculum.php',$loadData),
			'footer' => $this->load->view('front/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

	public function StudentReg_Add(){
	/*-----------------------*/
		$sdata=array();
		$StudentTable = 'tb_edu_students';
		$userTable = 'tb_edu_user'; 
		/*-----------------------*/
		$user_profile_id = $this->input->post('user_profile_id');
		$type = $this->input->post('type');
		$board_roll = $this->input->post('board_roll');
		$trade= $this->input->post('trade');
		$session = $this->input->post('session');
		$shift = $this->input->post('shift');
		$board_reg = $this->input->post('board_reg');
		$full_name_eng = $this->input->post('full_name_eng');
		$full_name_bang = $this->input->post('full_name_bang');
		$religion= $this->input->post('religion');
		$father_name = $this->input->post('father_name');
		$mother_name= $this->input->post('mother_name');
		$dob = $this->input->post('dob');
		$gender= $this->input->post('gender');
		$blood_group= $this->input->post('blood_group');
		$student_phone= $this->input->post('student_phone');
		$student_email = $this->input->post('student_email');
		$present_address = $this->input->post('present_address');
		$permanent_address= $this->input->post('permanent_address');
		$guardian_name = $this->input->post('guardian_name');
		$guardian_relation = $this->input->post('guardian_relation');
		$guardian_phone = $this->input->post('guardian_phone');
		$guardian_nid= $this->input->post('guardian_nid');
		$guardian_address = $this->input->post('guardian_address');
		/*-----------------------*/

		if(!empty($board_roll)){
			$pass = 'GAI'.rand(10,1000); 

				$new_name                   	= $_FILES["image"]['name'];
        		$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/student/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
                $config['max_size']             = 100000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                $s_image= $new_name;


                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('upload_form', $error);
                }
                else
                { 
                 	$data = array('upload_data' => $this->upload->data());
                }

			//email sending option...
			$u_data = array(
				'user_id' => $board_roll, 
				'password' => md5($pass), 
				'user_type' => $type
			);  

			$lastid = $this->Front_model->student_add_model($userTable,$u_data);
			$s_data = array(
				'user_profile_id' => $lastid,
				'board_roll' => $board_roll,
				'type' => $type,
				'trade' => $trade,
				'shift' => $shift,
				'session' => $session,
				'board_roll' => $board_roll,
				'board_reg' => $board_reg,
				'full_name_eng' => $full_name_eng,
				'full_name_bang' => $full_name_bang,
				'religion' => $religion,
				'father_name' => $father_name,
				'mother_name' => $mother_name,
				'dob' => $dob,
				'gender' => $gender,
				'blood_group' => $blood_group,
				'student_phone' => $student_phone,
				'student_email' => $student_email,
				'present_address' => $present_address,
				'permanent_address' => $permanent_address,
				'guardian_name' => $guardian_name,
				'guardian_relation' => $guardian_relation,
				'guardian_phone' => $guardian_phone,
				'guardian_nid' => $guardian_nid,
				'guardian_address' => $guardian_address,
				'image' => $s_image,
			);
			//var_dump($s_data);die();
			$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Check Your Mail  ! Successfully YOur Registation !</strong> :)</div>';
			$this->session->set_flashdata($Sdata);
			$this->Front_model->add_data_model($StudentTable,$s_data);
		}
		redirect('Front/Student_Reg/'); 
	}


}
