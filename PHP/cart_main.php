<?php 
	include "./i_d_cart.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/cart_style.css">
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
    
function cart(){
    $.post('./cartback.php',function(data,status){
        document.getElementsByClassName("cartmaindiv")[0].innerHTML = data;
    })
}
cart();

function home(){
    window.location.href="../index.php";
}
function preventBack() {window.history.forward();} 
setTimeout("preventBack ()", 0); 
window.onunload=function() {null};
</script>

<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });  
</script>
</body>
</html>