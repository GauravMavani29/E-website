<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/order_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
	<div class="cartmaindiv">
		
	</div>
    <div class="next">
            <button class="explore" onclick="home()"><span>Back</span></button>
    </div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    
function order(){
    $.post('orderback.php',function(data,status){
        document.getElementsByClassName("cartmaindiv")[0].innerHTML = data;
    })
}
order();
function home(){
    window.location.href="../index.php";
}
</script>
</body>
</html>