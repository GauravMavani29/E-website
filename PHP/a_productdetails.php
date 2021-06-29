<?php 
$t_id = $_GET['t_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/product_style.css">
	<link rel="icon" type="image/png" href="../assets/png/nav-shopping.png"/>

</head>
<body>
	<div class="bg">
		<div class="outdiv">
			
		</div>
		
	</div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
function home(){
    window.location.href="../index.php";
}

	function explore(){
		$.post("a_productdetailsback.php",{tshirt_id:<?php echo $t_id; ?>}, function(data,status){
			document.getElementsByClassName("outdiv")[0].innerHTML = data;
		})
	}
	explore();
</script>
</body>
</html>