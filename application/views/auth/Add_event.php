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
						<?php echo form_open_multipart('Auth/writeEvent/');?>
							<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="start_time">Eeven start Date & time </label>
									<input type="text" name="start_time" id="date-start" class="form-control" placeholder=" Start Date">
								</div>
							</div>	
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="end_time">Eeven End Date & time </label>
									<input type="text" name="end_time" id="date-end"class="form-control" placeholder=" End Date ">
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="title">Event Title</label>
									<input type="text" name="title" class="form-control" placeholder=" Event Title">
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="venue">Event Venue</label>
									<input type="text" name="venue" class="form-control" placeholder="  Enter Event Venue ">
								</div>
							</div>	

							<div class="col-md-12 col-sm-12">
								<div class="form-group">
								<label for="details"> Event Details </label>
								<textarea name="details" id="summernote" cols="10" rows="30"> </textarea>
								</div>
							</div>

							
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="image">Event Image</label><br/>
									<input type="file" name="image" class="default" onchange="readURL(this);" multiple>
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<img src="" id="blah" alt="" style="width:100%; margin: 0px auto;">
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								
								<button type="submit" class="btn btn-info">Save</button>
							</div>

							</form>		

						</div>
					</div>
				</div>
			</div>