<?php 
$t_id = $_GET['t_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/product_style.css">

</head>
<body>
	<div class="bg">
		<div class="outdiv">
			
		</div>
	</div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
	function explore(){
		$.post("productback.php",{tshirt_id:<?php echo $t_id; ?>}, function(data,status){
			document.getElementsByClassName("outdiv")[0].innerHTML = data;
		})
	}
	explore();
</script>
</body>
</html>