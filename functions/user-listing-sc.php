<?php 


$query="select * from properties  where email='$user' ";
$result=mysqli_query($dbc,$query);
$rows=mysqli_num_rows($result);
if($rows==0){


    echo '<div class="col-xs-12 col-md-12 property-single">
              <p class="text-center lead"> Bummer!!! Nothing listed in this category. </p>
          </div>';
}elseif($rows>0){
$query="select count(*) from properties where email='$user'";
$result=mysqli_query($dbc,$query);
$roww=mysqli_fetch_row($result);

$numrows=$roww[0];
//number of rows to show
$rowsperpage=5;

//find out total pages
$totalpages=ceil($numrows/$rowsperpage);

//get the current page or set a default

if(isset($_GET['currentpage']) && is_Numeric($_GET['currentpage'])){

  //cast var is int
  $currentpage=(int)$_GET['currentpage'];

  }else{

    //default page num
    $currentpage=1;
  }

  //if current page is greater than total pages
  if($currentpage>$totalpages){

    $currentpage=$totalpages;
  }//end if

  //if current page is less than first page
  if($currentpage<1){
    $currentpage=1;
  }
//the offset based on current page
  $offset=($currentpage-1)*$rowsperpage;

  //get info from database
$query="select * from properties where email='$user'   LIMIT $offset, $rowsperpage ";
$result=mysqli_query($dbc,$query);


while($row=mysqli_fetch_array($result)){


?>

	<section class="col-md-6 listing">
						<?php   include 'preview.php'; ?>
						<article class="caption">
							<ul>
									<li><h3><a href="listing-details?id=<?php echo $row['property_id']?>"> <?php echo $row['title'];?> </a>
   &nbsp; <?php if(isset($user) && $user===$row['email']): ?> <a href="post-edit?id=<?php echo $row['property_id']?>"><span class="fa fa-edit small">edit</span> </a><?php endif; ?>
                  </h3>
 
                  </li>	
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
}//end while

          // building the pagination

      echo '<div class="col-xs-12 col-md-12">';
      //range of num links
      $range=3;

      //if not on page 1 , don't show bak links


      for($x=($currentpage-$range); $x<(($currentpage + $range)+1); $x++){

          //if it's a valid page number

        if(($x >0) && ($x<=$totalpages)){
          // if we're on current page
          if($x==$currentpage){
              //highlight it
            echo "<ul class='pagination'><li class='active' ><a href='#'>$x</a><li></ul>";

          }else{
            //make it a link
            echo "<ul class='pagination'><li><a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a><li></ul>";
          }
        }
      }

   echo '</div>';
}



