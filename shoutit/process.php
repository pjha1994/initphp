<?php

include 'database.php';

if(isset($_POST['submit'])){

	$user = mysqli_real_escape_string($con,$_POST['user']);

	$message = mysqli_real_escape_string($con, $_POST['message']);

	//Set TimeZone

	date_default_timezone_set('Asia/Calcutta');
	$time = date('h:i:s a',time());

	//validate
 	if(!isset($user) || $user == '' || !isset($message) || $message = '' ){
		$error  = "Please fill in your name and a message";
    		header("Location: index.php?error=".urlencode($error));
		exit();
		echo 'bad';
	}
	else{
		$query = "INSERT INTO shouts (user, message, time)
			  VALUES ('$user','$message','$time')";

		if(!mysqli_query($con,$query)){
			die("ERROR".mysqli_error($con));
		}else{
			header("Location: index.php");
			exit();
		}	
	}
}
;?>
