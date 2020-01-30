
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">All Notice</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/NoticeAdd/');?>">Notice </a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Notice All</li>
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
														<header>All Notice</header>
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
																	<a href="<?php echo base_url('index.php/Auth/NoticeAdd/');?>" id="addRow"
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
																		<th>sl</th>
																		<th> Notice Title </th>
																		<th> Tags </th>
																		<th> Action </th>
																	</tr>
																</thead>
						<tbody>
						<?php 
						$sl = 0;
							foreach ($NoticeDataList as $NoticeData) {
								$sl++;
						?>
							<tr class="odd gradeX">
								<td class="patient-img">
									<?php echo $sl;?>
								</td>
								<td><a href="<?php echo base_url('index.php/Auth/ViewNotice/');?><?php echo $NoticeData->id;?>"><?php echo $NoticeData->title;?></a></td>
								<td><?php echo $NoticeData->notice_tags;?></td>
								<td style="width:20%;">

								 <a href="<?php echo base_url('index.php/Auth/UpdateNotice/');?><?php echo $NoticeData->id;?>"class="btn btn-primary btn-ms"><i class="fa fa-edit"></i></a>

								<?php 
										if($NoticeData->notice_file != null){
									?>
									<a href="<?php echo base_url('index.php/Auth/NoticeDeletefile/');?><?php echo $NoticeData->id;?>/<?php echo $NoticeData->notice_file;?>" class="btn btn-danger btn-ms"><i class="fa fa-trash-o "></i></a>

									<?php 
										}else{
									?>
									<a href="<?php echo base_url('index.php/Auth/NoticeDelete/');?><?php echo $NoticeData->id;?>" class="btn btn-danger btn-ms"><i class="fa fa-trash-o "></i></a>
									<?php 
										}
									?>

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
			</div>
			<!-- end page content -->