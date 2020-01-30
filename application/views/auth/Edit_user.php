<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Edit User</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="<?php echo base_url('index.php/GaiAdmin/Dashboard/');?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="<?php echo base_url('index.php/GaiUser/Alluser/');?>">User</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Edit User</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Basic Information</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
  							<?php echo form_open_multipart('GaiUser/UserByUpdate/');?>
								<div class="card-body row">

									<input type="hidden" name="id" value="<?php echo $userData->id;?>" >
									<input type="hidden" name="old_image" value="<?php echo $userData->image;?>" >
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="username" value="<?php echo $userData->username;?>"
												id="txtFirstName">
											<label class="mdl-textfield__label">User Name</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="email" name="email" value="<?php echo $userData->email;?>"
												id="txtemail">
											<label class="mdl-textfield__label">Email</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" name="phone" value="<?php echo $userData->phone;?>" id="txtRollNo">
											<label class="mdl-textfield__label">Phone No</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $userData->nid;?>" name="nid" id="txtPNo">
											<label class="mdl-textfield__label" for="txtPNo"> National Id
												</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
										<select class="form-control input-height" name="type" value="<?php echo $userData->type;?>">
													<option value="<?php echo $userData->type;?>"><?php echo $userData->type;?></option>
													<option value="Admin">Admin</option>
													<option value="Operator">Operator</option>
													<option value="Editor">Editor</option>
													<option value="Author">Author</option>
											</select>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $userData->created_at;?>"
												id="date">
											<label class="mdl-textfield__label">Registration Date</label>
										</div>
									</div>
									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" name="address" type="text" value="<?php echo $userData->address;?>"id="text5">
											<label class="mdl-textfield__label" for="text5">Address</label>
										</div>
									</div>

									<div class="col-lg-6 p-t-20">
										<div
											class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
											<input class="mdl-textfield__input" type="text" value="<?php echo $userData->password;?>"id="text5">
											<label class="mdl-textfield__label" name="password" for="text5">Password</label>
										</div>
									</div>

									<div class="col-lg-4 p-t-20">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
										<label class="control-label col-md-12">Profile Photo
										</label>
											<img src="<?php echo base_url();?>images/user/<?php echo $userData->image;?>" id="blah" alt="" style="width:100%;height:180px;">
										</div>
									</div>

									<div class="col-lg-8 p-t-20" style="margin-top:30px;">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width" name="image">
										<label class="control-label col-md-12">Upload Photo
										</label>
										<div class="col-md-612" >
													<input type="file" name="image" onchange="readURL(this);" class="default" multiple>
										</div>
									</div>

									<div class="col-lg-6p-t-20">
									</div>
									<div class="col-lg-12 p-t-20 text-center">
										<button type="submit"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
										<button type="button"
											class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
									</div>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->