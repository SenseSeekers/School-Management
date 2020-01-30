<?php //echo var_dump($StudentData); die();?>

			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title"><h1>Details&ndash;<small><b>
		<?php if(!empty($StudentData->full_name_eng)){ echo $StudentData->full_name_eng.' '; }  ?></b></small></h1></div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li>
									<i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active"><a href="<?php echo base_url('index.php/Auth/Allstudents/');?>">Student List</a></li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							<?php 
								if(empty($StudentData->image)){
							?>
							<img class="responsive" src="<?php echo base_url();?>images/user.png" alt="" style="width:100%;">
								<?php }else{ ?>
									
							<img src="<?php echo base_url();?>images/student/<?php echo $StudentData->image;?>" alt="" style="width:100%;">
							
							<?php 
								}
							?>

                     <table class="table table-condensed" >
                            <tr class="warning" >
                                <th style="width:100%;"><b>Result Information</b><th>
                                <th><th>
                            </tr>
                            <tr class="success" >
                                <th><b>1<sup>st</sup> Semester :</b><th>
                                <th><?php //echo $StudentData->;?><th>
                            </tr> 
                            <tr class="active" >
                                <th><b>2<sup>nd</sup> Semester :</b><th>
                                <th><?php //echo $StudentData->;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>3<sup>rd</sup> Semester :</b><th>
                                <th><?php //echo $StudentData->;?><th>
                            </tr> 
                            <tr class="active" >
                                <th><b>4<sup>th</sup> Semester :</b><th>
                                <th><?php //echo $StudentData->;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>5<sup>th</sup> Semester :</b><th>
                                <th><?php //echo $StudentData->;?><th>
                            </tr> 
                            <tr class="active" >
                                <th><b>6<sup>th</sup> Semester :</b><th>
                                <th><?php //echo $StudentData->;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>7<sup>th</sup> Semester :</b><th>
                                <th><?php //echo $StudentData->;?><th>
                            </tr> 
                            <tr class="active" >
                                <th><b>8<sup>th</sup> Semester :</b><th>
                                <th><?php //echo $StudentData->;?><th>
                            </tr> 
                            <tr class="info" >
                                <th><b>Fainal Resul  :</b><th>
                                <th><?php //echo $StudentData->;?><th>
                            </tr> 
                        </table> 
						</div>	
						<div class="col-md-7">
						<div class="teacher-details-content ml-50">
                        <table class="table table-condensed" >
                            <tr class="warning" >
                                <th><b>Personal Information</b><th>
                            </tr>
                            <tr class=" success" >
                                <th><b>Name :</b> <?php echo '    ';?><?php echo $StudentData->full_name_eng;?><th>
                            </tr> 
                            <tr class=" col-md-6 active" >
                                <th>Bangla Name : <?php echo $StudentData->full_name_bang;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>Board Roll :</b> <?php echo '    ';?><?php echo $StudentData->board_roll;?><th>
                            </tr> 
                            <tr class="active" >
                                <th><b>Board Registation :</b> <?php echo '    ';?><?php echo $StudentData->board_reg;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>Technology :</b> <?php echo '    ';?><?php echo $StudentData->trade;?><th>
                            </tr> 
                            <tr class="active" >
                                <th><b>Shift :</b> <?php echo '    ';?><?php echo $StudentData->shift;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>Session :</b> <?php echo '    ';?><?php echo $StudentData->session;?><th>
                            </tr> 

                            <tr class="active" >
                                <th><b>Date Of Brith :</b> <?php echo '    ';?><?php echo $StudentData->dob;?><th>
                            </tr>
                            <tr class="success" >
                                <th><b>Religion :</b> <?php echo '    ';?><?php echo $StudentData->religion;?><th>
                            </tr> 

                            <tr class="active" >
                                <th><b>Blood Group :</b> <?php echo '    ';?><?php echo $StudentData->blood_group;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>Gender :</b> <?php echo '    ';?><?php echo $StudentData->gender;?><th>
                            </tr> 
                            <tr class="active" >
                                <th><b>Email :</b> <?php echo '    ';?><?php echo $StudentData->student_email;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>Phone :</b> <?php echo '    ';?><?php echo $StudentData->student_phone;?><th>
                            </tr> 
                            <tr class="active" >
                                <th><b>Father's Name :</b> <?php echo '    ';?><?php echo $StudentData->father_name;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>Mother's Name :</b> <?php echo '    ';?><?php echo $StudentData->mother_name;?><th>
                            </tr> 

                            <tr class="active" >
                                <th><b>Present Address :</b> <?php echo '    ';?><?php echo $StudentData->present_address;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>Permanemt Adress :</b> <?php echo '    ';?><?php echo $StudentData->permanent_address;?><th>
                            </tr> 

                            <tr class="active" >
                                <th><b>Guardian Name :</b> <?php echo '    ';?><?php echo $StudentData->guardian_name;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>Guardian Relation  :</b> <?php echo '    ';?><?php echo $StudentData->guardian_relation;?><th>
                            </tr> 
                            <tr class="active" >
                                <th><b>Guardian Phone :</b> <?php echo '    ';?><?php echo $StudentData->guardian_phone;?><th>
                            </tr> 
                            <tr class="success" >
                                <th><b>Guardian NID  :</b> <?php echo '    ';?><?php echo $StudentData->guardian_nid;?><th>
                            </tr> 
                            <tr class="active" >
                                <th><b>Guardian Address :</b> <?php echo '    ';?><?php echo $StudentData->guardian_address;?><th>
                            </tr> 
                        </table>    

                    </div>
                </div>
					</div>
				</div>
			</div>
			<!-- end page content -->