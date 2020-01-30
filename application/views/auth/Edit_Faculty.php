	<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Faculty Edit</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
						<?php echo form_open_multipart('Auth/EditFaculty/');?>
							<div class="row">

							<input type="hidden" name="id" class="form-control" value="<?php echo $FacultyData->id;?>">
							<input type="hidden" name="old_image" class="form-control" value="<?php echo $FacultyData->image;?>">

							<input type="hidden" name="user_profile_id" class="form-control" value="<?php echo $FacultyData->user_profile_id;?>" readonly>
							
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="firstname"> First Name </label>
									<input type="text" name="firstname" class="form-control"  value="<?php echo $FacultyData->firstname;?>">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="Lastname">  Last Name</label>
									<input type="text" name="lastname" class="form-control" value="<?php echo $FacultyData->lastname;?>">
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="department"> Department </label>
									<input type="text" name="department" class="form-control" value="<?php echo $FacultyData->department;?>">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="designation">Designation </label>
									<input type="text" name="designation" class="form-control"  value="<?php echo $FacultyData->designation;?>">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="educational_qualification"> Educational Qualification </label>
									<input type="text" name="educational_qualification" class="form-control"  value="<?php echo $FacultyData->educational_qualification;?>">
								</div>
							</div> 

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="experiences"> Eexperiences </label>
									<input type="text" name="experiences" class="form-control"  value="<?php echo $FacultyData->experiences;?>">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="Email">Email</label><br/>
									<input type="email" name="email" class="form-control"  value="<?php echo $FacultyData->email;?>">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="phone">Phone</label><br/>
									<input type="text" name="phone" class="form-control"  value="<?php echo $FacultyData->phone;?>">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="hobby">Hobby </label>
									<input type="text" name="hobby" class="form-control"  value="<?php echo $FacultyData->hobby;?>">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="facebook_link"> Facebook Link </label>
									<input type="text" name="facebook_link" class="form-control" value="<?php echo $FacultyData->facebook_link;?>" >
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="About">  About</label>
								<textarea name="about" class="form-control" cols="50" rows="15"><?php echo $FacultyData->about;?></textarea>
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
								<label for="Message"> Message</label>
								<textarea name="message"  class="form-control" cols="50" rows="15"> <?php echo $FacultyData->message;?></textarea>
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="image">Profile Image</label><br/>
									<img src="<?php echo base_url();?>images/teacher/<?php echo $FacultyData->image;?>" id="blah" alt="" style=" width:100%;margin: 0px auto;"><br/><br/>
									<input type="file" name="image" class="default" onchange="readURL(this);"  multiple>
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<button type="submit" class="btn btn-warning">update</button>
							</div>
							</form>		

						</div>
					</div>
				</div>
			</div>