<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapmaster.com/live/metro/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:57:00 GMT -->
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin Login</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('back/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('back/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('back/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('back/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{{URL::to('img/favicon.ico')}}">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url({{URL::to('frontend/images/home/logo.png')}}) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>

					<p class="alert-danger">								<!--alert for invalid email or password -->
					<?php
						$messege=Session::get('messege');
						if($messege){
							echo $messege;
							Session::put('messege',null);
						}
					?>
					</p>

					<h2>Login to your account</h2>
					<form class="form-horizontal" action="{{url('/admin-dashboard')}}" method="post">
						{{ csrf_field()}}
						<fieldset>
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="admin_email"  type="text" placeholder="email address"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="admin_password" id="password" type="password" placeholder="type password"/>
							</div>
							
							

			          <div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="{{asset('back/js/jquery-1.9.1.min.js')}}"></script>
	    <script src="{{asset('back/js/jquery-migrate-1.0.0.min.js')}}"></script>
		<script src="{{asset('back/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	    <script src="{{asset('back/js/modernizr.js')}}"></script>
		<script src="{{asset('back/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('back/js/jquery.cookie.js')}}"></script>
		<script src="{{asset('back/js/excanvas.js')}}"></script>
		<script src="{{asset('back/js/jquery.uniform.min.js')}}"></script>
		<script src="{{asset('back/js/custom.js')}}"></script>
	<!-- end: JavaScript-->
	
</body>
</html>