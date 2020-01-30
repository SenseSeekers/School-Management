	<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="pull-left image">
										<img src="<?php echo base_url();?>images/teacher/<?php if(!empty($userData->image)){ echo $userData->image; } ?>" class="img-circle user-img-circle"
											alt="User Image" style="height:70px; width:120px; " />
									</div>
									<div class="pull-left info">
										<p> 
											<?php 
												if(!empty($userData->firstname)){ echo $userData->firstname.' '; }   
												if(!empty($userData->lastname)){ echo $userData->lastname; }   
											?>
										</p>
										<a href="<?php echo base_url();?>"><i class="fa fa-circle user-online"></i><span class="txtOnline">
												Online</span></a>
									</div>
								</div>
							</li>
							<!------------------------>
							<li class="nav-item start <?php if($active_menu =='Dashboard'){ echo 'active open';}?> ">

								<a href="<?php echo base_url('index.php/Auth/index/');?>" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
								</a>
							</li>
							<!------------------------>
							<li class="nav-item start <?php if($active_menu =='Message'){ echo 'active open';}?> ">

								<a href="<?php echo base_url('index.php/Auth/Message/');?>" class="nav-link nav-toggle">
								<i class="fa fa-envelope-o"></i>
									<span class="title">Message</span>
								</a>

							</li>
							<!------------------------>
							<li class="nav-item <?php if($active_menu =='SiteSetting'){ echo 'active open';}?>">
								<a href="<?php echo base_url();?>#" class="nav-link nav-toggle"> <i class="fa fa-tasks"></i>
									<span class="title">Site Option</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item ">
										<a href="<?php echo base_url('index.php/Auth/SiteSetting/');?>" class="nav-link "> <span class="title">site setting</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/About/');?>" class="nav-link "> <span class="title">About</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/Portfolio/');?>" class="nav-link "> <span class="title">Portfolio</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/ImportantLink/');?>" class="nav-link "> <span class="title">Important Link</span>
										</a>
									</li>


									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/CoverImage/');?>" class="nav-link "> <span class="title">Cover Image </span>
										</a>
									</li>
								</ul>
							</li>
							<!----------------------------Academic menu options---------------------------->
							<li class="nav-item <?php if($active_menu =='CurriculumMenu'){ echo 'active open';}?>">
								<a href="<?php echo base_url();?>#" class="nav-link nav-toggle"> <i class="fa fa-tasks"></i>
									<span class="title">Academic Option</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item ">
										<a href="<?php echo base_url('index.php/Auth/CurriculumMenu/');?>" class="nav-link "> <span class="title">Curriculum Menu</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/CurriAdd/');?>" class="nav-link "> <span class="title">Curriculum Add</span>
										</a>
									</li>

								</ul>
							</li>

							<!------------------------------------------------------------------------------>
							
							<li class="nav-item  <?php if($active_menu =='NoticeBoard'){ echo 'active open';}?>" >
								<a href="<?php echo base_url();?>" class="nav-link nav-toggle"> <i class="fa fa-file-text-o"></i>
									<span class="title">Notice Board</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/NoticeAdd/');?>" class="nav-link "> <span class="title">Add Notice</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AllNotice/');?>" class="nav-link "> <span class="title">All Notice</span>
										</a>
									</li>
								</ul>
							</li>
							<!----------------------------------------------------------------------------->
							<li class="nav-item  <?php if($active_menu =='EventBord'){ echo 'active open';}?>">
								<a href="" class="nav-link nav-toggle"> <i class="material-icons">event</i>
									<span class="title">Event Management</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/EventAdds/');?>"> <span class="title">Add Event</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/Allevent/');?>" class="nav-link "> <span class="title">All Event</span>
										</a>
									</li>
								</ul>
							</li>

							<!----------------------------------------------------------------------------->
							<li class="nav-item  <?php if($active_menu =='CitizensBoard'){ echo 'active open';}?>">
								<a href="" class="nav-link nav-toggle"> <i class="material-icons">event</i>
									<span class="title">Citizens Charter</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AddCitizen/');?>"> <span class="title">Add Citizens Charter</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AllCitizen/');?>" class="nav-link "> <span class="title">All Citizens Charter</span>
										</a>
									</li>
								</ul>
							</li>
							<!------------------------------------------------------------------------------>
							<li class="nav-item <?php if($active_menu =='DepartmentBoard'){ echo 'active open';}?>">
								<a class="nav-link nav-toggle"> <i class="material-icons">business</i>
									<span class="title">Departments</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AddDepartment/');?>" class="nav-link "> <span class="title">Add
												Department</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AllDepartment/');?>" class="nav-link "> <span class="title">All
												Departments</span>
										</a>
									</li>
								</ul>
							</li> 
							<!----------------------------------------------------------------------------->

							<li class="nav-item   <?php if($active_menu =='Allprofessor'){ echo 'active open';}?>">
								<a  class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">Faculty</span> <span class="arrow"> </span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AddFaculty/');?>" class="nav-link "> <span class="title">Add Faculty </span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/Allprincipal/');?>" class="nav-link "> <span class="title">Principal</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AllDepartmenthead/');?>" class="nav-link "> <span class="title">All DepartmentHead </span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AllInstructor/');?>" class="nav-link "> <span class="title">All Instructor </span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AllManagement/');?>" class="nav-link "> <span class="title">All Management </span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AllDemonstrator/');?>" class="nav-link "> <span class="title">All Staff </span>
										</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/Alladministrator/');?>" class="nav-link "> <span class="title">All Administrator </span>
										</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AllFaculty/');?>" class="nav-link "> <span class="title">All Faculty </span>
										</a>
									</li>
								</ul>
							</li>
							<!----------------------------------------------------------------------------->
							<li class="nav-item  <?php if($active_menu =='studentBoard'){ echo 'active open';}?>">
								<a class="nav-link nav-toggle"><i class="material-icons">group</i>
									<span class="title">Students</span><span class="arrow"></span></a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/Addstudent/');?>" class="nav-link "> <span class="title">Add
												Student</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/Allstudents/');?>" class="nav-link "> <span class="title">All
												Students</span>
										</a>
									</li>
								</ul>
							</li>
							
							<!----------------------------Gallery menu options------------------------------>

							<li class="nav-item start <?php if($active_menu =='GalleryBoard'){ echo 'active open';}?> ">

								<a href="<?php echo base_url('index.php/Auth/Gallery/');?>" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Gallery</span>
								</a>

								<ul class="sub-menu">
									<li class="nav-item ">
										<a href="<?php echo base_url('index.php/Auth/AddGallery/');?>" class="nav-link "> <span class="title">Add Gallery</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AllGallery/');?>" class="nav-link "> <span class="title">All Gallery</span>
										</a>
									</li>
								</ul>
							</li>
							<!---------------------------- Slider menu options------------------------------>

							<li class="nav-item start <?php if($active_menu =='SliderBoard'){ echo 'active open';}?>" >

								<a href="<?php echo base_url('index.php/Auth/Slider/');?>" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Slider</span>
								</a>

								<ul class="sub-menu">
									<li class="nav-item ">
										<a href="<?php echo base_url('index.php/Auth/AddSlider/');?>" class="nav-link "> <span class="title">Add Slider</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/Auth/AllSlider/');?>" class="nav-link "> <span class="title">All Slider</span>
										</a>
									</li>
								</ul>
							</li>
							<!----------------------------------------------------------------------------->
							<li class="nav-item <?php if($active_menu =='UserOption'){ echo 'active open';}?>">
								<a  class="nav-link nav-toggle"> <i class="material-icons">person</i>
									<span class="title">User Option</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/GaiUser/Adduser/');?>" class="nav-link ">
											<span class="title">Add User</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?php echo base_url('index.php/User/AllFacultyuser/');?>" class="nav-link ">
											<span class="title">All Faculty user</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo base_url('index.php/User/AllStudentuser/');?>" class="nav-link ">
											<span class="title">All Student user</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo base_url('index.php/User/Alluser/');?>" class="nav-link ">
											<span class="title">All user</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->