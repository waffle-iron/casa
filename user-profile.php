<?php include 'header.php'; ?>

<!-- include -->
<?php include 'functions/user-profile-sc.php'; ?>
<!-- /include -->

<section class="row jumbotron focus">
	
			

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

<?php include 'footer.php'; ?>