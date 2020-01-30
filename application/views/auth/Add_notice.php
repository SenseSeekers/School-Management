
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title"><b>Notice Add</b></div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/NoticeAdd/');?>">Notice Add</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">

						<?php echo form_open_multipart('Auth/writeNotice/');?>
							<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="simpleFormEmail">Published Date </label>
									<input type="date" name="published_date"  class="form-control" placeholder=" Start Date">
								</div>
							</div>	
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="simpleFormEmail"> DeadLine Date </label>
									<input type="date" name="deadline_date" class="form-control" placeholder=" End Date ">
								</div>
							</div>	
						</div>

							<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="simpleFormEmail">Notice Title</label>
									<input type="text" name="title" class="form-control" id="simpleFormEmail" placeholder="Notice Title">
								</div>
							</div>	
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="simpleFormEmail">Tags</label>
									<input type="text" name="notice_tags" class="form-control" placeholder=" Notice Tags ">
								</div>
							</div>	

						<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label for="simpleFormEmail">Notice Content</label>
									<textarea name="notice_body" id="summernote" cols="30" rows="50"> </textarea>
								</div>
						</div>	

						<div class="col-md-12" > 
								<label><h4>File Image</h4></label>
								<input type="file" name="notice_file"  class="default" multiple>
						</div>
						<div class="col-md-12" > 
							<button type="submit" class="btn btn-info">Save</button>
						</div>

							</form>		

						</div>
					</div>
				</div>
			</div>