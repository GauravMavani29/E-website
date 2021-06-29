<?php
error_reporting(0);
	include "./db_connection.php";

	$t_id = $_POST['tshirt_id'];

	$sql = "select * from `add_product` where tshirt_id = $t_id;";

	$query = mysqli_query($con,$sql);

	$array = mysqli_fetch_assoc($query)or die("Error: Product is no more available".mysqli_error());

	$html = "";

		//$temp = substr($array["tshirt_image"],3);
		$html .= '<div class="proimg">';
		$html .= '<img src=../'.$array["tshirt_image"].' id="pimg" alt="">';
		$html .= '</div>';
		$html .= '<div class="product">';
		$html .= '<div class="proinfo">';
		$html .= '<h1 id="heading" class="head">'.$array["tshirt_title"].'</h1> ';
		$html .= '<p>';
		$html .= '<b>SIZE&nbsp;:</b><font>&nbsp;&nbsp;&nbsp;'. $array["tshirt_size"] .'</font>';
		$html .= '</p>';
		$html .= '<p>';
		$html .= '<b>LENGTH&nbsp;:</b><font>&nbsp;&nbsp;&nbsp;'. $array["tshirt_length"] .' Inches</font>';
		$html .= '</p>';
		$html .= '<p>';
		$html .= '	<b>WASHCARE&nbsp;:</b><font>&nbsp;&nbsp;&nbsp;'. $array["washcare"] .'</font>';
		$html .= '</p>';
		$html .= '<p>';
		$html .= '	<b>COMPOSITION&nbsp;:</b><font>&nbsp;&nbsp;&nbsp;'. $array["composition"] .'</font>';
		$html .= '</p>';
		$html .= '<p>';
		$html .= '	<b>PRICE&nbsp;:</b><font id="price">&nbsp;$'. $array["tshirt_price"] .'</font>';
		$html .= '</p>';	
		$html .= '<p>';
		$html .= '	<b>Shipping Info:</b>';
		$html .= '	<font>The product ships within 2 working days, excluding Sundays and public holidays.</font>';
		$html .= '</p>';
		$html .= '<div class="purchase">';
		$html .= '	<a href="./purchase.php?t_id='.$t_id.'">PURCHASE</a>';
		$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';

echo $html;
?>

