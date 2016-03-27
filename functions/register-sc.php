<?php 


 $fname=mysqli_escape_string($dbc,$_POST['fname']);
 $lname=mysqli_escape_string($dbc,$_POST['lname']);
 $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
 $password=mysqli_escape_string($dbc,md5(md5($_POST['password'])));
 $confemail=filter_var($_POST['conf-email'],FILTER_VALIDATE_EMAIL);
 // $contact=mysqli_escape_string($dbc,$_POST['contact']);
 // $region=mysqli_escape_string($dbc,$_POST['region']);
 $confirm_code=md5(uniqid(rand()));
 $user_id=md5(rand(0,10000));
 //new block added
 if($fname=="" or $lname=="" or $email=="" || $password=="" || $confemail==""  ){echo '<p class="alert alert-danger text-center">Please Make Sure All Fields Are Filled <span class="close pull-right"><span class="close pull-right"> <a href="#" >&times;</a></span></p>';}

 elseif($email==$confemail){
   $query="select * from users where email='$email'";
   $result=mysqli_query($dbc,$query);

   if(mysqli_num_rows($result)==1){

     echo '<p class="alert alert-danger text-center">We already have someone with that email <span class="close pull-right"><span class="close pull-right"> <a href="#" >&times;</a></span></p>';
   }elseif(mysqli_num_rows($result)==0){
 $query="insert into users(first_name,last_name,email,password,confirm_code,user_id)
       values('$fname','$lname','$email','$password','$confirm_code','$user_id')";
 $data=mysqli_query($dbc,$query);

     if($result){
           //sending confirmation code to new user's email
       $to=$email;

       //my subject
       $subject="Your Comfirmation link";


       //from
       $header="From: casaghana.com";

       //My Message
       $message="It's an honor to have you as a new member of the portal.We have been working to build casaghana.com\r\n";
       $message.="casaghana.com is a web portal that gives opportunity for ghanaians to list their property. \r\n We work day and night to keep it original, safe and accessible to our users. \r\n
       To begin, please verify your email. This will ensure you can sign into casaghana.com \r\n
       ";

       $message.="click on this link to activate your account\r\n";
       $message.="http://casaghana.kofi.work/confirmation?passkey=$confirm_code";

       //sending the mail
       $sentmail=mail($to,$subject,$message,$header);
       echo '<p class="alert alert-success text-center"> Your Account is ready.Please Click the confirmation link we sent you and
  Just <span class="link"><a href="login" >Sign In</a></span> <span class="close pull-right"> <a href="#"> X </a></span></p>';

}else{echo '<p class="alert alert-danger text-center">Something is not right <span class="pull-right close"> <a href="#" >&times;</a></span></p>';}


       mysqli_close($dbc);

       }
     }
   };




 ?>