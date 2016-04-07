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
<body class="becky">
<?php include'functions/dependencies.php' ?>
<?php include 'functions/recover.php'; ?>
<section class="container" id="recover-form">
		<section class=" col-sm-12 col-md-4 col-md-offset-4">
<section class="action-icon text-center"><i class="fa fa-user-plus fa-lg fa-4x"></i></section>
<section class="">
	<h3 class="text-center">Let's help you recover your account.</h3>
</section>
	<form class="form" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="example@example.com" required>

					</div>

					<div class="form-group">
						<button class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i> Recover</button>
					</div>

					<p><ul class="list-inline text-center">
							<p><ul class="list-inline text-center">
						<li>	<a href="login"><a href="login"><i class="fa fa-sign-in"></i>&nbsp;Log In</a></li>
						<!-- <li><a href="recover"><i class="fa fa-question"></i>&nbsp;Lost Password</a></li> -->
						<li><a href="index"><i class="fa fa-home"></i>&nbsp;Home</a></li></ul>
					</p>
				</p>
		</form>

			
		</section>
	</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script  src="js/custom.js"></script>

	



</body>