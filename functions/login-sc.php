<?php 

// $email=$_POST['email'];
// $password=mysqli_escape_string($dbc,md5(md5($_POST['password'])));

// //checking credentials
// $query="SELECT * from users where email='$email' && password='$password' && active=1";
// $result=mysqli_query($dbc,$query);

// // checking to see if row exist
// $rows=mysqli_num_rows($result);

// // condition statement

// if($rows!=1){
?>
<!-- <div class="alert">
	<p class="bg-danger">Wrong Credentials!! Username, Password Incorrect or User not confirmed</p>
</div> -->
<?php
// }else{
// 			@session_start();
// 	$_SESSION['userid']=$email;
// 	@$_SESSION['expire'] = time()+5*60;
// 	header('location:index.php');





// };




	if($_POST){include 'functions/dependencies.php' ;
	$email=$_POST['email'];
$password=mysqli_escape_string($dbc,md5(md5($_POST['password'])));
	
$query="select * from users where email='$email' and password='$password' and active='1'";
$result=mysqli_query($dbc,$query);
$row=mysqli_num_rows($result);
$fetch=mysqli_fetch_array($result);
		$id=$fetch['user_id'];
		$first_name=$fetch['first_name'];
		$last_name=$fetch['last_name'];

	if($row==1){
	@session_start();
	$_SESSION['userid']=$email;
	@$_SESSION['expire'] = time()+5*60;

		echo '<p class="alert alert-success text-center">Welcome &nbsp;'.$first_name .'&nbsp; '.$last_name.'</p>';
		ob_start();
		header("Location:index.php");
		ob_end_flush();
		exit();
			
			}else{echo '<p class="alert alert-danger text-center">Wrong Email / Password!</p>';}
	
	mysqli_close($dbc);
	};




 ?>