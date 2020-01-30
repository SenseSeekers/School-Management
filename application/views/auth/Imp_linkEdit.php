	<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Link Board</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/LinkAdd/');?>">Link Add</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="container">
						<div class="col-md-12 col-sm-12">
						<form action="<?php echo base_url('index.php/Auth/updateImpLink/');?>" method="post" >
							<div class="row">
							<div class="col-md-8 col-sm-8">
								<input type="hidden" name="id" class="form-control" value="<?php if(isset($LinkDataById)){ echo $LinkDataById->id; } ?>">

								<div class="form-group">
									<label for="title">Site Title</label>
									<input type="text" name="title" class="form-control" value="<?php if(isset($LinkDataById)){ echo $LinkDataById->title; } ?>">
								</div>
								<div class="form-group">
									<label for="title">Site Link</label>
									<input type="text" name="link" class="form-control" value="<?php if(isset($LinkDataById)){ echo $LinkDataById->link; } ?>">
								</div>
							</div>	
							</div>
							<button type="submit" class="btn btn-warning">Update</button>
							</form>		

						</div>
					</div>
				</div>
			</div>

		<!------------------------------------------------------------------------>
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
														<header>All Site Link</header>
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
																		<th> Title </th>
																		<th> Link </th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																<?php 
																	$sl=0;
																	foreach ($LinkDataList as $LinkData) {
																		$sl++;
																?>
																
																	<tr class="odd gradeX">
																		<td><?php echo $sl;?></td>
																		<td><?php echo $LinkData->title;?></td>
																		<td><a href="<?php echo $LinkData->link;?>" target="_blank"><?php echo $LinkData->link;?></a></td>
																		<td>
																			<a href="<?php echo base_url('index.php/Auth/ImportantLinkEdit/'); ?><?php echo $LinkData->id; ?>" class="btn btn-warning btn-xs">Edit</a>

																			<a href="<?php echo base_url('index.php/Auth/LinkDelete/');?>
																			<?php echo $LinkData->id; ?>/" class="btn btn-danger btn-xs">
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

