
	<?php
include 'functions/dependencies.php' ;
include 'session.php';
include 'session-expire.php';
include 'logout-modal.php';
 ?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
				<link rel="stylesheet" type="text/css" href="bower_components/flexslider/flexslider.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Efie ghana</title>

	</head>
<body>

<!-- includes -->

<!-- /includes -->
<section id="wrapper" class="row">

		<header class="navbar-static-top row">

			<ul class="list-inline">
				<li class="text-left hidden-xs">Built with Real Estate Agents and Companies in mind!</li>
				
				<ul class=" list-inline pull-right">
<?php if(!isset($user)) : ?>
				<li><a href="register"><span class="fa fa-user-plus"></span>&nbsp;Register</a></li>
				<li ><a href="login"><span class="fa fa-sign-in"></span>&nbsp;Log in</a></li></ul>
		<?php else: ?>
				<li><a href="post"><span class="fa fa-list"></span> Post a listing </a></li>
			
	<li><a href="user-profile"><span class="fa fa-user"></span>&nbsp;  <?php echo $row['first_name'] ?> </a></li>
	<li><a data-toggle="modal" data-target="#logout" href="logout"><span class="fa fa-sign-out"></span>&nbsp;Log out</a></li>
		<?php endif; ?>
			</ul>
		</header><!-- /.user-action -->



	<nav class="navbar "  >
	 	<div class="navbar-header">
	 		<div class="navbar-brand">
	 			Efie ghana
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
	 			<li><a href="about">About</a></li>
	 			<li><a href="contact">Contact</a></li>
	 			<li><a href="#">News</a></li>
	 		</ul>

	 	</div>
	</nav><!-- /.navbar -->

