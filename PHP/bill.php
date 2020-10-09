<?php
	$order_id = $_GET['o_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bill_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="outdiv">
		<div class="innerdiv">
			
		</div>
	</div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    
function bill(){
    $.post('billback.php',{o_id:<?php echo $order_id; ?>},function(data,status){
        document.getElementsByClassName("innerdiv")[0].innerHTML = data;
    })
}
bill();
</script>
</body>
</html>