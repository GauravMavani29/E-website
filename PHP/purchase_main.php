<?php 
	error_reporting(0);
	include "./db_connection.php";
	session_start();
	$user = $_SESSION['user'];

	
	$t_id = $_GET['t_id'];
	$sql = "select `tshirt_size`, `tshirt_price`, `tshirt_image` from `add_product` where tshirt_id = $t_id;";

	$query = mysqli_query($con,$sql);

	$array = mysqli_fetch_assoc($query);

	$size = explode(" ", $array["tshirt_size"]);

	$price = $array["tshirt_price"];
	
	$image = substr($array["tshirt_image"],3);
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purchase</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/purchase_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
<?php include "./purchase_validation.php"; ?>
<?php include "./purchase_data.php"; ?>
</body>
</html>
