<?php 
	include "./db_connection.php";
	$order_id = $_POST['o_id'];
	$sql = "SELECT `Tshirt_image`, `order_id`, `Full Name`, `Size`, `Quantity`, `Total`, `Method`, `Address`, `City`, `State`, `Zip`,`Mo number`, `date_time` FROM `purchase` WHERE order_id = $order_id;";

	$query = mysqli_query($con,$sql) or die("error:".mysqli_error($con));

	$array = mysqli_fetch_assoc($query);

	$html = "";
		// $temp = substr($array["Tshirt_image"],3);	
		$html .= '<div class="bill">';
		$html .= '<div class="imgdiv">';
		$html .= '<img src='.$array["Tshirt_image"].' alt="">';
		$html .= '</div>';
		$html .= '<div class="details">';
		$html .= '<h2>Order Details</h2>';
		$html .= '<p><b>Order-Id:&nbsp;&nbsp;&nbsp;</b><font>'.$array["order_id"].'</font></p>';
		$html .= '<p><b>Name:&nbsp;&nbsp;&nbsp;</b><font>'.$array["Full Name"].'</font></p>';
		$html .= '<p><b>Size:&nbsp;&nbsp;&nbsp;</b><font>'.$array["Size"].'</font></p>';
		$html .= '<p><b>Quantity:&nbsp;&nbsp;&nbsp;</b><font>'.$array["Quantity"].'</font></p>';
		$html .= '<p><b>Total:&nbsp;&nbsp;&nbsp;</b><font>'.$array["Total"].'$</font></p>';
		$html .= '<p><b>Payment-Type:&nbsp;&nbsp;&nbsp;</b><font>'.$array["Method"].'</font></p>';
		$html .= '<p><b>Address:&nbsp;&nbsp;&nbsp;</b><font>'.$array["Address"].' '.$array["City"].' '.$array["State"].' '.$array["Zip"].'</font></p>';
		$html .= '<p><b>Mobile no:&nbsp;&nbsp;&nbsp;</b><font>'.$array["Mo number"].'</font></p>';
		$html .= '<p><b>Purchase-Date:&nbsp;&nbsp;&nbsp;</b><font>'.$array["date_time"].'</font></p>';
		$html .= '<div class="next">';
       	$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';

echo $html;
?>