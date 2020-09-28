<?php 
	include "./db_connection.php";

	$sql = "select `tshirt_id`, `tshirt_image`, `tshirt_price` from `add_cart`";

	$query = mysqli_query($con,$sql)or die("error:".mysqli_error($query));
	$html = "";
	while($array = mysqli_fetch_assoc($query)){
		$html .= '<div class="card">';
		$html .= '<div class="imgdiv">';
		$html .= '<img src='.$array["tshirt_image"].' alt="">';
		$html .= '</div>';
		$html .= '<div class="detailsdiv">';
		$html .= '<p class="price">$'.$array["tshirt_price"].'</p>';
	    $html .= '<p><a href="./product.php?t_id='.$array["tshirt_id"].'">Explore</a></p>';
	    $html .= '<p><a href="./cart.php?r_id='. $array['tshirt_id'] .'">Remove to cart</a></p>';
		$html .= '</div>';
		$html .= '</div>';
	}
	echo $html;
	mysqli_close($con);
?>