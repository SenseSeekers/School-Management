<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->load->model("Auth_model");
		$this->load->model("User_model");
		$this->load->helper(array('form', 'url','date','text'));	

		$login_user = $this->session->userdata('user_id'); 
		if(isset($login_user)){
			$login_user; 
		}else{
			redirect('User/'); 
		} 	

	}

	public function index()
	{
		//echo $this->session->userdata('user_id'); 
		$types = $this->session->userdata('user_type'); 
		 
		 if($types == 'DepartmentalHead'){
		 	$this->Dashboard(); 
		 }else{
			$this->Dashboard();  	
		 }
		
	}

////HOME PAGE CI.............................
	public function Dashboard()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'Dashboard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'TotalStudent' => $this->Auth_model->CountStudent('tb_edu_students'),//total student
			'Totalcourse' => $this->Auth_model->CountAll('tb_edu_course'),//total student
			'TotalMessage' => $this->Auth_model->Countmessage('tb_edu_message'),//total student
		);

		$id = $this->session->userdata('user_id'); 
		$loadData['userData'] = $this->User_model->getUserByUserId($id); 

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Homepage.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

////Message PAGE CI.............................
	public function Message()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'Message',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'TotalMessage' => $this->Auth_model->Countmessage('tb_edu_message'),//total student
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Message.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}
////Message PAGE CI.............................
	public function MsgReply()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'Message',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'TotalMessage' => $this->Auth_model->Countmessage('tb_edu_message'),//total student
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/MsgReply.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}
//Site setting PAGE CI......................
	public function SiteSetting()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'SiteSetting',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$id = $this->session->userdata('user_id'); 
		$loadData['userData'] = $this->User_model->getUserByUserId($id); 

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Site_setting.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Site setting About PAGE CI.............
	public function About()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'SiteSetting',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$id = $this->session->userdata('user_id'); 
		$loadData['userData'] = $this->User_model->getUserByUserId($id); 
		
		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/About.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}
//Site portfolio PAGE CI................
	public function Portfolio()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'SiteSetting',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);
		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Portfolio.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Site setting Important Link PAGE CI......................
	public function ImportantLink()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'SiteSetting',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'LinkDataList' => $this->Auth_model->Get_data_model('tb_edu_link'),//Improtant Link ALL
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);
		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Imp_link.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Site setting Cover Image;  PAGE CI......................
	public function CoverImage()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$cpdata = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'SiteSetting',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'LinkDataList' => $this->Auth_model->Get_data_model('tb_edu_link'),//Improtant Link ALL
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'coverimageData' => $this->Auth_model->Get_data_by_id_model('tb_edu_coverimg',$cpdata),//siteoption
		);
		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Cover_image.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}
//Site setting Important Link PAGE CI......................
	public function ImportantLinkEdit($id)
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$fData = array(
			'match_col' => 'id',
			'match_by'  => $id
		);		
		$loadData = array(
			'active_menu' => 'SiteSetting',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'LinkDataList' => $this->Auth_model->Get_data_model('tb_edu_link'),//Improtant Link ALL
			'LinkDataById' => $this->Auth_model->Get_data_by_id_model('tb_edu_link',$fData),//data by id
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);
		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Imp_linkEdit.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}	
/*=======================================================================
Academic Page CI
*/

//Curriculum  Menu Page Ci..........................
	public function CurriculumMenu()
	{ 
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'CurriculumMenu',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'CurriDataList' => $this->Auth_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Curri_menu.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Curriculum  uddate Page Ci..........................
public function CurriculumUpdate($id)
	{ 
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$cdata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);		

		$loadData = array(
			'active_menu' => 'CurriculumMenu',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'CurriDataList' => $this->Auth_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'curridata' => $this->Auth_model->Get_data_by_id_model('tb_edu_curri_menu',$cdata),//data by id
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Curri_menu_edit.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Curriculum Add  Page Ci..........................
	public function CurriAdd()
	{ 
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'CurriculumMenu',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),
			'CurriDataList' => $this->Auth_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'CurriculumDataList' => $this->Auth_model->Get_data_model('tb_edu_curriculum'),//Curriculum ALL
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Add_curri.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Curriculum Update  Page Ci..........................
	public function CurriUpdate()
	{ 
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'CurriculumMenu',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'CurriDataList' => $this->Auth_model->Get_data_model('tb_edu_curri_menu'),//Curri Menu ALL
			'CurriculumDataList' => $this->Auth_model->Get_data_model('tb_edu_curriculum'),//Curriculum ALL
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Edit_curri.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}
	
//Notice Add PAGE CI......portfolio........
	public function NoticeAdd()
	{	
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'NoticeBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Add_notice.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//AllNotice  PAGE CI......................
	public function AllNotice()
	{	
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'NoticeBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'NoticeDataList' => $this->Auth_model->Get_data_model('tb_edu_notice'),//NOTICE ALL

			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_Notice.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Update Notice  PAGE CI......................
	public function UpdateNotice($id)
	{	
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$nData = array(
			'match_col' => 'id',
			'match_by'  => $id
		);	

		$loadData = array(
			'active_menu' => 'NoticeBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'NoticeData' => $this->Auth_model->Get_data_by_id_model('tb_edu_notice',$nData),//Update notice 
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Edit_Notice.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//EventAdd PAGE CI.....................
	public function EventAdds()
	{	
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'EventBord',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Add_event.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Allevent PAGE CI......................
	public function Allevent()
	{	
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'EventBord',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'EventDataList' => $this->Auth_model->Get_data_model('tb_edu_event'),//Event ALL
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_event.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Update event PAGE CI......................
	public function UpdateEvent($id)
	{	
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$eData = array(
			'match_col' => 'id',
			'match_by'  => $id
		);	

		$loadData = array(
			'active_menu' => 'EventBord',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'EventData' => $this->Auth_model->Get_data_by_id_model('tb_edu_event',$eData),//Update notice 
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Edit_event.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Add Faculty  PAGE CI.................
	public function UpdateFaculty($id)
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$eData = array(
			'match_col' => 'id',
			'match_by'  => $id
		);	

		$loadData = array(
			'active_menu' => 'Addprofessor',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'FacultyData' => $this->Auth_model->Get_data_by_id_model('tb_edu_faculty',$eData),//Update notice
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption 
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Edit_Faculty.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Add Faculty  PAGE CI.................
	public function AddFaculty()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'Addprofessor',
			'database_load_data1' => 'load from database',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'departments' => $this->Auth_model->Get_data_model('tb_edu_course'),
			'userId' => $this->Auth_model->Get_single_limited_data_model('tb_edu_user'),
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Add_Faculty.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//All Faculty PAGE CI...................
	public function AllFaculty(){

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'Allprofessor',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'FacultyDataList' => $this->Auth_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
			'PrincipalDataList' => $this->Auth_model->Get_data_model_principal('tb_edu_faculty'),//Principal Messages
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_Faculty.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//All Faculty PAGE CI...................
	public function Allprincipal(){

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'Allprofessor',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'FacultyDataList' => $this->Auth_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
			'PrincipalDataList' => $this->Auth_model->Get_data_model_principal('tb_edu_faculty'),//Principal Messages
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_principal.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//All Faculty PAGE CI...................
	public function AllDepartmenthead(){

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'Allprofessor',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'FacultyDataList' => $this->Auth_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
			'PrincipalDataList' => $this->Auth_model->Get_data_model_principal('tb_edu_faculty'),//Principal Messages
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_Departmenthead.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//All Faculty PAGE CI...................
	public function AllInstructor(){

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'Allprofessor',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'FacultyDataList' => $this->Auth_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
			'PrincipalDataList' => $this->Auth_model->Get_data_model_principal('tb_edu_faculty'),//Principal Messages
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_Instructor.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//All Faculty PAGE CI...................
	public function AllDemonstrator(){

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'Allprofessor',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'FacultyDataList' => $this->Auth_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
			'PrincipalDataList' => $this->Auth_model->Get_data_model_principal('tb_edu_faculty'),//Principal Messages
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_Demonstrator.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//All Faculty PAGE CI...................
	public function AllManagement(){

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'Allprofessor',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'FacultyDataList' => $this->Auth_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
			'PrincipalDataList' => $this->Auth_model->Get_data_model_principal('tb_edu_faculty'),//Principal Messages
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_Management.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//All Faculty PAGE CI...................
	public function Alladministrator(){

		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'Allprofessor',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'FacultyDataList' => $this->Auth_model->Get_data_model('tb_edu_faculty'),//Faculty ALL 
			'PrincipalDataList' => $this->Auth_model->Get_data_model_principal('tb_edu_faculty'),//Principal Messages
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_Administrator.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}
//Details  Faculty PAGE CI......................
	public function DetailsFaculty($id)
	{	
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$eData = array(
			'match_col' => 'id',
			'match_by'  => $id
		);	

		$loadData = array(
			'active_menu' => 'Allprofessor',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'FacultyData' => $this->Auth_model->Get_data_by_id_model('tb_edu_faculty',$eData),//view faculty
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption 
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Details_facultyByid.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Details  Faculty PAGE CI......................
	public function DetailsFacultyId()
	{	
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'Dashboard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			//'TotalStudent' => $this->Auth_model->CountStudent('tb_edu_students'),//total student
			//'Totalcourse' => $this->Auth_model->CountAll('tb_edu_course'),//total student
			//'TotalMessage' => $this->Auth_model->Countmessage('tb_edu_message'),//total student
		);

		$id = $this->session->userdata('user_id'); 
		$loadData['userData'] = $this->User_model->getUserByUserId($id); 

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Details_faculty.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}


//Add student Add PAGE CI.............
	public function Addstudent()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'studentBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Add_student.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//All Students PAGE CI............
	public function Allstudents()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'studentBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'StudentDataList' => $this->Auth_model->Get_data_model('tb_edu_students'),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_students.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Details Students PAGE CI............
	public function DetailsStudents($id)
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		$sdata = array(
			'match_col' => 'id',
			'match_by'  =>$id,
		);

		$loadData = array(
			'active_menu' => 'studentBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'StudentData' => $this->Auth_model->Get_data_by_id_model('tb_edu_students',$sdata),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'StudentDataList' => $this->Auth_model->Get_data_model('tb_edu_students'),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Details_student.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}


//AddDepartment PAGE CI............
	public function AddDepartment()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		); 

		$loadData = array(
			'active_menu' => 'DepartmentBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Add_department.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Udate Department PAGE CI............
	public function UpdateDepartment($id)
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		); 

		$ddata = array(
			'match_col' => 'id',
			'match_by'  => $id
		); 

		$loadData = array(
			'active_menu' => 'DepartmentBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
			'DepartmentData' => $this->Auth_model->Get_data_by_id_model('tb_edu_course',$ddata),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Edit_department.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Deatils Department PAGE CI............
	public function DetailsDepartment($id)
	{ 
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$ddata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);		

		$loadData = array(
		'active_menu' => 'DepartmentBoard',
		'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
		'DepartmentData' => $this->Auth_model->Get_data_by_id_model('tb_edu_course',$ddata),//Edit slider by ID
		'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Details_department.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}


//All Department PAGE CI............
	public function AllDepartment()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'DepartmentBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'DepartmentDataList' => $this->Auth_model->Get_data_model('tb_edu_course'),//Department ALL
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_department.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Add Slider PAGE CI UI METHOD ................................
	public function AddSlider()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$loadData = array(
			'active_menu' => 'SliderBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Add_slider.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Add Slider PAGE CI UI METHOD ................................
	public function EditSlider($id)
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);
		
		$sdata = array(
			'match_col' => 'id',
			'match_by'  => $id
		);		

		$loadData = array(
			'active_menu' => 'SliderBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SliderData' => $this->Auth_model->Get_data_by_id_model('tb_edu_sliders',$sdata),//Edit slider by ID
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Edit_slider.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}


//ALL Slider PAGE CI UI METHOD ................................
	public function AllSlider()
	{ 
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		);

		$loadData = array(
			'active_menu' => 'SliderBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SliderDataList' => $this->Auth_model->Get_data_model('tb_edu_sliders'),//ALL Slider
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/ALL_slider.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}



//Add Gallery PAGE CI UI METHOD ................................
	public function AddGallery()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		); 

		$loadData = array(
			'active_menu' => 'GalleryBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Add_gallery.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//ALL Gallery PAGE CI UI METHOD ................................
	public function AllGallery()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		); 
		
		$loadData = array(
			'active_menu' => 'GalleryBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'GalleryDataList' => $this->Auth_model->Get_data_model('tb_edu_gallery'),//Gallery Link ALL 
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/All_gallery.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

////CITIZEN_CHARTER Add  PAGE CI........
	public function AddCitizen()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		); 
		
		$loadData = array(
			'active_menu' => 'CitizensBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);
		
		$data = array(
			'header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'content' => $this->load->view('Auth/Add_citizen.php',$loadData),
			'footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

////CITIZEN_CHARTER Add  PAGE CI........
	public function AllCitizen()
	{
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		); 

		$loadData = array(
			'active_menu' => 'CitizensBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'CitizenDataList' => $this->Auth_model->Get_data_model('tb_edu_citizens'),//citizen ALL
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'content' => $this->load->view('Auth/All_citizen.php',$loadData),
			'footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Update Citizen PAGE CI......................
	public function UpdateCitizen($id)
	{	
		$data = array(
			'match_col' => 'id',
			'match_by'  => 1
		); 

		$eData = array(
			'match_col' => 'id',
			'match_by'  => $id
		);	

		$loadData = array(
			'active_menu' => 'CitizensBoard',
			'ContactMsg' => $this->Auth_model->Get_data_model('tb_edu_message'),//Massage
			'CitizenData' => $this->Auth_model->Get_data_by_id_model('tb_edu_citizens',$eData),//Update notice 
			'SiteOptionData' => $this->Auth_model->Get_data_by_id_model('tb_edu_siteoption',$data),//siteoption
		);

		$data = array(
			'Header' => $this->load->view('Auth/Header.php',$loadData),
			'Left Menu' => $this->load->view('Auth/Left_menu.php',$loadData),
			'Content' => $this->load->view('Auth/Edit_citizen.php',$loadData),
			'Footer' => $this->load->view('Auth/Footer.php',$loadData)
		); 
		$this->load->view('index',$data);
	}

//Auth function start =====================================================
/*=========================================================================
| Functions method Start 
*/
	public function IdentityRead(){
		$sdata = array();
		$sTable= 'tb_edu_siteoption';
		$sdata['id']  = $this->input->post('id');
		$sdata['title'] =$this->input->post('title');
		$sdata['name'] = $this->input->post('name');
		if(empty($sdata['id'] )){
			redirect('Auth/SiteSetting/'); 
		}else{
			$this->session->set_flashdata($Sdata);
		$this->Auth_model->siteDataRead_model($sdata,$sTable); 	
		redirect('Auth/SiteSetting/'); 
		}
	}
/*=========================================================================
|Address Cantact method 
*/
	public function SiteAddress(){
		$sdata = array();
		$sTable= 'tb_edu_siteoption';
		$sdata['id']  = $this->input->post('id');
		$sdata['map'] =$this->input->post('map');
		$sdata['address'] = $this->input->post('address');
		if(empty($sdata['id'] )){
			redirect('Auth/SiteSetting/'); 
		}else{
		$this->Auth_model->AddressDataRead_model($sdata,$sTable); 	
		redirect('Auth/SiteSetting/'); 
		}
	}
/*=========================================================================
|Contact email phone hotline socail link  method 
*/
	public function SiteContactLink(){
		$sdata = array();
		$sTable= 'tb_edu_siteoption';
		$sdata['id']  = $this->input->post('id');
		$sdata['email'] =$this->input->post('email');
		$sdata['phone'] =$this->input->post('phone');
		$sdata['hotline_phone'] =$this->input->post('hotline_phone');
		$sdata['online'] =$this->input->post('online');
		$sdata['facebook'] =$this->input->post('facebook');
		$sdata['linkedln'] =$this->input->post('linkedln');

		if(empty($sdata['id'] )){
			redirect('Auth/SiteSetting/'); 
		}else{
		$this->Auth_model->contacrlinkDataRead_model($sdata,$sTable); 	
		redirect('Auth/SiteSetting/'); 
		}
	}
/*=========================================================================
|Cantact method 
*/
	public function LogoRead(){
		$sdata = array();
		$sTable= 'tb_edu_siteoption';
		$sdata['id']  = $this->input->post('id');
		if(empty($sdata['id'] )){
			redirect('Auth/SiteSetting/'); 
			}else{

				$old_logo	= $this->input->post('old_logo');
				/*-----------------------------------------------*/
				$change_logo = $_FILES["logo"]['name'];
				if(!empty($change_logo)){
				unlink('images/logo/'.$old_logo); 
				$new_name                   	= 'gai'.$change_logo; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/logo/';
			    $config['allowed_types']        = 'gif|jpg|png';
				$this->load->library('upload', $config);
			    $sdata['logo'] = $new_name;

			    if (! $this->upload->do_upload('logo')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->LogoDataRead_model($sdata,$sTable); 	
		redirect('Auth/SiteSetting/'); 
		}
	}

/*=========================================================================
|About method 
*/
	public function AboutRead(){
		$sdata = array();
		$sTable= 'tb_edu_siteoption';
		$sdata['id']  = $this->input->post('id');
		$sdata['about']  = $this->input->post('about');
		if(empty($sdata['id'] )){
			redirect('Auth/About/'); 
			}else{

				$old_image	= $this->input->post('old_image');
				/*-----------------------------------------------*/
				$change_image = $_FILES["about_image"]['name'];
				if(!empty($change_image)){
				unlink('images/about/'.$old_image); 
				$new_name                   	= 'gai'.$change_image; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/about/';
			    $config['allowed_types']        = 'gif|jpg|jpeg|png';
				$this->load->library('upload', $config);
			    $sdata['about_image'] = $new_name;

			    if (! $this->upload->do_upload('about_image')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->AboutDataRead_model($sdata,$sTable); 	
		redirect('Auth/About/'); 
		}
	}
/*=========================================================================
|Portfolio method 
*/
	public function PortfoliRead(){
		$sdata = array();
		$sTable= 'tb_edu_siteoption';
		$sdata['id']  = $this->input->post('id');
		$sdata['portfolio_title']  = $this->input->post('portfolio_title');
		$sdata['portfolio_content']  = $this->input->post('portfolio_content');
		if(empty($sdata['id'] )){
			redirect('Auth/Portfolio/'); 
			}else{

				$old_image	= $this->input->post('old_image');
				/*-----------------------------------------------*/
				$change_image = $_FILES["portfolio_background"]['name'];
				if(!empty($change_image)){
				unlink('images/'.$old_image); 
				$new_name                   	= 'gai'.$change_image; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/';
			    $config['allowed_types']        = 'gif|jpg|jpeg|png';
				$this->load->library('upload', $config);
			    $sdata['portfolio_background'] = $new_name;

			    if (! $this->upload->do_upload('portfolio_background')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->ProtfoliDataRead_model($sdata,$sTable); 	
		redirect('Auth/Portfolio/'); 
		}
	}

/*=========================================================================
|Improtant link functions method 
*/	
	public function writeImpLink(){
		$mdata = array();
		$mTable = 'tb_edu_link';
		$mdata['link'] = $this->input->post('link');
		$mdata['title'] = $this->input->post('title');
		if(empty($mdata['link']) OR empty($mdata['title']) ){
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Faild !</strong> :)</div>';
			$this->session->set_flashdata($Sdata); 
		redirect('Auth/ImportantLink/');
		}
		else{
		$Sdata['msg'] = '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Save !</strong> :)</div>';
			$this->session->set_flashdata($Sdata);
		$this->Auth_model->write_data_model($mTable,$mdata); 
		redirect('Auth/ImportantLink/'); 
		}

	}

/*=========================================================================
|Improtant link update functions method 
*/	
	public function updateImpLink(){
		$mdata = array();
		$mTable = 'tb_edu_link';
		$mdata['id'] = $this->input->post('id');
		$mdata['link'] = $this->input->post('link');
		$mdata['title'] = $this->input->post('title');
		if(empty($mdata['id'] )){
			redirect('Auth/ImportantLink/'); 
		}else{
		$this->Auth_model->ImpLinkDataEdit_model($mdata,$mTable); 
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Udate!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
		redirect('Auth/ImportantLink/'); 
		}
	}
/*========================================================================
|Link Delete method 
*/
	public function LinkDelete($id){
		$table ='tb_edu_link';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id'; 
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);
		redirect('Auth/ImportantLink/');
	}

/*=========================================================================
|Principal Add  functions method 
*/	
	public function writeNotice(){
		$pdata = array();
		$pTable = 'tb_edu_notice';
		$pdata['published_date'] = $this->input->post('published_date');
		$pdata['deadline_date'] = $this->input->post('deadline_date');
		$pdata['title'] = $this->input->post('title');
		$pdata['notice_tags'] = $this->input->post('notice_tags');
		$pdata['notice_body'] = $this->input->post('notice_body');
		if(empty($pdata['title'])){
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Faild Done!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);
			redirect('Auth/NoticeAdd/'); 
		}
		else{
				$new_name                   	= 'gai'.$_FILES["notice_file"]['name'];
        		$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/notice/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
                $config['max_size']             = 100000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                $pdata['notice_file'] = $new_name;


                if ( ! $this->upload->do_upload('notice_file'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    //$this->load->view('upload_form', $error);
                }
                else
                { 
                 	$data = array('upload_data' => $this->upload->data());
                }
		$this->Auth_model->write_data_model($pTable,$pdata);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Save!</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/NoticeAdd/'); 
		}
	}

/*=========================================================================
|Notice Update function  method 
*/
	public function EditNotice(){
		$sdata = array();
		$sTable= 'tb_edu_notice';
		$sdata['id']              = $this->input->post('id');
		$sdata['published_date']  = $this->input->post('published_date');
		$sdata['deadline_date']   = $this->input->post('deadline_date');
		$sdata['title']           = $this->input->post('title');
		$sdata['notice_tags']     = $this->input->post('notice_tags');
		$sdata['notice_body']     = $this->input->post('notice_body');
		$sdata['published_date']  = $this->input->post('published_date');
		if(empty($sdata['id'] )){
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Faild Update Save!</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
			redirect('Auth/AllNotice/'); 
			}else{

				$old_image	= $this->input->post('old_image');
				/*-----------------------------------------------*/
				$change_image = $_FILES["notice_file"]['name'];
				if(!empty($change_image)){
				unlink('images/notice/'.$old_image); 
				$new_name                   	= 'gai'.$change_image; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/notice/';
			    $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
				$this->load->library('upload', $config);
			    $sdata['notice_file'] = $new_name;

			    if (! $this->upload->do_upload('notice_file')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->NoticeDataUpdate_model($sdata,$sTable); 	
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Update!</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/AllNotice/'); 
		}
	}
/*==========================================================
|Notice Delete method 
*/
	public function NoticeDeletefile($id,$file){
		$table ='tb_edu_notice';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$data['notice_file'] = $file; 
		unlink('images/notice/'.$file); 
		$this->Auth_model->Trash_data_by_id_model($table,$data);	
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);
		redirect('Auth/AllNotice/');
	}
/*==========================================================
|Notice Delete method 
*/
	public function NoticeDelete($id){
		$table ='tb_edu_notice';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id'; 
		$this->Auth_model->Trash_data_by_id_model($table,$data);	
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);
		redirect('Auth/AllNotice/');
	}

/*==========================================================
|Department Delete method 
*/
	public function DepartmentDelete($id,$file){
		$table ='tb_edu_course';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$data['course_image'] = $file; 
		unlink('images/course/'.$file); 
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
		redirect('Auth/AllDepartment/');
	}

/*=========================================================================
|Department Board functions method 
*/	
	public function writeDepartment(){
		$ddata = array();
		$dTable = 'tb_edu_course';
		$ddata['title'] = $this->input->post('title');
		$ddata['details'] = $this->input->post('details');
		$ddata['about_course'] = $this->input->post('about_course');
		$ddata['apply_process'] = $this->input->post('apply_process');
		$ddata['curriculumn'] = $this->input->post('curriculumn');
		$ddata['course_start'] = $this->input->post('course_start');
		$ddata['course_duration'] = $this->input->post('course_duration');
		$ddata['total_semester'] = $this->input->post('total_semester');
		$ddata['class_duration'] = $this->input->post('class_duration');
		$ddata['shift'] = $this->input->post('shift');
		$ddata['no_of_seat'] = $this->input->post('no_of_seat');
		$ddata['faculty_member'] = $this->input->post('faculty_member');
		$ddata['success_level'] = $this->input->post('success_level');
		if(empty($ddata['title'])){
		/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">×</button><strong>Faild Done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);
			redirect('Auth/AddDepartment/'); 
		}else{
				$new_name                   	= 'gai'.$_FILES["course_image"]['name'];
        		$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/course/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
                $config['max_size']             = 100000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                $ddata['course_image'] = $new_name;


                if ( ! $this->upload->do_upload('course_image'))
                {
                    $error = array('error' => $this->upload->display_errors());

                }
                else
                { 
                 	$data = array('upload_data' => $this->upload->data());
                }
              // var_dump($ddata); die();
		$this->Auth_model->write_data_model($dTable,$ddata); 
		/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Save !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);
		redirect('Auth/AddDepartment/');
		} 
	}
/*=========================================================================
|udate Department Update function  method 
*/
	public function EditDepartment(){
		$ddata = array();
		$dTable= 'tb_edu_course';
		$ddata['id']              = $this->input->post('id');
		$ddata['title'] = $this->input->post('title');
		$ddata['details'] = $this->input->post('details');
		$ddata['about_course'] = $this->input->post('about_course');
		$ddata['apply_process'] = $this->input->post('apply_process');
		$ddata['curriculumn'] = $this->input->post('curriculumn');
		$ddata['course_start'] = $this->input->post('course_start');
		$ddata['course_duration'] = $this->input->post('course_duration');
		$ddata['total_semester'] = $this->input->post('total_semester');
		$ddata['class_duration'] = $this->input->post('class_duration');
		$ddata['shift'] = $this->input->post('shift');
		$ddata['no_of_seat'] = $this->input->post('no_of_seat');
		$ddata['faculty_member'] = $this->input->post('faculty_member');
		$ddata['success_level'] = $this->input->post('success_level');
		if(empty($ddata['id'] )){
			redirect('Auth/AllDepartment/'); 
			}else{

				$old_image	= $this->input->post('old_image');
				/*-----------------------------------------------*/
				$change_image = $_FILES["course_image"]['name'];
				if(!empty($change_image)){
				unlink('images/course/'.$old_image); 
				$new_name                   	= 'gai'.$change_image; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/course/';
			    $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
				$this->load->library('upload', $config);
			    $ddata['course_image'] = $new_name;

			    if (! $this->upload->do_upload('course_image')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->DpartmentDataUpdate_model($ddata,$dTable); 
		/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Update !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
		redirect('Auth/AllDepartment/'); 
		}
	}

/*=========================================================================
|Faculty Add  functions method 
*/	
	public function writeFaculty(){	
		/*-----------------------*/
		$facultyTable = 'tb_edu_faculty';
		$userTable = 'tb_edu_user'; 
		/*-----------------------*/
		$user_profile_id = $this->input->post('user_profile_id');
		$type = $this->input->post('type');//
		$email = $this->input->post('email');
		$designation = $this->input->post('designation');
		$department = $this->input->post('department');
		/*-----------------------*/

		if(!empty($email)){
			$pass = 'GAI'.rand(10,1000); 

		/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">×</button><strong>Faild Done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	

  /* $config = Array(
              'protocol' => 'smtp',
              'smtp_host' => 'ssl://smtp.google.com',
              'smtp_port' => 465,
              'smtp_user' => 'masud4rna1@gmail.com',
              'smtp_pass' => 'masudrana010'
    );

    $this->load->library('email',$config);
    $this->email->set_newline("\r\n");

    $this->email->from("masud4rna1@gmail.com");
    $this->email->to("rana@gmail.com");
    $this->email->subject($pass);
    $this->email->message($pass);

    if($this->email->send())
    {
        echo "Your email was sent.!";
    } else {
        show_error($this->email->print_debugger());
    }
/*/
			//email sending option...
			$u_data = array(
				'user_id' => $email, 
				'password' => md5($pass), 
				'user_type' => $type
			);  

			$lastid = $this->Auth_model->faculty_add_model($userTable,$u_data);
			$f_data = array(
				'user_profile_id' => $lastid,
				'email' => $email,
				'type' => $type,
				'designation' => $designation,
				'department' => $department,
			);

			$this->Auth_model->write_data_model($facultyTable,$f_data);
			/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Save !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
		}
		redirect('Auth/AddFaculty/'); 
	}

/*=========================================================================
|Faculty Update function  method 
*/
	public function EditFaculty(){
		$sdata = array();
		$sTable= 'tb_edu_faculty';
		$sdata['id']              = $this->input->post('id');
		$sdata['user_profile_id']  = $this->input->post('user_profile_id');
		$sdata['firstname']  = $this->input->post('firstname');
		$sdata['lastname']  = $this->input->post('lastname');
		$sdata['email']  = $this->input->post('email');
		$sdata['department']  = $this->input->post('department');
		$sdata['designation']  = $this->input->post('designation');
		$sdata['educational_qualification']  = $this->input->post('educational_qualification');
		$sdata['experiences']  = $this->input->post('experiences');
		$sdata['hobby']  = $this->input->post('hobby');
		$sdata['phone']  = $this->input->post('phone');
		$sdata['about']  = $this->input->post('about');
		$sdata['message']  = $this->input->post('message');
		$sdata['facebook_link']  = $this->input->post('facebook_link');
		if(empty($sdata['id'] )){
			redirect('Auth/UpdateFaculty/'); 
			}else{

				$old_image	= $this->input->post('old_image');
				/*-----------------------------------------------*/
				$change_image = $_FILES["image"]['name'];
				if(!empty($change_image)){
				unlink('images/teacher/'.$old_image); 
				$new_name                   	= 'gai'.$change_image; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/teacher/';
			    $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
				$this->load->library('upload', $config);
			    $sdata['image'] = $new_name;

			    if (! $this->upload->do_upload('image')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->FacultyDataUpdate_model($sdata,$sTable); 
			/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">×</button><strong>Update done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
		redirect('Auth/AllFaculty/'); 
		}
	}

/*==========================================================
|Faculty Active Principal method 
*/
	public function Principal($id){
		$table ='tb_edu_faculty';
		/*----------------------------------------------------------*/
		$data = array();
		$data['match_col'] = 'id';
		$data['match_by'] = $id; 
		$data['principal'] = 1;
		$this->Auth_model->principal_model_base($table); //set as 0 Remove from principal role.. 
		$this->Auth_model->principal_model_add($table,$data); // set as 1 for Make Principal 
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Active Principal !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);
		redirect('Auth/AllFaculty/');		
	}


/*==========================================================
|Faculty Delete method 
*/
	public function FacultyDeleteimg($id,$image){
		$table ='tb_edu_faculty';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$data['image'] = $image; 
		unlink('images/teacher/'.$image); 
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done  !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);
		redirect('Auth/AllFaculty/');
	}

/*==========================================================
|Faculty Delete method 
*/
	public function FacultyDelete($id){
		$table ='tb_edu_faculty';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done  !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);
		redirect('Auth/AllFaculty/');
	}

/*=========================================================================
|Staff Add  functions method 
*/	
	public function writeStaff(){
		$tdata = array();
		$tTable = 'tb_edu_staff';
		$tdata['firstname'] = $this->input->post('firstname');
		$tdata['lastname'] = $this->input->post('lastname');
		$tdata['phone'] = $this->input->post('phone');
		$tdata['email'] = $this->input->post('email');
		$tdata['facebook_link'] = $this->input->post('facebook_link');
		$tdata['designation'] = $this->input->post('designation');
		$tdata['branch'] = $this->input->post('branch');
		$tdata['about'] = $this->input->post('about');
		$tdata['experiences'] = $this->input->post('experiences');
		$tdata['educational_qualification'] = $this->input->post('educational_qualification');
		$tdata['hobby'] = $this->input->post('hobby');
		if(empty($tdata['firstname'])){
			redirect('Auth/Addstaff/'); 
		}
		else{
				$new_name                   	= 'gai'.$_FILES["image"]['name'];
        		$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/staff/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
                $config['max_size']             = 100000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                $tdata['image'] = $new_name;


                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('upload_form', $error);
                }
                else
                { 
                 	$data = array('upload_data' => $this->upload->data());
                }
		$this->Auth_model->write_data_model($tTable,$tdata); 
		redirect('Auth/Addstaff/'); 
		}
	}

/*=========================================================================
|Faculty Update function  method 
*/
	public function editStaff(){
		$sdata = array();
		$sTable= 'tb_edu_staff';
		$sdata['id']              = $this->input->post('id');
		$sdata['firstname']  = $this->input->post('firstname');
		$sdata['lastname']  = $this->input->post('lastname');
		$sdata['email']  = $this->input->post('email');
		$sdata['branch']  = $this->input->post('branch');
		$sdata['designation']  = $this->input->post('designation');
		$sdata['educational_qualification']  = $this->input->post('educational_qualification');
		$sdata['experiences']  = $this->input->post('experiences');
		$sdata['hobby']  = $this->input->post('hobby');
		$sdata['phone']  = $this->input->post('phone');
		$sdata['about']  = $this->input->post('about');
		$sdata['facebook_link']  = $this->input->post('facebook_link');
		if(empty($sdata['id'] )){
			redirect('Auth/UpdateStaff/'); 
			}else{

				$old_image	= $this->input->post('old_image');
				/*-----------------------------------------------*/
				$change_image = $_FILES["image"]['name'];
				if(!empty($change_image)){
				unlink('images/Staff/'.$old_image); 
				$new_name                   	= 'gai'.$change_image; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/Staff/';
			    $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
				$this->load->library('upload', $config);
			    $sdata['image'] = $new_name;

			    if (! $this->upload->do_upload('image')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->StaffDataUpdate_model($sdata,$sTable); 	
		redirect('Auth/Allstaff/'); 
		}
	}

/*==========================================================
|Staff Delete method 
*/
	public function StaffDelete($id,$image){
		$table ='tb_edu_staff';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$data['image'] = $image; 
		unlink('images/staff/'.$image); 
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		redirect('Auth/Allstaff/');
	}

/*=========================================================================
|Event Add  functions method 
*/	
	public function writeEvent(){
		$edata = array();
		$eTable = 'tb_edu_event';
		$edata['title'] = $this->input->post('title');
		$edata['start_time'] = $this->input->post('start_time');
		$edata['end_time'] = $this->input->post('end_time');
		$edata['venue'] = $this->input->post('venue');
		$edata['details'] = $this->input->post('details');
		if(empty($edata['title'])){
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Faild Done!</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
			redirect('Auth/EventAdds/'); 
		}
		else{
				$new_name                   	= 'gai'.$_FILES["image"]['name'];
        		$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/event/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
                $config['max_size']             = 100000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                $edata['image'] = $new_name;


                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('upload_form', $error);
                }
                else
                { 
                 	$data = array('upload_data' => $this->upload->data());
                }
		$this->Auth_model->write_data_model($eTable,$edata); 
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Save!</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/EventAdds/'); 
		}
	}

/*=========================================================================
|Event Update function  method 
*/
	public function EditEvent(){
		$sdata = array();
		$sTable= 'tb_edu_event';
		$sdata['id']         = $this->input->post('id');
		$sdata['start_time'] = $this->input->post('start_time');
		$sdata['end_time']   = $this->input->post('end_time');
		$sdata['title']      = $this->input->post('title');
		$sdata['venue']      = $this->input->post('venue');
		$sdata['details']    = $this->input->post('details');
		if(empty($sdata['id'] )){
			redirect('Auth/Allevent/'); 
			}else{

				$old_image	= $this->input->post('old_image');
				/*-----------------------------------------------*/
				$change_image = $_FILES["image"]['name'];
				if(!empty($change_image)){
				unlink('images/Event/'.$old_image); 
				$new_name                   	= 'gai'.$change_image; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/Event/';
			    $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
				$this->load->library('upload', $config);
			    $sdata['image'] = $new_name;

			    if (! $this->upload->do_upload('image')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->EventDataUpdate_model($sdata,$sTable); 	
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Update!</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/Allevent/'); 
		}
	}
/*==========================================================
|Event  Delete method 
*/
	public function EventDelete($id,$image){
		$table ='tb_edu_event';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$data['image'] = $image; 
		unlink('images/event/'.$image); 
		$this->Auth_model->Trash_data_by_id_model($table,$data);	
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done!</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/Allevent/');
	}

/*=========================================================================
|Slider Add  functions method 
*/	
	public function writeSlider(){
		$sdata = array();
		$sTable = 'tb_edu_sliders';
		$sdata['title'] = $this->input->post('title');
		if(empty($sdata['title'])){
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Faild!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
			redirect('Auth/AddSlider/'); 
		}
		else{
				$new_name                   	= 'gai'.$_FILES["image"]['name'];
        		$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/banner/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
                $config['max_size']             = 100000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;

                $this->load->library('upload', $config);
                $sdata['image'] = $new_name;


                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('upload_form', $error);
                }
                else
                { 
                 	$data = array('upload_data' => $this->upload->data());
                }
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Save!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
		$this->Auth_model->write_data_model($sTable,$sdata); 
		redirect('Auth/AddSlider/'); 
		}
	}

/*=========================================================================
|Slider Edit Function  method 
*/
	public function UpdateSlider(){
		$sdata = array();
		$sTable= 'tb_edu_sliders';
		$sdata['id']  = $this->input->post('id');
		$sdata['title']  = $this->input->post('title');
		if(empty($sdata['id'] )){
			redirect('Auth/AllSlider/'); 
			}else{

				$old_image	= $this->input->post('old_image');
				/*-----------------------------------------------*/
				$change_image = $_FILES["image"]['name'];
				if(!empty($change_image)){
				unlink('images/banner/'.$old_image); 
				$new_name                   	= 'gai'.$change_image; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/banner/';
			    $config['allowed_types']        = 'gif|jpg|jpeg|png';
				$this->load->library('upload', $config);
			    $sdata['image'] = $new_name;

			    if (! $this->upload->do_upload('image')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->SliderDataEdit_model($sdata,$sTable);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Update Save!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	 	
		redirect('Auth/AllSlider/'); 
		}
	}

/*==========================================================
|Slider  Delete method 
*/
	public function SliderDelete($id,$image){
		$table ='tb_edu_sliders';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$data['image'] = $image; 
		unlink('images/banner/'.$image); 
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
		redirect('Auth/AllSlider/');
		}

	/*==========================================================
	|Slider Active method 
	*/
		public function SliderActiveMethod($id){  	
			$table ='tb_edu_sliders';
			/*----------------------------------------------------------*/
			$data = array();
			$data['match_col'] = 'id';
			$data['match_by'] = $id; 
			$data['status'] = 1;
			$this->Auth_model->Update_acitivity_model($table,$data);
			/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Slider Active Done!</strong> :)</div>';
			$this->session->set_flashdata($Sdata);	
			redirect('Auth/AllSlider/');
		}

	/*==========================================================
	|Slider InActive method 
	*/
		public function SliderInActiveMethod($id){ 
			$table ='tb_edu_sliders';
			/*----------------------------------------------------------*/
			$data = array();
			$data['match_col'] = 'id';
			$data['match_by'] = $id; 
			$data['status'] = 0;
			$this->Auth_model->Update_acitivity_model($table,$data);
			/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Slider InActive Done!</strong> :)</div>';
			$this->session->set_flashdata($Sdata);	
			redirect('Auth/AllSlider/');
		}


/*=========================================================================
|Gallery Add  functions method 
*/	
	public function writeGallery(){
  		$gdata = array();
		$gTable = 'tb_edu_gallery';
		$gdata['caption'] = $this->input->post('caption');
		$gdata['type'] = $this->input->post('type');
		//$gdata['content'] = $this->input->post('content');

		if(empty($gdata['type'])){
			$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Faild  !</strong> :)</div>';
			$this->session->set_flashdata($Sdata);
			redirect('Auth/AddGallery/'); 
		}else{
				$new_name                   	= 'gai'.$_FILES["image"]['name'];
        		$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/gallery/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
                $config['max_size']             = 100000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;
                $this->load->library('upload', $config);
                $gdata['image'] = $new_name;
                if ( ! $this->upload->do_upload('image'))
                {   $error = array('error' => $this->upload->display_errors()); }
                else
                {
                 	$data = array('upload_data' => $this->upload->data());
                }

			$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Save !</strong> :)</div>';
			$this->session->set_flashdata($Sdata);

			$this->Auth_model->write_data_model($gTable,$gdata); 
            redirect('Auth/AddGallery/');   
        	}                   
    	}
  
/*=========================================================================
|Delet Gallary image functions method 
*/	
	public function GallaryDelete($id,$image_gallary){
		$table ='tb_edu_gallery';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id'; 
		$data['image_gallary'] = $image_gallary; 
		unlink('images/gallery/'.$image_gallary);
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
		redirect('Auth/AllGallery/');
	}
/*=========================================================================
|Improtant link functions method 
*/	
	public function writeCurriMenu(){
		$cdata = array();
		$cTable = 'tb_edu_curri_menu';
		$cdata['name'] = $this->input->post('name');
		if(empty($cdata['name'])){
			$sdata['msg'] = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">×</button><strong>Faild To Save!</strong> Please Try Again:)</div>';
			redirect('Auth/CurriculumMenu/'); 
		}
		else{
			$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Save !</strong> :)</div>';
		$this->session->set_flashdata($Sdata);
		}
		$this->Auth_model->write_data_model($cTable,$cdata); 
		redirect('Auth/CurriculumMenu/'); 
	}

/*=========================================================================
|Improtant link update functions method 
*/
	public function editCurriculum(){
		$mdata = array();
		$mTable = 'tb_edu_curri_menu';
		$mdata['id'] = $this->input->post('id');
		$mdata['name'] = $this->input->post('name');
		if(empty($mdata['id'] )){
			redirect('Auth/CurriculumUpdate/'); 
		}else{
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Udate!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
		$this->Auth_model->curriDataEdit_model($mdata,$mTable); 	
		redirect('Auth/CurriculumMenu/'); 
		}

	}
//options Curriculam Menu Delete ------------
	public function CurriDelete($id){
		$table ='tb_edu_curri_menu';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id'; 
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
		redirect('Auth/CurriculumMenu/');
	}


/*=========================================================================
|Curriculam Add  functions method 
*/	
	public function writeCurriculum(){
		$cdata = array();
		$cTable = 'tb_edu_curriculum';
		$cdata['curri_id'] = $this->input->post('curri_id');
		if(empty($cdata['curri_id'])){
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Faild!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	
			redirect('Auth/CurriAdd/'); 
		}
		else{
				$new_name                   	= 'gai'.$_FILES["curri_file"]['name'];
        		$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/curri/';
                $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
                $config['max_size']             = 100000;
                $config['max_width']            = 102400;
                $config['max_height']           = 76800;
                $this->load->library('upload', $config);
                $cdata['curri_file'] = $new_name;
                if ( ! $this->upload->do_upload('curri_file'))
                {   $error = array('error' => $this->upload->display_errors()); }
                else
                {
                 	$data = array('upload_data' => $this->upload->data());
                }
		$this->Auth_model->write_data_model($cTable,$cdata);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Save!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	 
		redirect('Auth/CurriAdd/'); 
		}
	}
// Curriculam  Delete ------------
	public function CurriculumDelete($id,$curri_file){
		$table ='tb_edu_curriculum';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id'; 
		$data['curri_file'] = $curri_file; 
		unlink('images/curri/'.$curri_file);
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done!</strong> :)</div>';
		$this->session->set_flashdata($Sdata);	 
		redirect('Auth/CurriAdd/');
	}

/*=========================================================================
|Citizen Add  functions method 
*/	
	public function writeCitizen(){
		$edata = array();
		$eTable = 'tb_edu_citizens';
		$edata['title'] = $this->input->post('title');
		$edata['content'] = $this->input->post('content');

			$new_name                   	= 'gai'.$_FILES["image"]['name'];
        	$config['file_name']        	= $new_name;
			$config['upload_path']          = './images/citizen/';
            $config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
            $config['max_size']             = 100000;
            $config['max_width']            = 102400;
            $config['max_height']           = 76800;

            $this->load->library('upload', $config);
            $edata['image'] = $new_name;


            if ( ! $this->upload->do_upload('image'))
            {
               $error = array('error' => $this->upload->display_errors());
                 //$this->load->view('upload_form', $error);
            }
            else
            { 
			$this->session->set_flashdata($Sdata);
             $data = array('upload_data' => $this->upload->data());
            }
		$this->Auth_model->write_data_model($eTable,$edata); 
		/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Save !</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/AddCitizen/'); 
	
	}

/*=========================================================================
|Citizen Update function  method 
*/
	public function EditCitizen(){
		$sdata = array();
		$sTable= 'tb_edu_citizens';
		$sdata['id']         = $this->input->post('id');
		$sdata['title']      = $this->input->post('title');
		$sdata['content']    = $this->input->post('content');
		if(empty($sdata['id'] )){
			redirect('Auth/AllCitizen/'); 
			}else{

				$old_image	= $this->input->post('old_image');
				/*-----------------------------------------------*/
				$change_image = $_FILES["image"]['name'];
				if(!empty($change_image)){
				unlink('images/citizen/'.$old_image); 
				$new_name                   	= 'gai'.$change_image; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/citizen/';
			    $config['allowed_types']        = 'gif|jpg|jpeg|png|pdf';
				$this->load->library('upload', $config);
			    $sdata['image'] = $new_name;

			    if (! $this->upload->do_upload('image')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->CitizenDataUpdate_model($sdata,$sTable); 
		/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Successfully Update !</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 	
		redirect('Auth/AllCitizen/'); 
		}
	}
/*==========================================================
|Citizen  Delete method 
*/
	public function CitizenDelete($id,$image){
		$table ='tb_edu_citizens';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$data['image'] = $image; 
		unlink('images/citizen/'.$image); 
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
			$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Delete Done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/AllCitizen/');
	}

/*==========================================================
|Student Active method 
*/
	public function studentActiveMethod($id){  	
		$table ='tb_edu_students';
		/*----------------------------------------------------------*/
		$data = array();
		$data['match_col'] = 'id';
		$data['match_by'] = $id; 
		$data['status'] = 1;
		$this->Auth_model->Update_acitivity_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong>Student Active Done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/Allstudents/');
	}

/*==========================================================
|student InActive method 
*/
	public function studentInActiveMethod($id){ 
		$table ='tb_edu_students';
		/*----------------------------------------------------------*/
		$data = array();
		$data['match_col'] = 'id';
		$data['match_by'] = $id; 
		$data['status'] = 0;
		$this->Auth_model->Update_acitivity_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">×</button><strong>Student InActive Done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/Allstudents/');
	}

/*==========================================================
|student  Delete method 
*/
	public function StudentRemoveByIdImg($id,$image){
		$table ='tb_edu_students';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$data['image'] = $image; 
		unlink('images/student/'.$image); 
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Student Delete Done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/Allstudents/');
	}
/*==========================================================
|student  Delete method 
*/
	public function StudentRemoveById($id){
		$table ='tb_edu_students';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		/*-------msg------*/
		$Sdata['msg'] = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button><strong>Student Delete Done !</strong> :)</div>';
		$this->session->set_flashdata($Sdata); 
		redirect('Auth/Allstudents/');
	}
/*=========================================================================
|cover Image  method 
*/
	public function SiteCover(){
		$sdata = array();
		$sTable= 'tb_edu_coverimg';
		$sdata['id']  = $this->input->post('id');
		if(empty($sdata['id'] )){
			redirect('Auth/CoverImage/'); 
			}else{

				$old_coverimg	= $this->input->post('old_coverimg');
				/*-----------------------------------------------*/
				$change_cover = $_FILES["site_img"]['name'];
				if(!empty($change_cover)){
				unlink('images/coverimg/'.$old_coverimg); 
				$new_name                   	= 'gai'.$change_cover; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/coverimg/';
			    $config['allowed_types']        = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
			    $sdata['site_img'] = $new_name;

			    if (! $this->upload->do_upload('site_img')){
			    $error = array('error' => $this->upload->display_errors());
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->siteCoverImg($sdata,$sTable); 	
		redirect('Auth/CoverImage/'); 
		}
	}

	public function Departmentcover(){
		$sdata = array();
		$sTable= 'tb_edu_coverimg';
		$sdata['id']  = $this->input->post('id');
		if(empty($sdata['id'] )){
			redirect('Auth/CoverImage/'); 
			}else{

				$old_coverimg	= $this->input->post('old_coverimg');
				/*-----------------------------------------------*/
				$change_cover = $_FILES["tech_img"]['name'];
				if(!empty($change_cover)){
				unlink('images/coverimg/'.$old_coverimg); 
				$new_name                   	= 'gai'.$change_cover; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/coverimg/';
			    $config['allowed_types']        = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
			    $sdata['tech_img'] = $new_name;

			    if (! $this->upload->do_upload('tech_img')){
			    $error = array('error' => $this->upload->display_errors());
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->techCoverImg($sdata,$sTable); 	
		redirect('Auth/CoverImage/'); 
		}
	}

	public function Teachercover(){
		$sdata = array();
		$sTable= 'tb_edu_coverimg';
		$sdata['id']  = $this->input->post('id');
		if(empty($sdata['id'] )){
			redirect('Auth/CoverImage/'); 
			}else{

				$old_coverimg	= $this->input->post('old_coverimg');
				/*-----------------------------------------------*/
				$change_cover = $_FILES["teacher_img"]['name'];
				if(!empty($change_cover)){
				unlink('images/coverimg/'.$old_coverimg); 
				$new_name                   	= 'gai'.$change_cover; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/coverimg/';
			    $config['allowed_types']        = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
			    $sdata['teacher_img'] = $new_name;

			    if (! $this->upload->do_upload('teacher_img')){
			    $error = array('error' => $this->upload->display_errors());
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->teacherCoverImg($sdata,$sTable); 	
		redirect('Auth/CoverImage/'); 
		}
	}

	public function StudentCover(){
		$sdata = array();
		$sTable= 'tb_edu_coverimg';
		$sdata['id']  = $this->input->post('id');
		if(empty($sdata['id'] )){
			redirect('Auth/CoverImage/'); 
			}else{

				$old_coverimg	= $this->input->post('old_coverimg');
				/*-----------------------------------------------*/
				$change_cover = $_FILES["student_img"]['name'];
				if(!empty($change_cover)){
				unlink('images/coverimg/'.$old_coverimg); 
				$new_name                   	= 'gai'.$change_cover; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/coverimg/';
			    $config['allowed_types']        = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
			    $sdata['student_img'] = $new_name;

			    if (! $this->upload->do_upload('student_img')){
			    $error = array('error' => $this->upload->display_errors());
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->stduentCoverImg($sdata,$sTable); 	
		redirect('Auth/CoverImage/'); 
		}
	}

	public function NoticeCover(){
		$sdata = array();
		$sTable= 'tb_edu_coverimg';
		$sdata['id']  = $this->input->post('id');
		if(empty($sdata['id'] )){
			redirect('Auth/CoverImage/'); 
			}else{

				$old_coverimg	= $this->input->post('old_coverimg');
				/*-----------------------------------------------*/
				$change_cover = $_FILES["notice_img"]['name'];
				if(!empty($change_cover)){
				unlink('images/coverimg/'.$old_coverimg); 
				$new_name                   	= 'gai'.$change_cover; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/coverimg/';
			    $config['allowed_types']        = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
			    $sdata['notice_img'] = $new_name;

			    if (! $this->upload->do_upload('notice_img')){
			    $error = array('error' => $this->upload->display_errors());
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->noticeCoverImg($sdata,$sTable); 	
		redirect('Auth/CoverImage/'); 
		}
	}

	public function eventCover(){
		$sdata = array();
		$sTable= 'tb_edu_coverimg';
		$sdata['id']  = $this->input->post('id');
		if(empty($sdata['id'] )){
			redirect('Auth/CoverImage/'); 
			}else{

				$old_coverimg	= $this->input->post('old_coverimg');
				/*-----------------------------------------------*/
				$change_cover = $_FILES["event_img"]['name'];
				if(!empty($change_cover)){
				unlink('images/coverimg/'.$old_coverimg); 
				$new_name                   	= 'gai'.$change_cover; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/coverimg/';
			    $config['allowed_types']        = 'gif|jpg|png|jpeg';
				$this->load->library('upload', $config);
			    $sdata['event_img'] = $new_name;

			    if (! $this->upload->do_upload('event_img')){
			    $error = array('error' => $this->upload->display_errors());
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}
		$this->Auth_model->eventCoverImg($sdata,$sTable); 	
		redirect('Auth/CoverImage/'); 
		}
	}


	public function CurriculamCover(){
		$sdata = array();
		$sTable= 'tb_edu_coverimg';
		$sdata['id']  = $this->input->post('id');
		if(empty($sdata['id'] )){
			redirect('Auth/CoverImage/'); 
			}else{

				$old_coverimg	= $this->input->post('old_coverimg');
				/*-----------------------------------------------*/
				$change_cover = $_FILES["curri_img"]['name'];
				if(!empty($change_cover)){
				unlink('images/coverimg/'.$old_coverimg); 
				$new_name                   	= 'gai'.$change_cover; 
				$config['file_name']        	= $new_name;
				$config['upload_path']          = './images/coverimg/';
			    $config['allowed_types']        = 'gif|jpg|jpeg|png';
				$this->load->library('upload', $config);
			    $sdata['curri_img'] = $new_name;

			    if (! $this->upload->do_upload('curri_img')){
			    $error = array('error' => $this->upload->display_errors());
			    $this->load->view('upload_form', $error);
			    }else{	
			    array('upload_data' => $this->upload->data());
			     }
				}

		$this->Auth_model->curriCoverImg($sdata,$sTable); 	
		redirect('Auth/CoverImage/'); 
		}
	}

/*==========================================================
|contact message Active  method 
*/
	public function Messages($id){
		$table ='tb_edu_message';
		/*----------------------------------------------------------*/
		$data = array();
		$data['match_col'] = 'id';
		$data['match_by'] = $id; 
		$data['status'] = 1;
		$this->Auth_model->message_model_add($table,$data); // set as 1 for Make Principal 
		redirect('Auth/MsgReply/');		
	}

/*==========================================================
|Message  Delete method 
*/
	public function messageDelete($id){
		$table ='tb_edu_message';
		$data = array();
		$data['match_by'] = $id;
		$data['match_col'] = 'id';
		$this->Auth_model->Trash_data_by_id_model($table,$data);
		$Sdata['msg'] = '<div class="alert alert-warning"><button type="button" class="close" data-dismiss="alert">×</button><strong>Message Delete!</strong> :)</div>';
			$this->session->set_flashdata($Sdata);
		redirect('Auth/Message/');
	}


}
