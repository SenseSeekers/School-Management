<!-- start page content-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title"><h1>Details____<?php echo $DepartmentData->title;?></h1></div>
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
                <div class="col-md-7">
                        <div class="course-details-content">
                            <h2><?php echo $DepartmentData->title;?></h2>
                            <p  style="text-align: justify;"><?php echo $DepartmentData->details;?></p>
                            <div class="course-details-left">
                                <div class="single-course-left">
                                    <h3>About Course</h3>
                                    <p style="text-align: justify;"><?php echo $DepartmentData->about_course;?></p>
                                </div>
                                <div class="single-course-left">
                                    <h3>How to Apply</h3>
                                    <p  style="text-align: justify;"><?php echo $DepartmentData->apply_process;?></p>
                                </div>
                            </div>
                        </div>
                        </div>
                <div class="col-md-5">
                        <div class="courses-details-img">
                            <img src="<?php echo base_url();?>images/course/<?php echo $DepartmentData->course_image;?>" alt="courses-details" style="width:100%;">
                        </div>
                                <div class="single-course-left">
                                    <h3>The syllabus</h3>
                                    <p class="margin"  style="text-align: justify;"><?php echo $DepartmentData->curriculumn;?></p>
                                </div>
                            <div class="course-details-right">
                                <h3>Course Feature</h3>
                                <ul>
                                    <li>Course Start &mdash;&mdash;&mdash;&mdash;&mdash;&mdash; <span><?php echo $DepartmentData->course_start;?></span></li>
                                    <li>Course Duration &mdash;&mdash;&mdash; <span><?php echo $DepartmentData->course_duration;?> Years</span></li>
                                    <li>Total Semester &mdash;&mdash;&mdash;&mdash;<span><?php echo $DepartmentData->total_semester;?> </span>
                            		</li>
                                    <li>Class Duration &mdash;&mdash;&mdash;&mdash;<span><?php echo $DepartmentData->class_duration;?> Hours</span></li>
                                    <li>Shift &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<span> </span></li>
                                    <li>Number of seats &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<span><?php echo $DepartmentData->no_of_seat;?> </span></li>
                                    <li>Instructor &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<span><?php echo $DepartmentData->faculty_member;?> </span></li>
                                    <li>Skill level&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<span>success_level</span></li>
                                    <li>Language &mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<span></span></li>
                                </ul>
                            </div>
                </div>
				</div>
				</div>
			</div>
			<!-- end page content -->