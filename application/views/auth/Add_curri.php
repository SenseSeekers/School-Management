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
									<a class="parent-item" href="<?php echo base_url('index.php/Auth/CurriculumMenu/');?>">Curriculum Menu</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="container">
						<div class="col-md-12 col-sm-12">
							<?php echo form_open_multipart('Auth/writeCurriculum/');?>
							<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="name">Curriculum Menu</label>
									<select  name="curri_id" class="form-control"> 
										<option>Select</option>
										<?php 
											foreach ($CurriDataList as $CurriData) {
										?>
										<option value="<?php echo $CurriData->id;?>"><?php echo $CurriData->name;?></option>
										<?php
											}
										?>
									</select>
								</div>
							</div>	
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="image">file Image</label><br/>
									<input type="file" name="curri_file" class="default" onchange="readURL(this);" multiple>
								</div>
							</div>

							<div class="col-md-2 col-sm-2"><br/>
								<button type="submit" class="btn btn-info">Save</button>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<img src="" id="blah" alt="" style="width:100%; margin: 0px auto;">
								</div>
							</div>

							</div>
							</form>		

						</div>
					</div>

					<div class="row" style="margin-top: 50px;">
						<div class="col-md-12">
							<div class="tabbable-line">
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a  href="#tab1" class="nav-link active" data-toggle="tab">List View</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<?php 
												foreach ($CurriculumDataList as $CurriculumData) {
											?>

											<div class="col-md-4">
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="<?php echo base_url();?>images/curri/<?php echo $CurriculumData->curri_file;?>" alt="n/a" style="width:100%;height: 200px;">
															<div class="profile-usertitle">
																<div class="doctor-name">
																	<?php 
																		$cardata = $this->Auth_model->getCarDetailsById($CurriculumData->curri_id);

																		if(isset($cardata->name)){ echo $cardata->name; }else{ echo 'N/A'; }
																	?>
																</div>
															</div>
															<div class="btn-group">
								
															<a href="<?php echo base_url('index.php/Auth/CurriUpdate/');?><?php echo $CurriculumData->id;?>" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>
															<!-------------------------------------------->	
															<a href="<?php echo base_url('index.php/Auth/CurriculumDelete/'); ?><?php echo $CurriculumData->id; ?>/<?php echo $CurriculumData->curri_file;?>" class="btn btn-danger btn-ms" ><i class="fa fa-trash-o "></i></a>

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

