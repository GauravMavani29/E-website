<?php 
	$name = $_POST['name'];
	$user = $_POST['userid'];
	$pass = $_POST['Password'];
	$repass = $_POST['re-password'];
	$error = "";
	if(!ctype_alpha($name)){
		$error = "Name contain only alphabets";
		header("location: ./createuser.php?name_err=$error & user=$user & pass=$pass");
	} 
	elseif(!ctype_alnum($user)){
		$usererror = "UserId contain only alphanumeric";
		header("location: ./createuser.php?user_err=$usererror & name=$name & pass=$pass");
	}
	elseif(strlen($pass) < 8)
	{
		$passerror = "Password contain greater than 8 character";
		header("location: ./createuser.php?pass_err=$passerror & name=$name & user=$user");
	}
	elseif($repass != $repass)
	{
		$error = "Password is not matched";
		header("location: ./createuser.php?repass_err=$reerror & name=$name & user=$user & pass=$pass");
	}
	else{
		include "./db_connection.php";
		$sql = "INSERT INTO `user` (`user_id`, `user_name`, `password`) VALUES ('$user', '$name', '$pass');";

		$query = mysqli_query($con,$sql);

		if(!$query){
			$error = "User name is already exist";
			header("location: ./createuser.php?user_err=$error & name=$name");
		}
		else{
			session_start();
			$_SESSION['user'] = $user;
			header("location: ../index.php");
	}
}
?>