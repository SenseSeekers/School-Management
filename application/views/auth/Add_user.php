
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
<!--INVOICE --> 
<?php  
	if(empty($userData->id)){
		$user_id = 'GAI-000001';
	}else{
		$user_id = 'GAI-'.sprintf("%06d",$userData->id+1);
	}
?>

					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add User</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">User</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Add User</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									<header> User Information</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
								</div>
								<div class="card-body" id="bar-parent">
									<div id="form_sample_1" class="form-horizontal">

  							<?php echo form_open_multipart('GaiUser/AddNewUser/');?>

										<div class="form-body">
												<input name="user_id" type="hidden" id="basicinput" class="span8" value="<?php echo $user_id;?>">

											<div class="form-group row">
												<label class="control-label col-md-3">User Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="username" data-required="1"
														placeholder="enter User name"
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Email
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<div class="input-group">
														<input type="text" class="form-control input-height"
															name="email" placeholder="Email Address"> </div>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Role
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="type">
														<option value="">Select </option>
														<option value="Admin">Admin</option>
														<option value="Operator">Operator</option>
														<option value="Editor">Editor</option>
														<option value="Author">Author</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Mobile No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="phone" data-required="1"
														placeholder="enter User name"
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">National Id 
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="nid" data-required="1"
														placeholder="enter National Id"
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Address
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<textarea name="address" placeholder="address"
														class="form-control-textarea" rows="5"></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Password
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="password" name="password" placeholder="enter Password"
														class="form-control input-height" />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">
													Profile Picture	<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="file" name="image" class="default" multiple>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit"
															class="btn btn-info m-r-20">Submit</button>
														<button type="button" class="btn btn-default">Cancel</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->