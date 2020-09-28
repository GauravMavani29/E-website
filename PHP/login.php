<?php
	error_reporting(0);
	session_start();
	if(!$_SESSION['user']){
?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/login_create_style.css">
		<link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
		<!-- <link rel="icon" type="image/png" href="../assets/images/favicon.ico"/> -->
</head>
<body>
<?php
	error_reporting(0);
	$user = $_GET['user_error'];
	$pass = $_GET['pass_error'];
	$username = $_GET['user'];
?>
		<div class="lg_bg">
				<div class="Maindiv">
						<form method="POST" class="log" action="./login_validation.php">
							<div class="signin">Log-In</div>
							<div>
								 <input type="text" name="user_id" placeholder="User-Id" value="<?php echo $username; ?>" required><br><span style="color:red;"><?php  echo $user; ?></span>
							</div>
							<div>
								 <input type="password" name="password" placeholder="Password" required><br><span style="color:red;"><?php  echo $pass; ?></span>
							</div>	
							<div>
								<input type="submit" name="Login" value="Log-In">
							</div>
							<div class="cna">
								<a href="./createuser.php">create new account</a>
							</div>
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
		echo "window.location.href='./index.php';";
		echo "}</script>";
	}

 ?>	
<!-- <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>
	$(function(){
	  $('#check').click(function(){
	    if ($(this).is(':checked'))
	    {
	      $("#name").prop("disabled",false);
	      
	    }
  });
});
</script> -->