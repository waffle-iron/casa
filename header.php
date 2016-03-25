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

<!-- includes -->
<?php include 'functions/dependencies.php' ?>
<!-- /includes -->
<section id="wrapper" class="row">

		<header class="navbar-static-top">

			<ul class="list-inline">
				<li class="text-left">Report A Bug</li>
				
				<ul class=" list-inline pull-right">
<?php if(!isset($user)) : ?>
				<li><a href="register"><span class="fa fa-user-plus"></span>&nbsp;Register</a></li>
				<li ><a href="login"><span class="fa fa-sign-in"></span>&nbsp;Log in</a></li></ul>
		<?php else: ?>
	<li><a href="user-profile"><span class="fa fa-user"></span>&nbsp;  <?php echo $row['first_name'] ?> </a></li>
	<li><a data-toggle="modal" data-target="#logout" href="#"><span class="fa fa-sign-out"></span>&nbsp;Log out</a></li>
		<?php endif; ?>
			</ul>
		</header><!-- /.user-action -->



	<nav class="navbar "  >
	 	<div class="navbar-header">
	 		<div class="navbar-brand">
	 			Casa Ghana
	 		</div> 

	 		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
	 			<span class="icon-bar"></span>
	 			<span class="icon-bar"></span>
	 			<span class="icon-bar"></span>
	 			
	 		</button>
	 	</div>

	 	<div class="collapse navbar-collapse col-md-12 text-center">
	 		<ul class="navbar-nav nav">
	 			<li><a href="index">Home</a></li>
	 			<li><a href="listing">Listings</a></li>
	 			<li><a href="#">News</a></li>
	 			<li><a href="about">About</a></li>
	 			<li><a href="#">Contact</a></li>
	 		</ul>

	 	</div>
	</nav><!-- /.navbar -->

