<?php include 'header.php'; ?>

<!-- include -->
<?php include 'functions/user-profile-sc.php'; ?>
<!-- /include -->
<?php include 'functions/redirect.php'; ?>
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
		<li ><a href="new-password"> Change Password  </a></li>
		<li><a href=""> Request Agent Account </a></li>
	</ul>
</section>


<section class="container">
<?php include 'functions/user-update-sc.php'; ?>

<section class="col-md-2"></section><!--  -->
<section class="col-md-8">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="col-md-12" id="user-profile">
		<section class="form-group">
			<section class="col-md-6"><label>First Name</label><input type="text" class="form-control" name="fname" value="<?php echo $row['first_name'] ?>" placeholder=""></section>
			<section class="col-md-6"><label>Last Name</label><input type="text" class="form-control" name="lname" placeholder="" 
			value="<?php echo $row['last_name'] ?>"></section>
		</section>

		<section class="form-group">
			<section class="col-md-6"><label>Company(Optinal)</label><input type="text" class="form-control" name="company" 
			placeholder="" value="<?php echo $row['company']; ?>" ></section>
			<section class="col-md-6"><label>Email</label><input type="text" class="form-control" name="email" placeholder="" value="<?php echo $row['email'] ?>"></section>
		</section>


		<section class="form-group">
		<section class="col-md-12"><label for="">Contact</label><input type="text"class="form-control" value="<?php echo $row['contact'] ;?>" name="contact"></section>
			
		
		</section>
<!-- 
		<section class="form-group password">
			<section class="col-md-6"><label>Password</label><input type="text" class="form-control" name="" placeholder="" value=""></section>
			<section class="col-md-6"><label>Confirm Password</label><input type="text" class="form-control" name="" placeholder=""></section>

			
		
		</section> -->
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