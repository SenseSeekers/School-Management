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
						<div class="col-sm-6">
							<div class="card-box">
								<div class="card-head">
									<header>Site Identity</header>
								</div>
								<div class="card-body ">
									<form action="<?php echo base_url('index.php/Auth/IdentityRead/');?>" method="post" >
										<input type="hidden" name="id" value="<?php echo $SiteOptionData->id;?>" >
										<div class="form-group">
											<label for="title">Site Title</label>
											<input type="text" class="form-control" name="title" id="title" value="<?php echo $SiteOptionData->title;?>">
										</div>
										<div class="form-group">
											<label for="name">Site Name</label>
											<input type="text" name="name" class="form-control" id="name" value="<?php echo $SiteOptionData->name;?>">
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card-box">
								<div class="card-head">
									<header>Site Logo</header>
								</div>
								<div class="card-body">
									<center><img src="<?php echo base_url();?>images/logo/<?php echo $SiteOptionData->logo;?>" id="blah" alt="" style="width:70%;height:150px; margin: 0px auto;"></center><br/>
								
									<?php echo form_open_multipart('Auth/LogoRead/');?>
										<div class="form-group">
												<input type="hidden" name="id" value="<?php echo $SiteOptionData->id;?>" >
												<input type="hidden" name="old_logo" value="<?php echo $SiteOptionData->logo;?>" >
											 <input type="file" name="logo" onchange="readURL(this);" class="default" multiple>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="card-box">
								<div class="card-head">
									<header>Site Address </header>
								</div>
								<div class="card-body ">

									<form action="<?php echo base_url('index.php/Auth/SiteAddress/');?>" method="post" >
										<input type="hidden" name="id" value="<?php echo $SiteOptionData->id;?>" >
										<div class="form-group">
											<label for="simpleFormPassword">Map</label>
											<textarea class="form-control" rows="8" name="map" > 
												<?php echo $SiteOptionData->map;?>
											</textarea>
										</div>
										<div class="form-group">
											<label for="simpleFormPassword">Address</label>
											<textarea  id="summernote" cols="30" rows="10" name="address" ><?php echo $SiteOptionData->address;?>
									        </textarea>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card-box">
								<div class="card-head">
									<header>Site Contact </header>
								</div>
								<div class="card-body ">
									<form action="<?php echo base_url('index.php/Auth/SiteContactLink/');?>" method="post">
										<input type="hidden" name="id" value="<?php echo $SiteOptionData->id;?>">

										<div class="form-group">
											<label for="phone">phone</label>
											<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $SiteOptionData->phone;?>">
										</div>

										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" class="form-control" name="email" id="email" value="<?php echo $SiteOptionData->email;?>">
										</div>

										<div class="form-group">
											<label for="hotlinephone">Hot line Phone</label>
											<input type="text" class="form-control" id="hotlinephone" name="hotline_phone" value="<?php echo $SiteOptionData->hotline_phone;?>">
										</div>

										<div class="form-group">
											<label for="online">online</label>
											<input type="text" class="form-control" id="online" name="online" value="<?php echo $SiteOptionData->online;?>">
										</div>
										<div class="form-group">
											<label for="facebook">Facebook Link</label>
											<input type="text" class="form-control" id="facebook"
											 name="facebook" value="<?php echo $SiteOptionData->facebook;?>">
										</div>
										<div class="form-group">
											<label for="linkedln">Linkedln Link </label>
											<input type="text" class="form-control" id="linkedln" name="linkedln" value="<?php echo $SiteOptionData->linkedln;?>">
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						</div>

							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- end page content -->