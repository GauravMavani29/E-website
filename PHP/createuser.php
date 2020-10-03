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
    $name_err = $_GET['name_err']; 
    $name = $_GET['name'];
    $user_err = $_GET['user_err'];
    $user = $_GET['user'];
    $pass_err = $_GET['pass_err'];
    $pass = $_GET['pass'];
    $repass_err = $_GET['repass_err'];

 ?>
	<div class="lg_bg">
		<div class="Maindiv">
			<form class="log" method="POST" action="./user_validation.php">
				<div class="cr-title">Create New Account</div>	
				<div class="cr-field">Your name</div>
				<div ><input type="text" name="name" style="margin: 5px;" value="<?php echo $name; ?>" required></div><span style="font-size: 15px; color:red;"><?php  echo $name_err; ?></span>

				<div class="cr-field">User_Id</div>
				<div><input type="text" name="userid" style="margin: 5px;" value="<?php echo $user; ?>" required></div><span style="font-size: 15px; color:red;"><?php  echo $user_err; ?></span>


				<div class="cr-field">Password</div>
				<div><input type="password" name="Password" style="margin: 5px;"  value="<?php echo $pass; ?>" required></div><span style="font-size: 15px; color:red;"><?php  echo $pass_err; ?></span>


				<div class="cr-field">Re-enter Password</div>
				<div><input type="password" name="re-password" style="margin: 5px;" required></div><span style="font-size: 15px; color:red;"><?php  echo $repass_err; ?></span>


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
