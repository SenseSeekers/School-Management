
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">All Message</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/Message/');?>"> Massage</a>&nbsp;<i class="fa fa-angle-right"></i>
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
														<header>All Message</header>
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
																		<th>Sl</th>
																		<th> User Name </th>
																		<th> Status</th>
																		<th> Action </th>
																	</tr>
																</thead>
						<tbody>

										<?php
										$sl = 0;
											foreach ($ContactMsg as  $message) {
										$sl++;
										?>
										<?php 
										 if($message->status == 0){
										 ?>					
						<tr class="odd gradeX">
							<td style="width: 4%;"><?php echo $sl;?></td>
							<td><?php echo $message->email;?></td>
							<td> <?php echo $message->subject;?> </td>
									
							<td style="width: 13%;">
								<a href="<?php echo base_url('index.php/Auth/Messages/'); ?><?php echo $message->id; ?>" class="btn btn-primary btn-ms">Reply</a>
								<a href="<?php echo base_url('index.php/Auth/messageDelete/');?><?php echo $message->id;?>" class="btn btn-danger btn-ms"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
						<?php  }elseif($message->status == 1){ ?>					
						<tr class="odd gradeX">
							<td style="width: 4%;"><?php echo $sl;?></td>
							<td><?php echo $message->email; ?></td>
							<td> <?php echo $message->subject; ?> </td>
									
							<td style="width: 20%;"> 

								<a href="<?php echo base_url('index.php/Auth/Messages/'); ?><?php echo $message->id; ?>" class="btn btn-warning btn-ms">Reply</a>
								
								<a href="<?php echo base_url('index.php/Auth/messageDelete/');?><?php echo $message->id;?>" class="btn btn-danger btn-ms"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
							 <?php } ?>
							<?php } ?>
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