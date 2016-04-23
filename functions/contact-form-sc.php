<?php 


 $name=mysqli_escape_string($dbc,$_POST['name']);

 $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
 $subject=mysqli_escape_string($dbc,$_POST['subject']);
$message="Subject $subject\r\n";
  $message.=mysqli_escape_string($dbc,$_POST['message']);
$to='karsoft92@gmail.com';
$header='CGU'.$name.' '.$email.'';

       //sending the mail

       $sentmail=mail($to,$subject,$message,$header);
       if($sentmail){
       echo '<p class="alert alert-success text-center"> We Got Your MEssage <span class="close pull-right"> <a href="#"> X </a></span></p>';

}else{echo '<p class="alert alert-danger text-center">Something went wrong <span class="pull-right close"> <a href="#" >&times;</a></span></p>';}


       mysqli_close($dbc);

       
     
 


 ?>