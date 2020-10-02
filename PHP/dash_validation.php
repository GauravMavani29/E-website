<?php 
	include "./db_connection.php";

	$title = $_POST['t-title'];
	$length = $_POST['length'];
	$size = $_POST['size'];
	$price = $_POST['price'];
	$washcare = $_POST['washcare'];
	$composition = $_POST['composition'];

	$temp = "";
	foreach ($size as $check) {
		$temp .= $check. " ";
	}

	$file_path = $_FILES['image']['tmp_name'];
	$dest_path = 'assets/images/tshirts/'.$_FILES['image']['name'];

	move_uploaded_file($file_path, $dest_path);

	

	$sql = "INSERT INTO `add_product` (`tshirt_id`, `tshirt_title`, `tshirt_length`, `tshirt_size`, `tshirt_image`, `tshirt_price`, `washcare`, `composition`) VALUES (NULL, '$title', '$length', '$temp', '$dest_path',$price, '$washcare', '$composition')";

	$query = mysqli_query($con,$sql);
	$msg = "";
	if($query==1){
		$msg = "Successfully Uploaded";
		header("location:./dashboard.php?msg=$msg");
	}
	else{
		$msg = "Not Uploaded";
		header("location:./dashboard.php?msg=$msg");
	}
?>