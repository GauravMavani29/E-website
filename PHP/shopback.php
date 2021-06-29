<?php 
	include "./db_connection.php";

	$sql = "select  `tshirt_id`, `tshirt_image` from `add_product`";

	$query = mysqli_query($con,$sql);
	$html = "";
	while($array = mysqli_fetch_assoc($query))
	{
		$temp = substr($array["tshirt_image"],3);
		$html .= '<div class="imgdiv" data-aos="flip-left" data-aos-duration="1200">';
		$html .= '<img src=../'.$temp.' alt="dsa">';
		$html .= '<div class="detailmain">';
	    $html .= '<div class="details"><a href="./cart.php?id='. $array['tshirt_id'] .'"  class="spn"><span class="spn">Add to Cart</span></a></div>';
	    $html .= '<div class="details"><a href="./product.php?t_id='.$array["tshirt_id"].'" title="">Explore</a></div>';
	    $html .= '</div>';
		$html .= '</div>';
	}

echo $html;
mysqli_close($con);
?>