<?php
error_reporting(0);
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../assets/css/admin_style.css">
  <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="../assets/png/nav-login.png"/>
  <title>Sign in</title>
</head>

<body>
<?php 
  if(isset($_POST['submit']))
  {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $msg = $_GET['logout'];
    if($user == "Gaurav_2909" and $pass == "Gaurav@123")
    {
      $msg = "success";
      session_start();
      $_SESSION['admin'] = $user;
      header("location: ./dashboard.php");
    }
  }
?>
  <div class="main">
    <p class="sign" align="center">Admin</p>
      <form class="form1" method="POST">
          <input class="user" type="text" align="center" placeholder="Username" name="username">
          <input class="pass" type="password" align="center" placeholder="Password" name="password">
          <input type="submit" name="submit" class="submit" align="center" value="Sign In">
      </form>        
    </div>
<script type="text/javascript" charset="utf-8" async defer>
  console.log("<?php echo $user; ?>");
</script>
</body>
</html>
