	<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<?php echo $this->session->flashdata('msg'); ?>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Citizen Board</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/AddCitizen/');?>">Citizen Add</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
						<?php echo form_open_multipart('Auth/EditCitizen/');?>
							<div class="row">	
								<input type="hidden" name="id" class="form-control" value="<?php echo $CitizenData->id;?>">
								<input type="hidden" name="old_image" class="form-control" value="<?php echo $CitizenData->image;?>">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label for="title">Citizen Title</label>
									<input type="text" name="title" class="form-control" value="<?php echo $CitizenData->title;?>">
								</div>
							</div>	
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
								<label for="content"> Citizen Description </label>
								<textarea name="content" id="summernote" cols="10" rows="30"> <?php echo $CitizenData->content;?> </textarea>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="form-group">
									<label for="image">Citizen Image</label><br/>
									<input type="file" name="image" class="default" onchange="readURL(this);" multiple>
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<img src="<?php echo base_url();?>images/citizen/<?php echo $CitizenData->image;?>" id="blah" alt="" style="width:100%; margin: 0px auto;">
								</div>
								<button type="submit" class="btn btn-warning">Update</button>
							</div>

							</form>		

						</div>
					</div>
				</div>
			</div>