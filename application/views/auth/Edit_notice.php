<?php 
//	var_dump($NoticeData); die();
?>
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
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
								<li><a class="parent-item" href="">Notice Edit</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">

						<?php echo form_open_multipart('Auth/EditNotice/');?>
							<div class="row">

							<input type="hidden" name="id" class="form-control" value="<?php echo $NoticeData->id;?>">

							<input type="hidden" name="old_image"  class="form-control" value="<?php echo $NoticeData->notice_file;?>">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="simpleFormEmail">Published Date </label>
									<input type="text" name="published_date" id="date-start" class="form-control" value="<?php echo $NoticeData->published_date;?>">
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="simpleFormEmail"> DeadLine Date </label>
									<input type="text" name="deadline_date" id="date-end"class="form-control"  value="<?php echo $NoticeData->deadline_date;?>">
								</div>
							</div>	
						</div>

							<div class="row">

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="simpleFormEmail">Notice Title</label>
									<input type="text" name="title" class="form-control" id="simpleFormEmail"  value="<?php echo $NoticeData->title;?>">
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="simpleFormEmail">Tags</label>
									<input type="text" name="notice_tags" class="form-control"  value="<?php echo $NoticeData->notice_tags;?>">
								</div>
							</div>	

						<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label for="simpleFormEmail">Notice Content</label>
									<textarea name="notice_body" id="summernote" cols="30" rows="50">
										<?php echo $NoticeData->notice_body;?>
									</textarea>
								</div>
						</div>	

						<div class="col-md-12 col-sm-12">
							<div class="form-group">
								<img src="<?php echo base_url()?>images/notice/<?php echo $NoticeData->notice_file?>" id="blah" alt="" style="width:100%; margin: 0px auto;">
							</div>
						</div>

						<div class="col-md-12" > 
							<label><h4>PDF</h4></label>
							<input type="file" name="notice_file"  class="default"  onchange="readURL(this);"multiple>
							<div>
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						</div>

							</form>		

						</div>
					</div>
				</div>
			</div>