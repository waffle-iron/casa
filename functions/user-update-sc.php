<?php 


  if($_POST){
    $fname=mysqli_escape_string($dbc,$_POST['fname']);

  	$email=mysqli_escape_string($dbc,$_POST['email']);
    $contact=$_POST['contact'];
  $company=mysqli_escape_string($dbc,$_POST['company']);
  			$query= "update users SET contact='$contact' , first_name='$fname', email='$email', company='$company' where email='$user'";
  			$query2="update properties SET contact='$contact' ,owner='$fname', email='$email' where email='$user'";
  			$result=mysqli_query($dbc,$query);
  			$result2=mysqli_query($dbc,$query2);

        if($result && $result2){
          echo '<p class="alert alert-success text-center">Your profile has been updated <span class="close pull-right"> <span class="close pull-right"> <a href="#" >&times; </a></span></p>';
          header("refresh:2,user-profile");

        }else{
          echo '<p class="alert alert-danger">My bad!!! Something went totally wrong. Try again later while i try to fix it <span class="close pull-right"> <span class="close pull-right"> <a href="#" >&times; </a></span></p>';

        }
      } ?>