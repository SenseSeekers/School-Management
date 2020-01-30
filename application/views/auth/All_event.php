<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Event List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/EventAdds/');?>">Add Event</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Event List</li>
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
														<header>All Event </header>
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
																	<a href="<?php echo base_url('index.php/Auth/AddEvent /');?>" id="addRow"
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
																		<th> Title </th>
																		<th> Venue </th>
																		<th> Start Time </th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																<?php 
																	foreach ($EventDataList as $EventData) {
																?>
																
																	<tr class="odd gradeX">
																		<td class="patient-img">
					<img src="<?php echo base_url();?>images/Event/<?php echo $EventData->image;?>"
																				alt="">
																		</td>
																		<td>
																			<?php echo $EventData->title;?> 
																		</td>
																		<td>
																			<?php echo $EventData->venue;?>  
																		</td>
																		<td class="left"><?php echo $EventData->start_time;?></td>
																		<td>
																			<a href="<?php echo base_url('index.php/Auth/UpdateEvent/');?><?php echo $EventData->id;?>"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
								<a href="<?php echo base_url('index.php/Auth/EventDelete/');?><?php echo $EventData->id;?>/<?php echo $EventData->image;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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

										<?php 
											foreach ($EventDataList as $EventData) {
										?>
											
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url();?>images/Event/<?php echo $EventData ->image;?>" alt="n/a" style="width:100%;height: 200px;">
															<div class="profile-usertitle">
																<div class="doctor-name"><?php echo $EventData ->title;?></div>
															</div>
															<div class="btn-group">
															<a href="<?php echo base_url('index.php/Auth/UpdateEvent/');?><?php echo $EventData->id;?>" type="button" class="btn btn-primary">
																<i class="fa fa-edit"></i>
															</a>
															<!-------------------------------------------->	
															
								<a href="<?php echo base_url('index.php/Auth/EventDelete/');?><?php echo $EventData->id;?>/<?php echo $EventData->image;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>

															</div>
														</div>
													</div>
												</div>
											</div>

											<?php 			
												}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->