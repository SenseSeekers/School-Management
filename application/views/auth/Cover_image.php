<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Site Setting</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Site Setting</li>
							</ol>
						</div>
					</div>
					<div class="row">

						<div class="col-sm-4">
							<div class="card-box">
								<div class="card-head">
									<header>About /History /Cover Image</header>
								</div>
								<div class="card-body">
									<img src="<?php echo base_url();?>images/coverimg/<?php echo $coverimageData->site_img;?>" id="blah" style="width:100%;"><br/><br/>
									<?php echo form_open_multipart('Auth/SiteCover/');?>
										<div class="form-group">
											<input type="hidden" name="id" value="<?php echo $coverimageData->id;?>">
											<input type="hidden" name="old_coverimg" value="<?php echo $coverimageData->site_img;?>" >
											<input type="file" name="site_img" onchange="readURL(this);" class="default" multiple>
										</div>
										<button type="submit" class="btn btn-warning">Update</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card-box">
								<div class="card-head">
									<header>Department Cover Image</header>
								</div>
								<div class="card-body">
									<img src="<?php echo base_url();?>images/coverimg/<?php echo $coverimageData->tech_img;?>" style="width:100%;"><br/><br/>
									<?php echo form_open_multipart('Auth/Departmentcover/');?>
										<div class="form-group">
											<input type="hidden" name="id" value="<?php echo $coverimageData->id;?>">
											<input type="hidden" name="old_coverimg" value="<?php echo $coverimageData->tech_img;?>" >
											<input type="file" name="tech_img"class="default" multiple>
										</div>
										<button type="submit" class="btn btn-warning">Update</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card-box">
								<div class="card-head">
									<header>Teacher Cover Image</header>
								</div>
								<div class="card-body">
									<img src="<?php echo base_url();?>images/coverimg/<?php echo $coverimageData->teacher_img;?>" style="width:100%;"><br/><br/>
									<?php echo form_open_multipart('Auth/Teachercover/');?>
										<div class="form-group">
											<input type="hidden" name="id" value="<?php echo $coverimageData->id;?>">
											<input type="hidden" name="old_coverimg" value="<?php echo $coverimageData->teacher_img;?>" >
											<input type="file" name="teacher_img" class="default" multiple>
										</div>
										<button type="submit" class="btn btn-warning">Update</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card-box">
								<div class="card-head">
									<header>Student Cover Image</header>
								</div>
								<div class="card-body">
									<img src="<?php echo base_url();?>images/coverimg/<?php echo $coverimageData->student_img;?>"  style="width:100%;"><br/><br/>
									<?php echo form_open_multipart('Auth/StudentCover/');?>
										<div class="form-group">
											<input type="hidden" name="id" value="<?php echo $coverimageData->id;?>">
											<input type="hidden" name="old_coverimg" value="<?php echo $coverimageData->student_img;?>" >
											<input type="file" name="student_img" class="default" multiple>
										</div>
										<button type="submit" class="btn btn-warning">Update</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card-box">
								<div class="card-head">
									<header>Notice Cover Image </header>
								</div>
								<div class="card-body">
									<img src="<?php echo base_url();?>images/coverimg/<?php echo $coverimageData->notice_img;?>" style="width:100%;"><br/><br/>
									<?php echo form_open_multipart('Auth/NoticeCover/');?>
										<div class="form-group">
											<input type="hidden" name="id" value="<?php echo $coverimageData->id;?>">
											<input type="hidden" name="old_coverimg" value="<?php echo $coverimageData->notice_img;?>" >
											<input type="file" name="notice_img" class="default" multiple>
										</div>
										<button type="submit" class="btn btn-warning">Update</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card-box">
								<div class="card-head">
									<header>Event Cover Image </header>
								</div>
								<div class="card-body">
									<img src="<?php echo base_url();?>images/coverimg/<?php echo $coverimageData->event_img;?>"  style="width:100%;"><br/><br/>
									<?php echo form_open_multipart('Auth/eventCover/');?>
										<div class="form-group">
											<input type="hidden" name="id" value="<?php echo $coverimageData->id;?>">
											<input type="hidden" name="old_coverimg" value="<?php echo $coverimageData->event_img;?>" >
											<input type="file" name="event_img" class="default" multiple>
										</div>
										<button type="submit" class="btn btn-warning">Update</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card-box">
								<div class="card-head">
									<header>Curriculam Cover Image;</header>
								</div>
								<div class="card-body">
									<img src="<?php echo base_url();?>images/coverimg/<?php echo $coverimageData->curri_img;?>"style="width:100%;"><br/><br/>
									<?php echo form_open_multipart('Auth/CurriculamCover/');?>
										<div class="form-group">
											<input type="hidden" name="id" value="<?php echo $coverimageData->id;?>">
											<input type="hidden" name="old_coverimg" value="<?php echo $coverimageData->curri_img;?>" >
											<input type="file" name="curri_img" class="default" multiple>
										</div>
										<button type="submit" class="btn btn-warning">Update</button>
									</form>
								</div>
							</div>
						</div>
				</div>
			</div>
			<!-- end page content -->