<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Instructor  List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/AddFaculty/');?>">Add Faculty</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Instructor  List</li>
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
														<header>All Instructor</header>
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
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	<a href="<?php echo base_url('index.php/Auth/AddFaculty/');?>" id="addRow"
																		class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
														</div>
														<div class="table-scrollable">
															<table
																class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
																id="example4">
																<thead>
																	<tr>
																		<th></th>
																		<th> Name </th>
																		<th> Instructor </th>
																		<th> Designation </th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																<?php 
																	foreach ($PrincipalDataList as $PrincipalData) {
																?>
																
																	<tr class="odd gradeX">
																		<td class="patient-img">
																		<img src="<?php echo base_url();?>images/teacher/<?php echo $PrincipalData->image;?>"
																				alt="">
																		</td>
																		<td>
																			<a href="<?php echo base_url('index.php/Auth/DetailsFaculty/');?><?php echo $PrincipalData->id;?>">
																			<?php echo $PrincipalData->firstname;?>
																			<?php echo $PrincipalData->lastname;;?> 
																			</a>
																	</td>
																		<td class="left"><?php echo $PrincipalData->department;?></td>
																		<td class="left">
																			<?php echo $PrincipalData->designation;?> </td>
																		<td>
																			<?php if($PrincipalData->principal == 1){ ?>
																			<a href="#" class="btn btn-primary btn-xs">P</a>
																			<?php 	}else{ ?><a href="<?php echo base_url('index.php/Auth/Principal/'); ?><?php echo $PrincipalData->id; ?>" class="btn btn-default btn-xs">P</a><?php }	?>
																			
																			<a href="<?php echo base_url('index.php/Auth/UpdateFaculty/');?><?php echo $PrincipalData->id;?>"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
		<?php if($PrincipalData->image== !null){
		?>
		<a href="<?php echo base_url('index.php/Auth/FacultyDeleteimg/');?><?php echo $PrincipalData->id;?>/<?php echo $PrincipalData->image;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
		<?php
		}else{ ?>
		<a href="<?php echo base_url('index.php/Auth/FacultyDelete/');?><?php echo $PrincipalData->id;?>/<?php echo $PrincipalData->image;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
		<?php }?>																	
																		</td>
																	</tr>

																<?php 			
																	}
																?>
<!-------------------------------------------------------------------->
																<?php 
																	foreach ($FacultyDataList as $FacultyData) {
																?>
<?php 
 if($FacultyData->type == 'Instructor'){
?>
																	<tr class="odd gradeX">
																		<td class="patient-img">
																		<img src="<?php echo base_url();?>images/teacher/<?php echo $FacultyData->image;?>"
																				alt="">
																		</td>
																		<td>
																			<a href="<?php echo base_url('index.php/Auth/DetailsFaculty/');?><?php echo $FacultyData->id;?>">
																			<?php echo $FacultyData->firstname;?>
																			<?php echo $FacultyData->lastname;;?> 
																			</a>
																	</td>
																		<td class="left"><?php echo $FacultyData->department;?></td>
																		<td class="left">
																			<?php echo $FacultyData->designation;?> </td>
																		<td>
																			
																			<a href="<?php echo base_url('index.php/Auth/UpdateFaculty/');?><?php echo $FacultyData->id;?>"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>	
		<?php if($FacultyData->image == !null){ ?>
		<a href="<?php echo base_url('index.php/Auth/FacultyDeleteimg/');?><?php echo $FacultyData->id;?>/<?php echo $FacultyData->image;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
		<?php
		}else{ ?>
		<a href="<?php echo base_url('index.php/Auth/FacultyDelete/');?><?php echo $FacultyData->id;?>/<?php echo $FacultyData->image;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
		<?php }?>	
																		</td>
																	</tr>
<?php }?>
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