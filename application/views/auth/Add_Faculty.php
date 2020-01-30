	<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
									<!------>
									<?php echo $this->session->flashdata('msg'); ?>
									<!------>
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Faculty / Administrator Add</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url('index.php/Auth/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/Auth/FacultyAdd/');?>">Faculty Add</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
						<?php echo form_open_multipart('Auth/writeFaculty/');?>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<label for="Email">email</label><br/>
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Email" required>
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<label for="Email">Type</label><br/>
								<select class="form-control" name="type" required>
									<option value=""> Select Type </option>
									<option value="DepartmentalHead"> Department Head </option>
									<option value="Instructor"> Instructor </option>
									<option value="Management"> Management </option>
									<option value="Demonstrator"> Demonstrator </option>
									<option value="Administrator"> Administrator </option>
								</select>
							</div>

							<div class="col-md-6 col-sm-6">
								<label for="Email">Department</label><br/>
								<select class="form-control" name="department" required>
									<option value=""> Select Department </option>
									<?php foreach ($departments as $dept) {	?>
										<option value="<?php echo $dept->title; ?>"><?php echo $dept->title; ?></option>
									<?php }	?>
								</select>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="designation">Designation </label>
									<input type="text" name="designation" class="form-control" placeholder="Designation " required>
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<button type="submit" class="btn btn-primary">Create Member</button>
							</div>

						</div>
						</form>		
					</div>
				</div>
			</div>