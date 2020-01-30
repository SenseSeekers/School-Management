
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
                                    <!------>
                                    <?php echo $this->session->flashdata('msg'); ?>
                                    <!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Event Board</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/EventAdd/');?>">Event Add</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<?php echo validation_errors();?>
								<?php echo form_open_multipart('Auth/writeGallery/');?>
							<div class="row">

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="caption">Caption</label>
									<input type="text" name="caption" class="form-control" placeholder=" caption">
								</div>
							</div>	
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="venue">Type</label>
									<select class="form-control" name="type">
											<option value="" >Select Type</option>
											<option value="Image">Image</option>
											<option value="Video">Video</option>
									</select>	
								</div>
							</div>	

							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="image">Event Image</label><br/>
									<input type="file" multiple="multiple" name="image" class="form-control" onchange="readURL(this);" required/>
								</div>
							</div>

							<div class="col-md-4 col-sm-4"><br/>
								<button type="submit" class="btn btn-primary">Save</button>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<img src="" id="blah" alt="" style="width:100%; margin: 0px auto;">
								</div>
							</div>

							</form>		

						</div>
					</div>
				</div>
			</div>