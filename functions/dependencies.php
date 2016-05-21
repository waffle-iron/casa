<?php 

// database connection
/* connect database test */

// @$dbc = mysqli_connect("kofiwork", "kofiwork_karsoft", "lollypop28:)", "kofiwork_banditconsult");


@$dbc = mysqli_connect("localhost", "root", "lollypop28", "casa");


//sessions
session_start();

//session in seconds
@$user=$_SESSION['userid'];



$query="select * from users where email='$user'";
$result=mysqli_query($dbc,$query);
$row=mysqli_fetch_array($result);
$useremail=$row['email'];
$username=$row['first_name'];





// terminating sessions
if(time() > @$_SESSION['expire']){
session_destroy();
session_unset();
$_SESSION=array();
} else {
@$_SESSION['expire'] = time()+5*60;
}

 //auto delete
  $query_delete= "DELETE  from classify where post_date <= NOW() - INTERVAL 21 Day";
      $result_delete=mysqli_query($dbc,$query_delete);

   

 //function popover
function logout_modal(){
?>

<!-- modal beginning -->
<div class="modal  fade" data-backdrop="static" id="logout" tab-index="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
    <!-- modal header -->
    <div class="modal-header">
  <button type="btn" class="close" data-dismiss="modal" aria-hidden="true">x</button>
  <h4 class="modal-title" id="modalLabel">Saying Goodbye?</h4></div>
    <!-- modal body -->

    <div class="modal-body">
   you are saying goodbye for today. Do you wish to logout?

    </div>

    <!-- modal footer -->

    <div class="modal-footer">

    <button class="btn" type="button" data-dismiss="modal">Close </button>

    <a href="logout" class="btn btn-danger "  value="Logout" name="discard" >Logout</a>

    </div>

    </div>




  </div>

</div><!-- end of modal -->
<?php

}
//calling the logout function
 logout_modal();




