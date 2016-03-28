<?php include 'header.php'; ?>

<section class="row jumbotron focus">
	
			

</section>

<section class="container">


<section class="col-md-2"></section><!--  -->
<form action="" method="" class="col-md-8 ">
	<section class="form-group">
		<section class="col-md-6"><label>First Name</label><input type="text" class="form-control" value="<?php $row['first_name'] ?>" name="" placeholder=""></section>
		<section class="col-md-6"><label>Last Name</label><input type="text" class="form-control" name="" placeholder=""></section>
	</section>
	<section class="form-group">
		<section class="col-md-6"><label>Email</label><input type="text" class="form-control" name="" placeholder=""></section>
		<section class="col-md-6"><label>Contact</label><input type="text" class="form-control" name="" placeholder=""></section>
	</section>
	<section class="form-group">
		<section class="col-md-6"><label>Title</label><input type="text" class="form-control" name="" placeholder=""></section>
		<section class="col-md-6"><label>Property Status</label>
				    <select name="status" class="form-control" required>
			              <option select="" value="">Rent / Sale or Share</option>
							<option value="1"> Rent </option>
							<option value="2"> Sale </option>
							<option value="3"> Share </option>
			              </select>
		</section>
	</section>
	<section class="form-group">
		<section class="col-md-6"><label>Price</label>
		<input type="text" class="form-control" name="" placeholder=""></section>
		

		<section class="col-md-6"><label>Suburb</label><input type="text" class="form-control" name="" placeholder=""></section>
	</section>

	<section class="form-group">
		<section class="col-md-4"><label>Bedrooms</label>
		<input type="text" class="form-control" name="" placeholder=""></section>
		

		<section class="col-md-4"><label>Garage size</label><input type="text" class="form-control" name="" placeholder=""></section>
		<section class="col-md-4"><label>Land Size</label><input type="text" class="form-control" name="" placeholder=""></section>
	</section>

	<section class="form-group">
		<section class="col-md-12"><label>Additional Descriptions</label>
		 <textarea name="description" rows="8" cols="40" class="form-control" required></textarea>
            
	</section> </section>

</form>
<section class="col-md-2"> </section><!--  -->	

</section> 
<?php include 'footer.php'; ?>