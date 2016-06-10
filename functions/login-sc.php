<?php




	if($_POST){include 'dependencies.php' ;
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

<<<<<<< HEAD
	
		header("Location:index.php");
		
||||||| merged common ancestors
		echo '<p class="alert alert-success text-center">Welcome &nbsp;'.$first_name .'&nbsp; '.$last_name.'</p>';
		ob_start();
		header("Location:index.php");
		ob_end_flush();
=======
		// echo '<p class="alert alert-success text-center">Welcome &nbsp;'.$first_name .'&nbsp; '.$last_name.'</p>';
		ob_start();
		header("Location: http://localhost:8888/casa/index.php");
		ob_end_flush();
>>>>>>> 1d5c4cebb181c97b19be07ca81ec3bb3cecef47b
		exit();
			
			}else{echo '<p class="alert alert-danger text-center">Wrong Email / Password!</p>';}
	
	mysqli_close($dbc);
	};
