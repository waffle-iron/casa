<?php 

// database connection
/* connect database test */

// @$dbc = mysqli_connect("localhost:3306", "kofiwork_karsoft", "lollypop28:)", "kofiwork_banditconsult");


@$dbc = mysqli_connect("localhost", "root", "lollypop28", "casa");


 //auto delete
  $query_delete= "DELETE  from classify where post_date <= NOW() - INTERVAL 21 Day";
      $result_delete=mysqli_query($dbc,$query_delete);

   



?>

