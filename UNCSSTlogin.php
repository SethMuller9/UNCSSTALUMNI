<?php 
require_once('UNCSSTconfig.php');
require_once('UNCSSTfunctions.php');

$con = mysqli_connect("localhost","root","Soccer91","userinfo");

if(isset($_POST['signInSubmit'])){
	$email = mysqli_real_escape_string($con,$_POST['signInEmail']);
	
	$pass = mysqli_real_escape_string($con,$_POST['signInPassword']);
	
	$sel_user = "SELECT * FROM logininfo WHERE email='$email' AND password='$pass'";
	
	$run_user = mysqli_query($con,$sel_user);
	
	$check_user = mysqli_num_rows($run_user);
	
	if($check_user>0){
		
		session_start();
		
		$_SESSION['email']=$email;
		
		if($result = $con->query("SELECT firstName, lastName FROM logininfo WHERE email ='$email'")){
			while ($obj = $result->fetch_object()){
				$GLOBALS['fN'] = $obj->firstName;
				$GLOBALS['lN'] = $obj->lastName;
			};
			
			header("Location: http://localhost/UNCALUMNI/Pages/Rosterspage.php");
		};
		
		
		
		
		
		
		
		
		
	
	}
	else{
		
		echo"<script>alert('Email or password is not correct, try again.')</script>";	
	}
}
?>