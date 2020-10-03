<?php
    include "./db_connection.php";
    error_reporting(0);
    session_start();
    $user = $_SESSION['user'];

    $sql = "SELECT `order_id`, `Tshirt_image` FROM `purchase` WHERE `user_id` = '$user';";

    $query = mysqli_query($con,$sql) or die("error:".mysqli_error($con));

	$html = "";

	while($array = mysqli_fetch_assoc($query))
	{
		$html .= '<div class="card">';
	    $html .= '<div class="imgdiv">';
	    $html .= '<img src=../'.$array['Tshirt_image'].' alt="">';
	    $html .= '</div>';
	    $html .= '<div class="detailsdiv">';
	    $html .= '<p><a href="./bill.php?o_id='.$array["order_id"].'">Order Details</a></p>';
	    $html .= '</div>';
	    $html .= '</div>';
   	}

 echo $html;
?>