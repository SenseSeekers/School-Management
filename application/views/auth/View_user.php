
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">User Profile</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/GaiAdmin/Dashboard/')?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/GaiUser/AddUser/')?>">User</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">User Profile</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="profile" style="width:80%; margin:0px auto;">
												<img src="<?php echo base_url();?>images/user/<?php echo $userData->image;?>" class="img-responsive" alt="" style="height:230px;width:100%;">
											</div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"><?php echo $userData->username;?></div>
										</div>
									</div>
								</div>
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="card">
										<div class="card-topline-aqua">
											<header></header>
										</div>
										<div class="white-box">
											<!-- Nav tabs -->
											<div class="p-rl-20">
												<ul class="nav customtab nav-tabs" role="tablist">
													<li class="nav-item"><a href="#tab1" class="nav-link active"
															data-toggle="tab">About Me</a></li>
													<li class="nav-item"><a href="#tab2" class="nav-link"
															data-toggle="tab">Activity</a></li>
												</ul>
											</div>
											<!-- Tab panes -->
											<div class="tab-content">
												<div class="tab-pane active fontawesome-demo" id="tab1">
													<div id="biography">
														<div class="row">
															<div class="col-md-12 col-12 b-r"> <strong ">Full Name <span class="required"> * </span></strong>
																<span class="text-muted" style="margin-left:36px;"><?php echo $userData->username;?></span>
															</div>
															<div class="col-md-12 col-12 b-r"> <strong>E-mail<span class="required"> * </span></strong>
																<span class="text-muted" style="margin-left:60px;"><?php echo $userData->email;?></span>
															</div>

															<div class="col-md-12 col-12 b-r"> <strong>User Role <span class="required"> * </span></strong>
																<span class="text-muted" style="margin-left:40px;"><?php echo $userData->type;?></span>
															</div>

															<div class="col-md-12 col-12 b-r"> <strong>Mobile No<span class="required"> * </span></strong>
																<span class="text-muted" style="margin-left:36px;"><?php echo $userData->phone;?></span>
															</div>
															<div class="col-md-12 col-12 b-r"> <strong>National Id<span class="required"> * </span></strong>
																<span class="text-muted" style="margin-left:30px;"><?php echo $userData->nid;?></span>
															</div>
															<div class="col-md-12 col-12 b-r"> <strong>Address<span class="required"> * </span></strong>
																<span class="text-muted" style="margin-left:46px;"><?php echo $userData->address;?></span>
															</div>
														</div>
														
														</div>
													</div>
												</div><br/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->
						</div>
					</div>
				</div>
				<!-- end page content -->