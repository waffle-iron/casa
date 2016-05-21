<?php 
 $id=$_GET['id'];

 $query4 ="select * from properties where property_id='$id'";
 $result4=mysqli_query($dbc,$query4);


  while($row4=mysqli_fetch_array($result4)){
echo ' <li><img class="img-responsive img-thumbnail preview" src="'.$row4['images'].'" /> </li>'; 
 
}
 ?>