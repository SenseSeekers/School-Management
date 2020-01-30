<!DOCTYPE html>
<html>
<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2019 14:25:59 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="RedstarHospital" />
	<title>Graphic Arts Institute </title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="<?php echo base_url();?>light/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="http://radixtouch.in/templates/admin/smart/source/assets/img/favicon.ico" />
</head>

<body>
	<div class="limiter" style="background-image: url(<?php echo base_url();?>assets/img/backimage.jpg);" >
		<div class="container-login100 ">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url('index.php/User/LoginFrom/');?>" method="post" >
					<span class="login100-form-logo">
						<img alt="" src="<?php echo base_url();?>images/logo/logoi.png">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">Log in</span>

					<div class="wrap-input100 validate-input" data-validate="Enter user">
						<input class="input100" type="text" name="user_id" placeholder="User Id / User Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button><br/>
					</div>
						<?php echo $this->session->flashdata('msg'); ?>
				</form>
				</div>
			</div>
		</div>
	<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/pages/extra-pages/pages.js"></script>
	
</body>

</html>