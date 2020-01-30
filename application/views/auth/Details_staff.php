<!-- start page content-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title"><h1>Details</h1></div>
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
							<img src="<?php echo base_url();?>images/Staff/<?php echo $StaffData->image;?>" alt="" style="width:100%;">
						</div>	
						<div class="col-md-8">
							<h1><?php echo $StaffData->firstname;?><?php echo $StaffData->lastname;?></h1>
							<h5><b><?php echo $StaffData->branch;?> &nbsp;&nbsp;(<?php echo $StaffData->designation;?>)</b></h5>
						<p><storng><b>Branch :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $StaffData->branch;?> </p>
						<p><storng><b>Designation :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $StaffData->designation;?> </p>
						<p><storng><b>Experiences :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $StaffData->experiences;?> </p>
						<p><storng><b>Educational Qualification:</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $StaffData->educational_qualification;?></p>
						<p><storng><b>Hobby :</b></storng> &nbsp;&nbsp;&nbsp;<?php echo $StaffData->hobby;?></p>
						<p><storng><b>Email :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $StaffData->email;?></p>
						<p><storng><b>Phone :</b></storng>&nbsp;&nbsp;&nbsp;<?php echo $StaffData->phone;?> </p>
						
						</div>	
						<div class="col-md-12">
							<center><h1 style="border-bottom:3px solid #434;width:30%;"><storng><b>About</b></storng></h1></center>
							<p style="text-align:justify;"><?php echo $StaffData->about;?></p>
						</div>	
					</div>
				</div>
			</div>
			<!-- end page content -->