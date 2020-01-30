	<?php //var_dump($EventData); die();?>
	<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Event Edit</div>
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
						<?php echo form_open_multipart('Auth/EditEvent/');?>
							<div class="row">
							<div class="col-md-6 col-sm-6">

							<input type="hidden" name="id" class="form-control" value="<?php echo $EventData->id;?>">
							<input type="hidden" name="old_image"  class="form-control" value="<?php echo $EventData->image;?>">
							
								<div class="form-group">
									<label for="start_time">Eeven start Date & time </label>
									<input type="text" name="start_time" id="date-start" class="form-control" value="<?php echo $EventData->start_time;?>">
								</div>
							</div>	
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="end_time">Eeven End Date & time </label>
									<input type="text" name="end_time" id="date-end"class="form-control" value="<?php echo $EventData->end_time;?>">
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="title">Event Title</label>
									<input type="text" name="title" class="form-control" value="<?php echo $EventData->title;?>" >
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="venue">Event Venue</label>
									<input type="text" name="venue" class="form-control" value="<?php echo $EventData->venue;?>" >
								</div>
							</div>	

							<div class="col-md-12 col-sm-12">
								<div class="form-group">
								<label for="details"> Event Details </label>
								<textarea name="details" id="summernote" cols="10" rows="30">
									<?php echo $EventData->details;?>
								 </textarea>
								</div>
							</div>

							
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<img src="<?php echo base_url();?>images/Event/<?php echo $EventData->image;?>" id="blah" alt="" style="width:100%; margin: 0px auto;">
								</div>
							</div>

							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="image">Event Image</label><br/>
									<input type="file" name="image" class="default" onchange="readURL(this);" multiple>
								</div>

								<div>
								<button type="submit" class="btn btn-warning">Update</button>
								</div>

							</div>

							</form>		

						</div>
					</div>
				</div>
			</div>