<?php
	error_reporting(0);
	session_start();
    $user = $_SESSION['user'];
	if($_GET['r_id'])
	{
		include "./db_connection.php";
		$r_id = $_GET['r_id'];

		$sql = "DELETE FROM `add_cart` WHERE `add_cart`.`tshirt_id` = $r_id AND `user_id` = '$user';";
		$query = mysqli_query($con,$sql)or die("error:".mysqli_error($con));
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

	    $select = "SELECT * FROM `add_cart` WHERE `user_id` = '$user' AND `tshirt_id` = $id;";

	    $selectquery = mysqli_query($con,$select)or die("error:".mysqli_error($con));

	    $array = mysqli_fetch_assoc($selectquery);

	    if(count($array)!=0)
	    {
	    	die("error:Product is Already Added to the cart".mysqli_error());
	    	header("location: ../index.php");
	    }
	    else{
	    	$ins = "INSERT INTO `add_cart` (`cart_id`, `user_id`,`tshirt_id`, `tshirt_image`, `tshirt_price`) VALUES (NULL, '$user', $t_id, '$img', $price);";
	  		$insquery = mysqli_query($con,$ins)or die("Error: Product is already Added to the cart".mysqli_error($con));
	    }
	    mysqli_close($con);
   }
?>
