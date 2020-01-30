
					<div class="">
						<!-- Quick Mail start -->
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="card-box">
								<div class="card-head">
									<header>Quick Mail</header>
									<button id="demo_menu-lower-right"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="demo_menu-lower-right">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
											here</li>
									</ul>
								</div>
								<div class="card-body ">
									<div class="mail-list">
										<div class="compose-mail">
											<form method="post">
												<div class="form-group">
													<label for="to" class="">To:</label>
													<input type="text" tabindex="1" id="to" class="form-control">
													<div class="compose-options">
														<a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();"
															href="<?php echo base_url();?>javascript:;">Cc</a>
														<a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();"
															href="<?php echo base_url();?>javascript:;">Bcc</a>
													</div>
												</div>
												<div class="form-group hidden">
													<label for="cc" class="">Cc:</label>
													<input type="text" tabindex="2" id="cc" class="form-control">
												</div>
												<div class="form-group hidden">
													<label for="bcc" class="">Bcc:</label>
													<input type="text" tabindex="2" id="bcc" class="form-control">
												</div>
												<div class="form-group">
													<label for="subject" class="">Subject:</label>
													<input type="text" tabindex="1" id="subject" class="form-control">
												</div>
												<div>
													<div id="summernote"></div>
													<input type="file" class="default" multiple>
												</div>
												<!--   <div class="btn-group margin-top-20 ">
	                                                <button class="btn btn-primary btn-sm margin-right-10"><i class="fa fa-check"></i> Send</button>
                                           		</div> -->
												<div class="box-footer clearfix">
													<button type="button"
														class="mdl-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-primary pull-right">Send
														<i class="fa fa-paper-plane-o"></i></button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Quick Mail end -->
				</div>