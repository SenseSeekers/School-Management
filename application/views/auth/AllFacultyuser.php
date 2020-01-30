
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">All Faculty  User</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/GaiAdmin/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/User/Alluser/');?>"> All  User </a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
							<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List
											View</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All User</header>
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
							$sl=0;
							foreach ($useralldata as $userdata) {
								$sl++;
						?>
						<?php if($userdata->user_type == 'Administrator'){
						?>

						<tr class="odd gradeX">
						<td style="width: 4%;"><?php echo $sl;?></td>
						<td><?php echo $userdata->user_id;?></td>
								<td class="left" style="width: 13%;"> 
									<?php 
										if($userdata->status==0){
									?>
										<div class="btn-group">
											<a href="<?php echo base_url('index.php/User/userActive/'); ?><?php echo $userdata->id; ?>" type="button" class="btn btn-default">On</a>
											<a href="" type="button" class="btn btn-info">Off</a>
										</div>

									<?php		
										}else{
									?>
										<div class="btn-group">
										<a type="button" class="btn btn-info">On</a>
										<a href="<?php echo base_url('index.php/User/userInActive/'); ?><?php echo $userdata->id; ?>" type="button" class="btn btn-default">Off</a>
										</div>

									<?php 		
										}
									?>
								</td>
								<td style="width: 13%;">
								<a href="<?php echo base_url('index.php/User/Viewuser/');?><?php echo $userdata->id;?>" class="btn btn-primary btn-ms">V</a>
								 <a href="<?php echo base_url('index.php/User/userDelete/');?><?php echo $userdata->id;?>" class="btn btn-danger btn-ms"><i class="fa fa-trash"></i></a>
								</td>
								</tr>
						<?php }elseif ($userdata->user_type == 'Instructor') { ?>

						<tr class="odd gradeX">
						<td style="width: 4%;"><?php echo $sl;?></td>
						<td><?php echo $userdata->user_id;?></td>
								<td class="left" style="width: 13%;"> 
									<?php 
										if($userdata->status==0){
									?>
										<div class="btn-group">
											<a href="<?php echo base_url('index.php/User/userActive/'); ?><?php echo $userdata->id; ?>" type="button" class="btn btn-default">On</a>
											<a href="" type="button" class="btn btn-info">Off</a>
										</div>

									<?php		
										}else{
									?>
										<div class="btn-group">
										<a type="button" class="btn btn-info">On</a>
										<a href="<?php echo base_url('index.php/User/userInActive/'); ?><?php echo $userdata->id; ?>" type="button" class="btn btn-default">Off</a>
										</div>

									<?php 		
										}
									?>
								</td>
								<td style="width: 13%;">
								<a href="<?php echo base_url('index.php/User/Viewuser/');?><?php echo $userdata->id;?>" class="btn btn-primary btn-ms">V</a>
								 <a href="<?php echo base_url('index.php/User/userDelete/');?><?php echo $userdata->id;?>" class="btn btn-danger btn-ms"><i class="fa fa-trash"></i></a>
								</td>
								</tr>
						<?php }elseif ($userdata->user_type == 'Instructor') { ?>

						<tr class="odd gradeX">
						<td style="width: 4%;"><?php echo $sl;?></td>
						<td><?php echo $userdata->user_id;?></td>
								<td class="left" style="width: 13%;"> 
									<?php 
										if($userdata->status==0){
									?>
										<div class="btn-group">
											<a href="<?php echo base_url('index.php/User/userActive/'); ?><?php echo $userdata->id; ?>" type="button" class="btn btn-default">On</a>
											<a href="" type="button" class="btn btn-info">Off</a>
										</div>

									<?php		
										}else{
									?>
										<div class="btn-group">
										<a type="button" class="btn btn-info">On</a>
										<a href="<?php echo base_url('index.php/User/userInActive/'); ?><?php echo $userdata->id; ?>" type="button" class="btn btn-default">Off</a>
										</div>

									<?php 		
										}
									?>
								</td>
								<td style="width: 13%;">
								<a href="<?php echo base_url('index.php/User/Viewuser/');?><?php echo $userdata->id;?>" class="btn btn-primary btn-ms">V</a>
								 <a href="<?php echo base_url('index.php/User/userDelete/');?><?php echo $userdata->id;?>" class="btn btn-danger btn-ms"><i class="fa fa-trash"></i></a>
								</td>
								</tr>
						<?php }elseif ($userdata->user_type == 'Management') { ?>

						<tr class="odd gradeX">
						<td style="width: 4%;"><?php echo $sl;?></td>
						<td><?php echo $userdata->user_id;?></td>
								<td class="left" style="width: 13%;"> 
									<?php 
										if($userdata->status==0){
									?>
										<div class="btn-group">
											<a href="<?php echo base_url('index.php/User/userActive/'); ?><?php echo $userdata->id; ?>" type="button" class="btn btn-default">On</a>
											<a href="" type="button" class="btn btn-info">Off</a>
										</div>

									<?php		
										}else{
									?>
										<div class="btn-group">
										<a type="button" class="btn btn-info">On</a>
										<a href="<?php echo base_url('index.php/User/userInActive/'); ?><?php echo $userdata->id; ?>" type="button" class="btn btn-default">Off</a>
										</div>

									<?php 		
										}
									?>
								</td>
								<td style="width: 13%;">
								<a href="<?php echo base_url('index.php/User/Viewuser/');?><?php echo $userdata->id;?>" class="btn btn-primary btn-ms">V</a>
								 <a href="<?php echo base_url('index.php/User/userDelete/');?><?php echo $userdata->id;?>" class="btn btn-danger btn-ms"><i class="fa fa-trash"></i></a>
								</td>
								</tr>
						<?php }elseif ($userdata->user_type == 'Demonstrator') { ?>

						<tr class="odd gradeX">
						<td style="width: 4%;"><?php echo $sl;?></td>
						<td><?php echo $userdata->user_id;?></td>
								<td class="left" style="width: 13%;"> 
									<?php 
										if($userdata->status==0){
									?>
										<div class="btn-group">
											<a href="<?php echo base_url('index.php/User/userActive/'); ?><?php echo $userdata->id; ?>" type="button" class="btn btn-default">On</a>
											<a href="" type="button" class="btn btn-info">Off</a>
										</div>

									<?php		
										}else{
									?>
										<div class="btn-group">
										<a type="button" class="btn btn-info">On</a>
										<a href="<?php echo base_url('index.php/User/userInActive/'); ?><?php echo $userdata->id; ?>" type="button" class="btn btn-default">Off</a>
										</div>

									<?php 		
										}
									?>
								</td>
								<td style="width: 13%;">
								<a href="<?php echo base_url('index.php/User/Viewuser/');?><?php echo $userdata->id;?>" class="btn btn-primary btn-ms">V</a>
								 <a href="<?php echo base_url('index.php/User/userDelete/');?><?php echo $userdata->id;?>" class="btn btn-danger btn-ms"><i class="fa fa-trash"></i></a>
								</td>
								</tr>
						<?php } ?>
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