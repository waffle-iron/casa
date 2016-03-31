<?php 


$query="select * from properties LIMIT 2";
$result=mysqli_query($dbc,$query);
$rows=mysqli_num_rows($result);
if($rows==0){
  
}else{
  while($row=mysqli_fetch_array($result)){
?>

	<section class="col-md-6 listing">
						<img src="..." alt="" class="img-responsive img-thumbnail estate-preview">
						<article class="caption">
							<ul>
									<li><h3><a href="listing-details?id=<?php echo $row['property_id']?>"> <?php echo $row['title'];?> </a></h3></li>	
								<li>
								 	<article class="description">
											<?php echo substr($row['description'],0,200);  ?> ...
									</article>
								</li>
							
								<li>
									 <ul class="list-inline">
											<li><span class="fa fa-check"></span>&nbsp;On the Market</li>
											<li class=""><span class="fa fa-money"></span> <?php echo $row['price'] ?>$ </li>
										</ul> 
								</li>
							</ul>
						</article>
	</section> <!--/latest1 -->


<?php
}
};


 ?>