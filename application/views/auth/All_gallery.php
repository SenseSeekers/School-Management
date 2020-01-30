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
			<!-- end page content -->
										<div class="row">

										<?php 
											foreach ($GalleryDataList as $GalleryData) {
										?>
											
											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url();?>images/gallery/<?php echo $GalleryData ->image;?>" alt="n/a" style="width:100%;height: 200px;">
															<div class="profile-usertitle">
																<div class="doctor-name"><?php echo $GalleryData ->caption;?></div>
															</div>
															<div class="btn-group">
															<a href="<?php echo base_url('index.php/Auth/UpdateEvent/');?><?php echo $GalleryData->id;?>" type="button" class="btn btn-primary">
																<i class="fa fa-edit"></i>
															</a>
															<!-------------------------------------------->	
															
								<a href="<?php echo base_url('index.php/Auth/GallaryDelete/');?><?php echo $GalleryData->id;?>/<?php echo $GalleryData->image;?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>

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
			</div>