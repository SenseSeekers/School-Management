
 	<?php //echo var_dump($userData); die();?>

			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title"><h1>Details&ndash;<small><b>	<?php 	
			if(!empty($userData->firstname)){ echo $userData->firstname.' '; }   
			if(!empty($userData->lastname)){ echo $userData->lastname; }   
	?>(<?php echo $userData->designation;?>)</b></small></h1></div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li>
									<i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/AddFaculty/');?>">Add Faculty</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active"><a href="<?php echo base_url('index.php/Auth/AllPrincipal/');?>">Faculty List</a></li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<?php 
								if(empty($userData->image)){
							?>
							<img src="<?php echo base_url();?>images/user.png" alt="" style="width:100%;">
								<?php }else{ ?>
									
							<img src="<?php echo base_url();?>images/teacher/<?php echo $userData->image;?>" alt="" style="width:100%;">
							
							<?php 
								}
							?>
						</div>	
						<div class="col-md-8">
																			<a href="<?php echo base_url('index.php/Auth/UpdateFaculty/');?><?php echo $userData->id;?>"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
							<h1><?php echo $userData->firstname;?><?php echo $userData->lastname;?></h1>
							<h5><b><?php echo $userData->department;?> &nbsp;&nbsp;(<?php echo $userData->designation;?>)</b></h5>
						<p><storng><b>Department :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $userData->department;?> </p>
						<p><storng><b>Designation :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $userData->designation;?> </p>
						<p><storng><b>Experiences :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $userData->experiences;?> </p>
						<p><storng><b>Educational Qualification:</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $userData->educational_qualification;?></p>
						<p><storng><b>Hobby :</b></storng> &nbsp;&nbsp;&nbsp;<?php echo $userData->hobby;?></p>
						<p><storng><b>Email :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $userData->email;?></p>
						<p><storng><b>Phone :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $userData->phone;?> </p>
						
						</div>	
						<div class="col-md-6">
							<h1 style="border-bottom:3px solid #434;width:30%;"><storng><b>About</b></storng></h1>
							<p style="text-align:justify;"><?php echo $userData->about;?></p>
						</div>
						<div class="col-md-6">
							<h1 style="border-bottom:3px solid #434;width:30%;"><storng><b>Message</b></storng> </h1>
							<p style="text-align:justify;"><?php echo $userData->message;?></p>
						</div>	
					</div>
				</div>
			</div>
			<!-- end page content -->