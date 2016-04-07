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
<body  class="becky">
<!-- includes -->
<?php include'functions/dependencies.php' ?>
<!-- /includes -->
<div class=" error">
	<?php if($_POST){ include 'functions/login-sc.php'; };
	unset($_POST); ?>
</div>

	<div class="container" id="login-form">
		<div class="user-form property-single col-sm-12 col-md-4 col-md-offset-4">
<div class="action-icon text-center"><i class="fa fa-sign-in fa-lg fa-4x"></i></div>
<div class="">
	<h3 class="text-center">Welcome back, login into your casa account.</h3>
</div>
			<form class="" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					<div class="form-group">
					<label>Email</label>
						<input type="text" name="email" required class="form-control">

					</div>




					<div class="form-group">
					<label>Password</label>
						<input type="password" name="password" required class="form-control">
					</div>


					<div class="form-group">
						<button class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i> Login</button>
					</div>

						<div class="form-group col-md-12">
					<p><ul class="list-inline text-center">
						<li>	<a href="login"><a href="register"><i class="fa fa-user-plus"></i>&nbsp;Open Account/a></li>
						<li><a href="recover"><i class="fa fa-key"></i>&nbsp;Lost Password</a></li>
						<li><a href="index"><i class="fa fa-home"></i>&nbsp;Home</a></li></ul>
					</p>
					</div>

		</form>

		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script  src="js/custom.js"></script>

	


</body>