<?php 
	error_reporting(0);
	include "./db_connection.php";
	session_start();
	$user = $_SESSION['user'];

	$t_id = $_GET['t_id'];
	$sql = "select `tshirt_size`, `tshirt_price` from `add_product` where tshirt_id = $t_id;";

	$query = mysqli_query($con,$sql);

	$array = mysqli_fetch_assoc($query);

	$size = explode(" ", $array["tshirt_size"]);
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/purchase_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
</head>
<body>
<?php
	error_reporting(0);
	$temp = 0;
	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		if(!ctype_alpha($fname)){
			$fnameerr = "Only Alphabets";
		}
		else{
			$newfname = $fname;
			$temp+=1;

		}
		$address = $_POST['address'];
		if(!ctype_alpha($address)){
			$adderr = "Only Alphabets";
		}
		else{
			$newadd = $address;
			$temp+=1;
		}

		// if($temp == 2)
		// {
		// 	header("location: ./index.php");
		// }
	}
?>
	<div class="maindiv">
		<div class="outerdiv">
			<h1>Purchase Product</h1>
			<div class="innerdiv">
				<form accept-charset="utf-8" method="POST">
					<div class="left">
						<div class="input">
							<label>Full Name &nbsp;&nbsp;<span><?php echo $fnameerr; ?></span></label>	
							<input type="text" name="fname" placeholder="Full Name" value="<?php echo $newfname; ?>">		
						</div>
						<div class="size">
							<label>Size &nbsp;&nbsp;<span><?php echo $sizeerr; ?></span></label>
							<div>
							<?php
								for($i=0; $i<sizeof($size)-1; $i++)
								{
							?>
							
								<label><?php echo $size[$i]; ?></label>
						    	<input type="radio" name="size" required>
						
							
							<?php } ?>
								</div>
						</div>
						<div class="input">
							<label>Quantity</label>
							<input type="number" name="quantity" placeholder="Quantity" min="1" onchange="cal()" id="quantity">
						</div>
						<div class="input">
							<label>Total</label>
							<input type="text" name="total" disabled="disabled" placeholder="Total" id="total">
						</div>
						<div class="input">
							<label>Method</label>
							<div>
								<label>Cash on delivery</label>
								<input type="radio" name="method"  id="uncheck">
								<label>Net banking</label>
								<input type="radio" name="method" id="check">
							</div>
							
						</div>
						<div class="input">
							<label>Address &nbsp;&nbsp;<span><?php echo $adderr; ?></span></label>
		  					 <textarea id="address" name="address" placeholder="Write Address.." style="height:80px"><?php echo $newadd; ?></textarea>
						</div>
						<div class="input">
							<label>City</label>
							<input type="text" name="city" placeholder="City">
						</div>
						<div class="inputrow">
							<div class="input">
								<label>state</label>
								<input type="text" name="state" placeholder="State"  class="mini">
							</div>
							<div class="input">
								<label>Zip</label>
								<input type="text" name="zip" placeholder="Zip code"  class="mini">
							</div>
						</div>
					</div>
					<div class="right">
						<div class="netbanking">
							<div class="input">
								<label>Name on card</label>
								<input type="text" name="cardname" placeholder="Name on card.." disabled="disabled" class="online" required>
							</div>
							<div class="input">
								<label>Card number</label>
								<input type="text" name="cardnumber" placeholder="Card number.." disabled="disabled" class="online">
							</div>
							<div class="input">
								<label>Expire Month</label>
								<!-- <input type="text" name="month" placeholder="Month" disabled="disabled" class="online"> -->
								<select name="month"  disabled="disabled" class="online">
									<option value="January">January</option>
									<option value="February">February</option>
									<option value="March">March</option>
									<option value="April">April</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="August">August</option>
									<option value="September">September</option>
									<option value="October">October</option>
									<option value="November">November</option>
									<option value="December">December</option>
								</select>
							</div>
							<div class="inputrow">
								<div class="input">
									<label>Exp. Year</label>
									<select name="year"  disabled="disabled" class="online year">
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
										<option value="2025">2025</option>
									</select>
								</div>
							<div class="input">
								<label>CVV</label>
								<input type="text" name="cvv" placeholder="Enter CVV"  class="mini online" disabled="disabled">
							</div>
						</div>
						</div>
						<div class="details">
							<div class="input">
								<label>User-Id</label>
								<input type="text" name="user" placeholder="User Id" disabled="disabled" value="<?php echo $user; ?>">
							</div>
							<div class="input">
								<label>E-mail</label>
								<input type="text" name="email" placeholder="E-mail address..">
							</div>
							<div class="input">
								<label>Mobile.no</label>	
								<input type="text" name="mno" placeholder="Mobile number..">
							</div>
							<div class="input">
								<input type="submit" name="submit" value="Purchase">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>
	$(function(){
	  $('#check').click(function(){
	    if ($(this).is(':checked'))
	    {
	      $(".online").prop("disabled",false);
	    }
  });
	  $('#uncheck').click(function(){
	    if ($(this).is(':checked'))
	    {
	      $(".online").prop("disabled",true);
	    }
  });
});

	function cal(){
		var temp = document.getElementById("quantity").value;
		document.getElementById("total").value = temp * 1;
	}
</script>
</body>
</html>