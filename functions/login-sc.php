<?php 

$email=$_POST['email'];
$password=mysqli_escape_string($dbc,md5(md5($_POST['password'])));

//checking credentials
$query="SELECT * from users where email='$email' && password='$password' && active=1";
$result=mysqli_query($dbc,$query);

// checking to see if row exist
$rows=mysqli_num_rows($result);

// condition statement

if($rows!=1){
?>
<div class="alert">
	<p class="bg-danger">Wrong Credentials!! Username, Password Incorrect or User not confirmed</p>
</div>
<?php
}else{
		@session_start();
	$_SESSION['userid']=$email;
	@$_SESSION['expire'] = time()+5*60;

header('location:index.php');

};

 ?>