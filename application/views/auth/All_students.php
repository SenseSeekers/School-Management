<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Student List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/Allstudents/');?>">Student List</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List View</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Student</header>
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
																		<th> Roll </th>
																		<th> Registation </th>
																		<th> Department </th>
																		<th> Session </th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																<?php 
																	foreach ($StudentDataList as $StudentData) {
																?>
																
																	<tr class="odd gradeX">
																		<td class="patient-img">

                            	<?php if(empty($StudentData->image == !null)){ ?>
                            	<img class="uk-preserve-width uk-border-circle" src="<?php echo base_url();?>images/user.png" alt=""> 
                            	<?php
                            	}else{
                            	?>
                            	<img class="uk-preserve-width uk-border-circle" src="<?php echo base_url();?>images/student/<?php echo $StudentData->image;?>" alt=""> 
                            	<?php } ?>
																		</td>
																		<td>
																			<a href="<?php echo base_url('index.php/Auth/DetailsStudents/');?><?php echo $StudentData->id;?>">
																			<?php echo $StudentData->full_name_eng;?>
																			</a>
																	</td>
																		<td class="left"><?php echo $StudentData->board_roll;?></td>
																		<td class="left"><?php echo $StudentData->board_reg;?> </td>
																		<td class="left"><?php echo $StudentData->trade;?> </td>
																		<td class="left"><?php echo $StudentData->session;?> </td>
								<td class="center"> 
									<?php 
										if($StudentData->status==0){
									?>
										<div class="btn-group">
											<a href="<?php echo base_url('index.php/Auth/studentActiveMethod/'); ?><?php echo $StudentData->id; ?>" type="button" class="btn btn-default">On</a>
											<a type="button" class="btn btn-info">Off</a>
										</div>

									<?php		
										}else{
									?>
										<div class="btn-group">
										<a type="button" class="btn btn-info">On</a>
										<a href="<?php echo base_url('index.php/Auth/studentInActiveMethod/'); ?><?php echo $StudentData->id; ?>" type="button" class="btn btn-default">Off</a>
										</div>

									<?php 		
										}
									?>
											
									<?php 
										if($StudentData->image != null){
									?>
									<a href="<?php echo base_url('index.php/Auth/StudentRemoveByIdImg/');?><?php echo $StudentData->id; ?>/<?php echo $StudentData->image; ?>" class="btn btn-danger">D</a>

									<?php 
										}else{
									?>

									<a href="<?php echo base_url('index.php/Auth/StudentRemoveById/');?><?php echo $StudentData->id; ?>" class="btn btn-danger">D</a>
									<?php 
										}
									?>	</td>						

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
			</div>
			<!-- end page content -->