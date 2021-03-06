<?php include 'header.php'; ?>

<section class="row jumbotron focus">
			<div class="containter">
				<div class="jumbo-text">
					<h1>List Your Properties </h1>
					<p>
						Fill up the form and list your property
					</p>
				</div>
			</div>
			

</section>

<section class="container">

<section class="alert">
	    
        <?php 

        
        	include 'functions/post-edit.php';
        	?>
   
</section>

<section class="col-md-2"></section><!--  -->
<form action="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data" method="post" class="col-md-8 ">
	<section class="form-group">
			<section class="col-md-12">
	<label>Name</label>
	  <input type="text" name="name" value="<?php echo $row2['owner'] ?> " placeholder="Posting As?"
	   class="form-control" required>
			</section>
	</section>
	<section class="form-group">
		<section class="col-md-6"><label>Email</label><input type="text" value="<?php echo $row2['email'] ?>" class="form-control"
		 name="email"  placeholder="" disabled></section>
		<section class="col-md-6"><label>Contact</label><input type="text" class="form-control" value="<?php echo $row2['contact'] ?> " 
		name="contact" placeholder=""></section>
	</section>
	<section class="form-group">
		<section class="col-md-6"><label>Title</label><input type="text" class="form-control" value="<?php echo $row2['title']; ?>" 
		name="title" placeholder="Give your listing a title"></section>
		<section class="col-md-6"><label>Property Status</label>
				      <select name="type" class="form-control" required>
              <option select="" value="">Rent / Sale or Share</option>
            <?php


                                    $query="select * from property_status";
                                      $result=mysqli_query($dbc,$query);

                                        while($status=mysqli_fetch_array($result)){
                              $status=$status['status_name'];
                          echo '<option  >'."$status".'</option>';}
                      ?>
              </select>
		</section>
	</section>
	<section class="form-group">
		<section class="col-md-6"><label>Price</label>
		<input type="text" class="form-control" name="price"  value="<?php echo $row2['price'] ?>" placeholder="what's your price?"></section>
		

		<section class="col-md-6"><label>Suburb</label>
				  <select name="location" class="form-control" required>
              <option select="" value="">Choose Suburb</option>
            <?php


                                    $query="select * from locations order by region ASC";
                                      $result=mysqli_query($dbc,$query);

                                        while($location=mysqli_fetch_array($result)){
                              $location=$location['region'];
                          echo '<option  >'."$location".'</option>';}
                      ?>
              </select>
		</section>

	</section>

	<section class="form-group">
		<section class="col-md-4"><label>Bedrooms</label>
		<input type="text" class="form-control" name="bedroom" value="<?php echo $row2['bedrooms'] ?>"placeholder="i.e: 3 for 3 bedrooms"></section>
		

		<section class="col-md-4"><label>Garage size</label><input type="text" class="form-control" value="<?php echo $row2['gsize'] ?>" name="gsize" placeholder="i.e: 2 for 2 cars"></section>
		<section class="col-md-4"><label>Land Size</label><input type="text" class="form-control" value="<?php echo $row2['size'] ?>" name="size" placeholder="i.e: 3456 ft squares"></section>
	</section>

	<section class="form-group">
		<section class="col-md-12">
			    
                  <label for="price">Add Image</label>
                	<input type="file" name="uploadedfile" class="form-control " />
                	<input type="hidden" name="MAX_FILE_SIZE" value="100000">
	
		</section>
	</section>

	<section class="form-group">
		<section class="col-md-12"><label>Additional Descriptions</label>
		 <textarea name="description"  rows="8" cols="40" class="form-control" required><?php echo $row2['description'] ?>
		 </textarea>
            
	</section> </section>

		<section class="col-md-12 form-group"></section>
		
			<section class="col-md-12 form-group"> <button class="btn btn-success form-control">Post</button></section>
	

</form>
<section class="col-md-2"> </section><!--  -->	

</section> 
<?php include 'footer.php'; ?>