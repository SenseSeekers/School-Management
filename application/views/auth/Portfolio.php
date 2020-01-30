<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Site Setting __ Portfolio</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Portfolio</li>
							</ol>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Portfolio Edit</header>
								</div>
								<div class="card-body ">

									<?php echo form_open_multipart('Auth/PortfoliRead/');?> 
										<input type="hidden" name="id" value="<?php echo $SiteOptionData->id;?>" >
										<div class="form-group">
											<label for="title">Portfolio Title</label>
											<input type="text" class="form-control" name="portfolio_title" id="title" value="<?php echo $SiteOptionData->portfolio_title;?>">
										</div>
										<div class="form-group">
											<label for="simpleFormPassword">Portfolio Details</label>
											<textarea  id="summernote" cols="30" rows="20" name="portfolio_content" ><?php echo $SiteOptionData->portfolio_content;?>
									        </textarea>
										</div>

										<div class="card-body">
											<img src="<?php echo base_url();?>images/<?php echo $SiteOptionData->portfolio_background;?>" id="blah" alt="" style="width:100%; margin: 0px auto;" alt="n/a">
											<div class="form-group">	
						<input type="hidden" name="old_image" value="<?php echo $SiteOptionData->portfolio_background;?>" >
												<br/>
											<label for="about image"> Image </label> 
											 <input type="file" name="portfolio_background" onchange="readURL(this);" class="default" multiple>
											</div>
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