<?php
	error_reporting(0);

	if($_GET['r_id'])
	{
		include "./db_connection.php";
		$r_id = $_GET['r_id'];

		$sql = "DELETE FROM `add_cart` WHERE `add_cart`.`tshirt_id` = $r_id";
		$query = mysqli_query($con,$sql)or die("error:".mysqli_error());
		mysqli_close($con);
	}

	if($_GET['id'])
	{
		include "./db_connection.php";
		$id = $_GET['id'];
	    $sql = "select `tshirt_id`, `tshirt_image`, `tshirt_price` from `add_product` where `tshirt_id` = $id";
	    $query = mysqli_query($con,$sql);

	    $result = mysqli_fetch_assoc($query);
	    $t_id = $result["tshirt_id"];
	    $img = $result["tshirt_image"];
	    $price = $result["tshirt_price"];

	    $ins = "INSERT INTO `add_cart` (`tshirt_id`, `tshirt_image`, `tshirt_price`) VALUES ($t_id, '$img', $price);";
	    $insquery = mysqli_query($con,$ins)or die("Error: Product is already Added to the cart".mysqli_error($insquery));

	    mysqli_close($con);
   }
?>
