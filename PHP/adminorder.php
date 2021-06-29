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
    <title>Order</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/adminorder_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
      <div class="adminbar">
    <ul>
      <li><a href="./adminproducts.php">Products</a></li>
      <li><a href="./dashboard.php">Add Products</a></li>
      <li><a href="" style="color: yellow">Orders</a></li>
      <li><a href="./adminlogout.php">LogOut</a></li> 
    </ul>
  </div>
	<div class="cartmaindiv">
		
	</div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    
function order(){
    $.post('adminorderback.php',function(data,status){
        document.getElementsByClassName("cartmaindiv")[0].innerHTML = data;
    })
}
order();
</script>
</body>
</html>
<?php
}
else{
  header("location: ./admin.php");
}
?>