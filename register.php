<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Casa Ghana</title>

	</head>
<body>
<div class="container" id="register-form">
		<div class="user-form property-single col-sm-12 col-md-4 col-md-offset-4">
<div class="action-icon text-center"><i class="fa fa-user-plus fa-lg fa-4x"></i></div>
<div class="">
	<h3 class="text-center">Glad you want to join the community</h3>
</div>
			<form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >
					<div class="form-group col-md-6">
					<label>First Name</label>
					<input type="text" class="form-control" autofocus name="fname" autocomplete="off" placeholder="First Name" required>
					</div>

					<div class="form-group col-md-6">
					<label>Last Name</label>
					<input type="text" class="form-control" name="lname" autocomplete="off" placeholder="Last Name" required>
					</div>

					<div class="form-group col-md-12">
					<label>Email</label>
					<input type="email" class="form-control" name="email" autocomplete="off" placeholder="Your Email" required>
					</div>

					<div class="form-group col-md-12">
					<label>Confirm Email</label>
					<input type="email" class="form-control" name="conf-email" autocomplete="off" placeholder="Confirm Your Email" required>
					</div>

					<div class="form-group col-md-12">
					<label>Password</label>
					<input type="password" class="form-control" name="password" autocomplete="off" placeholder="Your Password" required>
					<br>
							<button class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i> Register</button>
					</div>

					<div class="form-group col-md-12">
					<p><ul class="list-inline text-center">
						<li>	<a href="login"><a href="login"><i class="fa fa-sign-in"></i>&nbsp;Log In?</a></li>
						<li><a href="recover"><i class="fa fa-question"></i>&nbsp;Lost Password</a></li>
						<li><a href="index"><i class="fa fa-home"></i>&nbsp;Home</a></li></ul>
					</p>
					</div>



						</form><!-- end of sign up form -->

		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script  src="js/custom.js"></script>

	



</body>