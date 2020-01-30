	<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Slider Board</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/SliderAdd/');?>">Slider Add</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
						<?php echo form_open_multipart('Auth/writeSlider/');?>
							<div class="row">

							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label for="title">Slider Title</label>
									<input type="text" name="title" class="form-control" placeholder=" Slider Title">
								</div>
							</div>	
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="image">Slider Image</label><br/>
									<input type="file" name="image" class="default" onchange="readURL(this);" multiple required>
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<img src="" id="blah" alt="" style="width:100%; margin: 0px auto;">
								</div>
								<button type="submit" class="btn btn-info">Save</button>
							</div>

							</form>		

						</div>
					</div>
				</div>
			</div>