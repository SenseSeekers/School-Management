<!-- start page content-->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Department List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/AddDepartment/');?>">Add Department</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Department List</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List View</a></li>
									<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">
									Grid View</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Department</header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh"
																href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down"
																href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times"
																href="javascript:;"></a>
														</div>
													</div>
													<div class="card-body ">
														<div class="table-scrollable">
															<table
																class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
																id="example4">
																<thead>
																	<tr>
																		<th></th>
																		<th>  Name </th>
																		<th>  Start </th>
																		<th>  Semester</th>
																		<th> Faculty </th>
																		<th>  No of seat </th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																<?php 
																	foreach ($DepartmentDataList as $DepartmentData) {
																?>
																
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="<?php echo base_url();?>images/course/<?php echo $DepartmentData->course_image;?>"
																				alt="">
																		</td>
																		<td><a href="<?php echo base_url('index.php/Auth/DetailsDepartment/');?><?php echo $DepartmentData->id;?>"><?php echo $DepartmentData->title;?></a></td>
																		<td><?php echo $DepartmentData->course_start;?></td>
																		<td><?php echo $DepartmentData->total_semester;?></td>
																		<td><?php echo $DepartmentData->faculty_member;?></td>
																		<td><?php echo $DepartmentData->no_of_seat;?></td>
																		<td>
																			<a href="<?php echo base_url('index.php/Auth/UpdateDepartment/');?><?php echo $DepartmentData->id;?>"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<a href="<?php echo base_url('index.php/Auth/DepartmentDelete/');?><?php echo $DepartmentData->id;?>/<?php echo $DepartmentData->course_image;?>" class="btn btn-danger btn-xs">
																			<i class="fa fa-trash-o ">
																			</i></a>
																		</td>
																	</tr>

																<?php 			
																	}
																?>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2">
										<div class="row">
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url();?>assets/img/prof/prof10.jpg" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Mathematics </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->