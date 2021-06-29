<?php
	error_reporting(0);
	session_start();
	if(!$_SESSION['user']){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create New User</title>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" type="text/css" href="../assets/css/login_create_style.css">
		<link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
		<link rel="icon" type="image/png" href="../assets/png/nav-login.png"/>
</head>
<body>
<?php
	error_reporting(0);
	if(isset($_POST['create'])){
		$name = $_POST['name'];
		$user = $_POST['userid'];
		$pass = $_POST['Password'];
		$repass = $_POST['re-password'];
		$todo = 0;
		if(!ctype_alpha($name)){
			$nameerror = "Name contain only alphabets";
		}
		else{
			$newname = $name;
			$todo+=1;
		}


		if(!ctype_alnum($user)){
			$usererror = "UserId contain only alphanumeric";
		}
		else{
			$newuser = $user;
			$todo+=1;
		}

		if(strlen($pass) < 8)
		{
			$passerror = "Password contain greater than 8 character";
		}
		else{
			$newpass = $pass;
			$todo+=1;
		}

		if($pass != $repass)
		{
			$repasserror = "Password is not matched";
		}
		else{
			$newrepass = $repass;
			$todo+=1;
		}

		if($todo == 4){
			include "./db_connection.php";
			$sql = "INSERT INTO `user` (`user_id`, `user_name`, `password`) VALUES ('$newuser', '$newname', '$newpass');";

			$query = mysqli_query($con,$sql);

			if(!$query){
				$usererror = "User Id is already exist";
				$newuser = "";
			}
			else{
				session_start();
				$_SESSION['user'] = $newuser;
				header("location: ../index.php");
			}
		}
	}
?>

	<div class="lg_bg">
		<div class="Maindiv">
			<form class="log" method="POST">
				<div class="cr-title">Create New Account</div>	
				<div class="cr-field">Your name</div>
				<div ><input type="text" name="name" style="margin: 5px;" value="<?php echo $newname; ?>" required></div><span style="font-size: 15px; color:red;"><?php  echo $nameerror; ?></span>

				<div class="cr-field">User_Id</div>
				<div><input type="text" name="userid" style="margin: 5px;" value="<?php echo $newuser; ?>" required></div><span style="font-size: 15px; color:red;"><?php  echo $usererror; ?></span>


				<div class="cr-field">Password</div>
				<div><input type="password" name="Password" style="margin: 5px;"  value="<?php echo $newpass; ?>" required></div><span style="font-size: 15px; color:red;"><?php  echo $passerror; ?></span>


				<div class="cr-field">Re-enter Password</div>
				<div><input type="password" name="re-password" style="margin: 5px;"  value="<?php echo $newrepass; ?>"  required></div><span style="font-size: 15px; color:red;"><?php  echo $repasserror; ?></span>


				<div style="margin-top: 5px;"><input type="submit" name="create" value="Create account" style="width: 120px;"></div>

				<div style="font-size: 13px; margin-top: 10px;">Already have an account? <a href="login.php" style="text-decoration: none;">Sign-In</a></div>
			</form>
		</div>
	</div>
</body>
</html>
<?php
	}
	else{
		echo "<script>";
		echo "if(confirm('You are already log in')){";
		echo "window.location.href='../index.php';";
		echo "}</script>";
	}

 ?>	
