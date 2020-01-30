<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Slider List</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/AddSlider/');?>">Add Slider</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Slider List</li>
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
											<?php 
												foreach ($SliderDataList as $SliderData) {
											?>

											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url();?>images/banner/<?php echo $SliderData->image;?>" alt="n/a" style="width:100%;height: 200px;">
															<div class="profile-usertitle">
																<div class="doctor-name"><?php echo $SliderData->title;?></div>
															</div>
															<div class="btn-group">
									<?php 
										if($SliderData->status==0){
									?>
										<div class="btn-group">
											<a href="<?php echo base_url('index.php/Auth/SliderActiveMethod/'); ?><?php echo $SliderData->id; ?>" type="button" class="btn btn-info">On</a>
											<a href="" type="button" class="btn btn-default">Off</a>
										</div>

									<?php		
										}else{
									?>
										<div class="btn-group">
										<a type="button" class="btn btn-default">On</a>
										<a href="<?php echo base_url('index.php/Auth/SliderInActiveMethod/'); ?><?php echo $SliderData->id; ?>" type="button" class="btn btn-info">Off</a>
										</div>

									<?php 		
										}
									?>
															<a href="<?php echo base_url('index.php/Auth/EditSlider/');?><?php echo $SliderData->id;?>" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>
															<!-------------------------------------------->	
															<a href="<?php echo base_url('index.php/Auth/SliderDelete/'); ?><?php echo $SliderData->id; ?>/<?php echo $SliderData->image;?>" class="btn btn-danger btn-ms" ><i class="fa fa-trash-o "></i></a>

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