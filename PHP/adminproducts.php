<?php 
session_start();
  if($_SESSION['admin'])
  {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>products</title>
	 <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="../assets/css/adminproducts_style.css">
	 <link rel="icon" type="image/png" href="../assets/png/nav-shopping.png"/>
</head>

<body>
	  <div class="adminbar">
    <ul>
      <li><a href=""  style="color: yellow">Products</a></li>
      <li><a href="./dashboard.php">Add Products</a></li>
      <li><a href="./adminorder.php">Orders</a></li>
       <li><a href="./adminlogout.php">LogOut</a></li> 
    </ul>
  </div>
	<div class="outdiv">
		<div class="innerdiv">

		</div>	
	</div>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.6/highlight.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>

<script>
	function product(){
		$.post('adminproductsback.php',function(data,status){
			document.getElementsByClassName("innerdiv")[0].innerHTML = data;
		})
	}
	product();
</script>
</body>
</html>
<?php
}
else{
  header("location: ./admin.php");
}
?>