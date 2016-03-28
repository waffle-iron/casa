<?php include 'header.php'; ?>

<!-- include -->
<?php include 'functions/user-profile-sc.php'; ?>
<!-- /include -->

<section class="row jumbotron focus">
	
				<div class="containter">
				<div class="jumbo-text">
					<h1>Your Profile</h1>
					<p>
						Edit your information from this page.
					</p>
				</div>
			</div>

</section>

<br>
<section class="container mini-map">
	<ul class="list-inline">
		<li><a href="user-profile"> My Profile</a></li>
		<li><a href="user-listings"> My Listing </a></li>
	</ul>
</section>

<section class="container">


<section class="col-md-2"></section><!--  -->
<section class="col-md-8">
	<form action="" method="" class="col-md-12" id="user-profile">
		<section class="form-group">
			<section class="col-md-6"><label>First Name</label><input type="text" class="form-control" name="" value="<?php echo $row['first_name'] ?>" placeholder=""></section>
			<section class="col-md-6"><label>Last Name</label><input type="text" class="form-control" name="" placeholder="" 
			value="<?php echo $row['last_name'] ?>"></section>
		</section>

		<section class="form-group">
			<section class="col-md-6"><label>Company(Optinal)</label><input type="text" class="form-control" name="" placeholder="" value=""></section>
			<section class="col-md-6"><label>Email</label><input type="text" class="form-control" name="" placeholder="" value="<?php echo $row['email'] ?>"></section>
		</section>

		<section class="form-group">
			<section class="col-md-6"><label>Password</label><input type="text" class="form-control" name="" placeholder="" value=""></section>
			<section class="col-md-6"><label>Confirm Password</label><input type="text" class="form-control" name="" placeholder=""></section>

			
		
		</section>
	<!-- 	<section class="form-group">
			<section class="col-md-6"><label></label><input type="text" class="form-control" name="" placeholder=""></section>
			<section class="col-md-6"><label></label><input type="text" class="form-control" name="" placeholder=""></section>
		</section> -->	

	<section class="col-md-12 form-group"></section>
		
			<section class="col-md-12 form-group"> <button class="btn btn-success form-control">Save</button></section>
	
	</form> </section>

<section class="col-md-2"></section><!--  -->	


</section>
<?php include 'footer.php'; ?>