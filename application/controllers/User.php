<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
		$this->load->model("User_model");
		$this->load->model("Auth_model");
		$this->load->helper(array('form', 'url'));
		/*----------------------------------*/
	}
	public function index()
	{
		$data = array(); 
		$data['Login'] = $this->load->view('Auth/Login.php',$data); 
		/*-------------------------------------------------*/
		$this->load->view('index',$data); 
	}


/*===========================================================
| Login from option 
*/
	public function LoginFrom(){
		$data = array(); 
		/*---------------------------------------------------------*/
		$data['user_id'] = $this->input->post('user_id'); 
		$data['password'] = $this->input->post('password'); 
		/*---------------------------------------------------------*/

		$user_id = $data['user_id']; 
		$password = $data['password'];

		if(empty($user_id) OR empty($password)){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;">Login Failed !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('User',$sdata); 
		}else{
			$sdata = array();
			$check = $this->User_model->userLogin($data);
			if($check){
				$sdata = array();  
				$sdata['user_id'] = $check->id; 
				$sdata['user_type'] = $check->user_type;
				$sdata['userlogin'] = TRUE; 
				$this->session->set_userdata($sdata);//set as session...
			if($check->user_type=='Student'){

				redirect('Front/StudetnProfile',$sdata);

			}else{

				redirect('Auth',$sdata);

			}			
			
			}else{
				$sdata = array();
				$sdata['msg'] = '<span style="color:red;">Invalid Username or Password !</span>'; 
				$this->session->set_flashdata($sdata);
				redirect('User',$sdata); 
			}
		}
	}//login method end..

	public function Logout(){
		$this->session->unset_userdata($user_id); 
		$this->session->unset_userdata($password);
		$this->session->unset_userdata('userlogin',FALSE);

		$this->session->sess_destroy(); 
		redirect('User',$data); 
	}
//All user method optino  -------------------------
	public function Alluser(){
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'Dashboard',
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'useralldata' => $this->User_model->Get_data_model('tb_edu_user'),//Improtant Link ALL
		);

		$id = $this->session->userdata('user_id'); 
		$loadData['userData'] = $this->User_model->getUserByUserId($id); 

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_user.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}
//All Student user method optino  -------------------------
	public function AllStudentuser(){
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'Dashboard',
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'useralldata' => $this->User_model->Get_data_model('tb_edu_user'),//Improtant Link ALL
		);

		$id = $this->session->userdata('user_id'); 
		$loadData['userData'] = $this->User_model->getUserByUserId($id); 

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/AllStudentuser.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//All Student user method optino  -------------------------
	public function AllFacultyuser(){
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'Dashboard',
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'useralldata' => $this->User_model->Get_data_model('tb_edu_user'),//Improtant Link ALL
		);

		$id = $this->session->userdata('user_id'); 
		$loadData['userData'] = $this->User_model->getUserByUserId($id); 

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/AllFacultyuser.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

/*==========================================================
|User Active method 
*/
	public function userActive($id){  	
		$table ='tb_edu_user';
		/*----------------------------------------------------------*/
		$data = array();
		$data['match_col'] = 'id';
		$data['match_by'] = $id; 
		$data['status'] = 1;
		$this->User_model->Update_acitivity_model($table,$data);
		redirect('User/Alluser/');
	}

/*==========================================================
|User InActive method 
*/
	public function userInActive($id){ 
		$table ='tb_edu_user';
		/*----------------------------------------------------------*/
		$data = array();
		$data['match_col'] = 'id';
		$data['match_by'] = $id; 
		$data['status'] = 0;
		$this->User_model->Update_acitivity_model($table,$data);
		redirect('User/Alluser/');
	}


/*==========================================================
|User Delete method option 
*/
	public function userDelete($id){ 
		$table ='tb_edu_user';
		/*----------------------------------------------------------*/
		$data = array();
		$data['match_col'] = 'id';
		$data['match_by'] = $id; 
		$this->User_model->Trash_data_by_id_model($table,$data);
		redirect('User/Alluser/');
	}

}
