<?php 
	include "./db_connection.php";

	$sql = "select `tshirt_id`, `tshirt_image`, `tshirt_price` from `add_product`";

	$query = mysqli_query($con,$sql);
	$html = "";
	$i = 0;
	while($array = mysqli_fetch_assoc($query)){
		if($i<4){
			$html .= '<div class="card" data-aos="flip-left" data-aos-duration="1200">';
            $html .= '<img src='.$array["tshirt_image"].' alt="T-shirt" style="width:100%">';
            $html .= '<p class="price">$'.$array["tshirt_price"].'</p>';
            $html .= '<p><a href="./PHP/product.php?t_id='.$array["tshirt_id"].'">Explore</a></p>';
            $html .= '<p><img src="assets/png/cart.png" alt="Could n find"><a href="./PHP/cart.php?id='. $array["tshirt_id"] .'">Add to Cart</a></p>';
            $html .= '</div>';
            $i++;
        }

	}
	echo $html;
	mysqli_close($con);
?>