<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Staff List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/AddStaff/');?>">Add Staff</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Staff List</li>
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
														<header>All Staff</header>
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
																		<th> Name </th>
																		<th> Branch </th>
																		<th> Designation </th>
																		<th> Email </th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																<?php 
																	foreach ($StaffDataList as $StaffData) {
																?>
																
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<img src="<?php echo base_url();?>images/Staff/<?php echo $StaffData->image;?>" alt="">
																		</td>
																		<td>
																			<a href="<?php echo base_url('index.php/Auth/DetailsStaff/');?><?php echo $StaffData->id;?>"><?php echo $StaffData->firstname;?><?php echo $StaffData->lastname;?>
																				</a>
																		</td>
																		<td class="left">
																			<?php echo $StaffData->branch;?>
																				
																		</td>
																		<td class="left">
																			<?php echo $StaffData->designation;?> 
																		</td>
																		<td class="left">
																			<?php echo $StaffData->email;?>
																		 </td>
																		<td>
																			<a href="<?php echo base_url('index.php/Auth/UpdateStaff/');?><?php echo $StaffData->id;?>"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
								<a href="<?php echo base_url('index.php/Auth/StaffDelete/');?><?php echo $StaffData->id;?>/<?php echo $StaffData->image;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->