<?php 
	include "./db_connection.php";

	$sql = "select  `tshirt_image` from `add_product`";

	$query = mysqli_query($con,$sql);
	$html = "";
	while($array = mysqli_fetch_assoc($query))
	{
		$html .= '<div class="imgdiv">';
		$html .= '<img src='.$array['tshirt_image'].' alt="">';
		$html .= '<div class="detailmain">';
	    $html .= '<div class="details"><a href="" title="">Add to cart</a></div>';
	    $html .= '<div class="details"><a href="" title="">Explore</a></div>';
	    $html .= '</div>';
		$html .= '</div>';
	}
echo $html;
?>