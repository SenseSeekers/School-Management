
 	<?php //echo var_dump($FacultyData); die();?>

			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title"><h1>Details&ndash;<small><b>	<?php 	
			if(!empty($FacultyData->firstname)){ echo $FacultyData->firstname.' '; }   
			if(!empty($FacultyData->lastname)){ echo $FacultyData->lastname; }   
	?>(<?php echo $FacultyData->designation;?>)</b></small></h1></div>
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
								if(empty($FacultyData->image)){
							?>
							<img src="<?php echo base_url();?>images/user.png" alt="" style="width:100%;">
								<?php }else{ ?>
									
							<img src="<?php echo base_url();?>images/teacher/<?php echo $FacultyData->image;?>" alt="" style="width:100%;">
							
							<?php 
								}
							?>
						</div>	
						<div class="col-md-8">
																			<a href="<?php echo base_url('index.php/Auth/UpdateFaculty/');?><?php echo $FacultyData->id;?>"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
							<h1><?php echo $FacultyData->firstname;?><?php echo $FacultyData->lastname;?></h1>
							<h5><b><?php echo $FacultyData->department;?> &nbsp;&nbsp;(<?php echo $FacultyData->designation;?>)</b></h5>
						<p><storng><b>Department :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $FacultyData->department;?> </p>
						<p><storng><b>Designation :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $FacultyData->designation;?> </p>
						<p><storng><b>Experiences :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $FacultyData->experiences;?> </p>
						<p><storng><b>Educational Qualification:</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $FacultyData->educational_qualification;?></p>
						<p><storng><b>Hobby :</b></storng> &nbsp;&nbsp;&nbsp;<?php echo $FacultyData->hobby;?></p>
						<p><storng><b>Email :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $FacultyData->email;?></p>
						<p><storng><b>Phone :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $FacultyData->phone;?> </p>
						
						</div>	
						<div class="col-md-6">
							<h1 style="border-bottom:3px solid #434;width:30%;"><storng><b>About</b></storng></h1>
							<p style="text-align:justify;"><?php echo $FacultyData->about;?></p>
						</div>
						<div class="col-md-6">
							<h1 style="border-bottom:3px solid #434;width:30%;"><storng><b>Message</b></storng> </h1>
							<p style="text-align:justify;"><?php echo $FacultyData->message;?></p>
						</div>	
					</div>
				</div>
			</div>
			<!-- end page content -->