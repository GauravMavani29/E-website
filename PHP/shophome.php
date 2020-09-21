<?php 
	include "./db_connection.php";

	$sql = "select  `tshirt_image`, `tshirt_price` from `add_product`";

	$query = mysqli_query($con,$sql);
	$html = "";
	$i = 0;
	while($array = mysqli_fetch_assoc($query)){
		if($i<4){
			$html .= '<div class="card"  data-aos="flip-left" data-aos-duration="1200">';
            $html .= '<img src='.$array["tshirt_image"].' alt="Denim Jeans" style="width:100%">';
            $html .= '<p class="price">'.$array["tshirt_price"].'</p>';
            $html .= '<p><a href="#1">Explore</a></p>';
            $html .= '<p><a>Add to Cart</a></p>';
            $html .= '</div>';
            $i++;
        }

	}
	echo $html;
?>