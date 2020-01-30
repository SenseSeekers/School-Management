<?php //echo var_dump($userdata);die();?>
<!---
Masud Rana 
Roll - 925728 
Computer Science & Engineering - 2017/18
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title><?php echo $SiteOptionData->title;?></title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="<?php echo base_url();?>assets/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="<?php echo base_url();?>assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />
	<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/material_style.css">
	<!-- inbox style -->
	<link href="<?php echo base_url();?>assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="<?php echo base_url();?>assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
	<link href="<?php echo base_url();?>assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
	
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/material-datetimepicker/bootstrap-material-datetimepicker.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo" style="background: #fff;">
					<a href="">						
						<img class="logo-default" src="<?php echo base_url();?>images/logo/<?php echo $SiteOptionData->logo;?>">
					</a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<!-- start mobile menu -->

				<a href="<?php echo base_url();?>javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->

				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li><a href="javascript:;" class="fullscreen-btn"><i class="fa fa-arrows-alt"></i></a></li>
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i class="fa fa-envelope-o"></i>
								<span class="badge headerBadgeColor2"> <?php if(isset($TotalMessage)){ echo $TotalMessage; }else{ echo '0'; } ?> </span>
							</a>
							<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New  <?php if(isset($TotalMessage)){ echo $TotalMessage; }else{ echo '0'; } ?> </span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<?php
											foreach ($ContactMsg as  $message) {
										?>
										<?php 
										 if($message->status == 0){
										 ?>

										<li>
											<a href="<?php echo base_url('index.php/Auth/Messages/'); ?><?php echo $message->id; ?>">
												<span class="subject">
													<span class="from"><?php echo $message->email;?></span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> <?php echo $message->subject;?> </span>
											</a>
										</li>

										 <?php } ?>

										<?php 
											}
										?>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="<?php echo base_url();?>#"> All Messages </a>
									</div>
								</li>
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="<?php echo base_url();?>../assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile">
											<?php 

												if(!empty($userData->firstname)){ echo $userData->firstname.' '; }   
												if(!empty($userData->lastname)){ echo $userData->lastname; }   													?>

								</span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
								<a href="<?php echo base_url('index.php/Auth/DetailsFacultyId/');?>">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="<?php echo base_url();?>#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="<?php echo base_url();?>lock_screen.html">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/User/Logout');?>">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->