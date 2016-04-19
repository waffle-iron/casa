<?php include 'header.php'; ?>
<section class="row jumbotron focus">
	
			<div class="containter">
				<div class="jumbo-text">
					<h1>Your Listings</h1>
					<p>
					You'll find here all your listed properties		</p>
				</div>
			</div>

</section>


<section class="row">
<?php include 'functions/discard.php'; ?>
<br>
<section class="container mini-map">
	<ul class="list-inline">
		<li><a href="user-profile"> My Profile</a></li>
		<li><a href="user-listings"> My Listing </a></li>
	</ul>
</section>

		<section class="services col-md-8">


			<section class="col-md-12">
				<h3 class="page-header">Latest Estates</h3>

				<?php include 'functions/user-listing-sc.php'; ?>

			
			</section>
			
		</section>

</section>






<?php include 'footer.php'; ?>