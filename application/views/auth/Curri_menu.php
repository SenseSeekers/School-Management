	<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Curriculum Board</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li>
									<a class="parent-item" href="<?php echo base_url('index.php/Auth/CurriculumMenu/');?>">Curriculum Add</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="container">
						<div class="col-md-12 col-sm-12">
						<form action="<?php echo base_url('index.php/Auth/writeCurriMenu/');?>" method="post" >
							<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label for="name">Curriculum Menu Name </label>
									<input type="text" name="name" class="form-control" placeholder="Enter  Name">
								</div>
							</div>	
							</div>
							<button type="submit" class="btn btn-info">Save</button>
							</form>		

						</div>
					</div>
				</div>
			</div>
			<!-- start page content-->
			<div class="page-content-wrapper" style="margin-top:-300px;">
				<div class="page-content">
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>Curriculum List</header>
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
																		<th>SL</th>
																		<th> Name </th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																<?php 
																	$sl=0;
																	foreach ($CurriDataList as $CurriData) {
																		$sl++;
																?>
																
																	<tr class="odd gradeX">
																		<td><?php echo $sl;?></td>
																		<td>
																			<?php echo $CurriData->name;?> 
																		</td>
																		<td>
																			<a href="<?php echo base_url('index.php/Auth/CurriculumUpdate/'); ?><?php echo $CurriData->id; ?>" class="btn btn-warning btn-xs">Edit</a>

																			<a href="<?php echo base_url('index.php/Auth/CurriDelete/');?>
																			<?php echo $CurriData->id; ?>/" class="btn btn-danger btn-xs">
																			<i class="fa fa-trash-o ">
																			</i></a>
																		</td>
																	</tr><!-- Button trigger modal -->
															
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
			</div>
			<!-- end page content -->

