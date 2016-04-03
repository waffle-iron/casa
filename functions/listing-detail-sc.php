<?php 
 $id=$_GET['id'];

 $query ="select * from properties where property_id='$id'";
 $result=mysqli_query($dbc,$query);
 $row=mysqli_fetch_array($result);

 ?>


 	<section class="col-md-12">
				<h1 class="page-header"> <?php echo $row['title']; ?> | <span class="text-danger"><?php echo $row['price'] ?>$</span></h1>
				<section class="description">
					<article>
						<ul class="list-inline">
						      <li class=""><i class="fa fa-home"></i>&nbsp;&nbsp;<?php echo $row['size'] ?>&nbsp; ft sq.</li>
                     <li class=""><i class="fa fa-automobile"></i>&nbsp;&nbsp;<?php echo $row['gsize'] ?>&nbsp; Cars</li>
                     <li class=""><i class="fa fa-bed"></i>&nbsp;&nbsp;<?php echo $row['bedrooms']?>&nbsp; Bedroom(s)</li>
						</ul>
					</article>


					<article>
						<?php echo $row['description'] ?>
					</article>
				</section>
				
				<section class="map"></section>	

				<section class="agent-info">
					
					<ul class="list-inline">
						  <li> <i class="fa fa-money"></i> <?php echo $row['price'] ?></li>
                   <li>  <i class="fa fa-phone"></i> <?php echo $row['contact'] ?></li>
                   <li><i class="fa fa-envelope"></i> <a href="mailto:'<?php echo $row['email']?>'">  <?php echo $row['email'] ?></a></li>
					</ul>
				</section>
			</section>

			<?php  ?>