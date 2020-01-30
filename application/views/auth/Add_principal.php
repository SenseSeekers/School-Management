<?php 
	if(isset($writePrincipal)){
?>
<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Principal Add</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/PrincipalAdd/');?>">PrincipalAdd</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">

						<?php echo form_open_multipart('Auth/writePrincipal/');?>
							<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="name">  Name </label>
									<input type="text" name="name" class="form-control" placeholder=" Enter Your Name ">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="institute"> Institute </label>
									<input type="text" name="institute" class="form-control" placeholder=" Enter Your Institute ">
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="designation">Designation </label>
									<input type="text" name="designation" class="form-control" placeholder="Designation ">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="educational_qualification"> Educational Qualification </label>
									<input type="text" name="educational_qualification" class="form-control" placeholder="Educational Qualification">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="experiences"> Eexperiences </label>
									<input type="text" name="experiences" class="form-control" placeholder="Eexperiences">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="hobby"> hobby </label>
									<input type="text" name="hobby" class="form-control" placeholder="Hobby">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="massage"> Message</label>
								<textarea name="message" id="summernote" cols="10" rows="30"> </textarea>
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="About">  About</label>
								<textarea name="about" class="form-control" cols="10" rows="15.5"> </textarea>
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<img src="" id="blah" alt="" style="width:100%;margin: 0px auto;">
									<label for="image">Profile Image</label><br/>
									<input type="file" name="image" class="default" onchange="readURL(this);"  multiple>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
								</div>
							</div> 

							<div class="col-md-6 col-sm-6">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
							</form>		

						</div>
					</div>
				</div>
			</div>
<?php
	}else{
?>
<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Principal Add</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/PrincipalAdd/');?>">PrincipalAdd</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">

						<?php echo form_open_multipart('Auth/updatePrincipal/');?>
							<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="name">  Name </label>
									<input type="text" name="name" class="form-control" value="<?php echo $PrincipalData->name;?>">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="institute"> Institute </label>
									<input type="text" name="institute" class="form-control" placeholder=" Enter Your Institute ">
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="designation">Designation </label>
									<input type="text" name="designation" class="form-control" placeholder="Designation ">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="educational_qualification"> Educational Qualification </label>
									<input type="text" name="educational_qualification" class="form-control" placeholder="Educational Qualification">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="experiences"> Eexperiences </label>
									<input type="text" name="experiences" class="form-control" placeholder="Eexperiences">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="hobby"> hobby </label>
									<input type="text" name="hobby" class="form-control" placeholder="Hobby">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="massage"> Message</label>
								<textarea name="message" id="summernote" cols="10" rows="30"> </textarea>
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="About">  About</label>
								<textarea name="about" class="form-control" cols="10" rows="15.5"> </textarea>
								</div>
							</div>	

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<img src="" id="blah" alt="" style="width:100%;margin: 0px auto;">
									<label for="image">Profile Image</label><br/>
									<input type="file" name="image" class="default" onchange="readURL(this);"  multiple>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
								</div>
							</div> 

							<div class="col-md-6 col-sm-6">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
							</form>		

						</div>
					</div>
				</div>
			</div>
<?php 
	}
?>	