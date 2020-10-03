<?php 
	include "./db_connection.php";

	$user = $_POST['user_id'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM `user` WHERE user_id = '$user';";

	$query = mysqli_query($con,$sql);
	$error = "";
	$array = mysqli_fetch_assoc($query);
	if(!$array){
		$error = "userid is incorrect";
		echo $error;
		header("location: ./login.php?user_error=$error");
	}
	elseif($array['password'] != $pass){
		$error = "Password is not matched";
		echo $error;
		header("location: ./login.php?pass_error=$error & user=$user");
	}
	else{
		session_start();
		$_SESSION['user'] = $user;
		header("location: ../index.php");
	}
?>