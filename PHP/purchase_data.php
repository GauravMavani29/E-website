	<div class="maindiv">
		<div class="outerdiv">
			<h1>Purchase Product</h1>
			<div class="innerdiv">
				<form accept-charset="utf-8" method="POST">
					<div class="left">
						<div class="input">
							<label>Name &nbsp;&nbsp;<span><?php echo $fnameerr; ?></span></label>	
							<input type="text" name="fname" placeholder="Full Name" value="<?php echo $newfname; ?>">		
						</div>
						<div class="size">
							<label>Size &nbsp;&nbsp;<span><?php echo $sizeerr; ?></span></label>
							<div>
							<?php
								$size = explode(" ", $array["tshirt_size"]);
								for($i=0; $i<sizeof($size)-1; $i++)
								{
							?>
								<label><?php echo $size[$i]; ?></label>
						    	<input type="radio" name="size" value="<?php echo $size[$i]; ?>" <?php if($size[$i] == $newsize){ echo "checked"; } ?> required>
							<?php } ?>
								</div>
						</div>
						<div class="input">
							<label>Quantity</label>
							<input type="number" name="quantity" placeholder="Quantity" min="1" onchange="cal()" id="quantity"  value="<?php echo $quantity; ?>" required>
						</div>
						<div class="input">
							<label>Total</label>
							<input type="text" name="total" placeholder="Total" id="total" required  value="<?php echo $total; ?>" disabled>
						</div>
						<div class="input">
							<label>Method &nbsp;&nbsp;<span><?php echo $methoderr; ?></span></label>
							<div>
								<label>Cash on delivery</label>
								<input type="radio" name="method"  id="uncheck" value="Cash on delivery" <?php if("Cash on delivery" === $newmethod){ echo "checked"; } ?> required>
								<label>Net banking</label>
								<input type="radio" name="method" id="check" value="Net banking" <?php if("Net banking" === $newmethod){ echo "checked";} ?>>
							</div>
							
						</div>
						<div class="input">
							<label>Street Address &nbsp;&nbsp;<span><?php echo $adderr; ?></span></label>
		  					 <textarea id="address" name="address" placeholder="Write Address.." style="height:80px"><?php echo $newadd; ?></textarea>
						</div>
						<div class="input">
							<label>City &nbsp;&nbsp;<span><?php echo $cityerr; ?></span></label>
							<input type="text" name="city" placeholder="City" value="<?php echo $newcity; ?>">
						</div>
						<div class="inputrow">
							<div class="input">
								<label>state&nbsp;<span><?php echo $stateerr; ?></span></label>
								<input type="text" name="state" placeholder="State"  class="mini"  value="<?php echo $newstate; ?>">
							</div>
							<div class="input">
								<label>Zip &nbsp;&nbsp;<span><?php echo $ziperr; ?></span></label>
								<input type="text" name="zip" placeholder="Zip code"  class="mini" value="<?php echo $newzip; ?>">
							</div>
						</div>
					</div>
					<div class="right">
						<div class="netbanking">
							<div class="input">
								<label>Name on card  &nbsp;&nbsp;<span><?php echo $carderr; ?></span></label>
								<input type="text" name="cardname" placeholder="Name on card.." disabled="disabled" class="online" value="<?php echo $newcard; ?>">
							</div>
							<div class="input">
								<label>Card number &nbsp;&nbsp;<span><?php echo $cardnumerr; ?></span></label>
								<input type="text" name="cardnumber" placeholder="Card number.." disabled="disabled" class="online" value="<?php echo $newcardnum; ?>">
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
								<label>CVV &nbsp;&nbsp;<span><?php echo $cvverr; ?></span></label>
								<input type="text" name="cvv" placeholder="Enter CVV"  class="mini online" disabled="disabled"  value="<?php echo $newcvv; ?>">
							</div>
						</div>
						</div>
						<div class="details">
							<div class="input">
								<label>User-Id</label>
								<input type="text" name="user" placeholder="User Id" disabled="disabled" value="<?php echo $user; ?>">
							</div>
							<div class="input">
								<label>E-mail &nbsp;&nbsp;<span><?php echo $emailerr; ?></span></label>
								<input type="text" name="email" placeholder="E-mail address.."  value="<?php echo $newemail; ?>">
							</div>
							<div class="input">
								<label>Mobile.no &nbsp;&nbsp;<span><?php echo $mnoerr; ?></span></label>	
								<input type="text" name="mno" placeholder="Mobile number.." value="<?php echo $newmno; ?>">
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
	      document.getElementsByClassName(".online").value = "";
	      $(".online").prop("disabled",true);
	    }
  });
	  if ($('#check').is(':checked'))
	    {
	      $(".online").prop("disabled",false);
	    }

	    if ($('#uncheck').is(':checked'))
	    {
	      $(".online").prop("disabled",true);
	    }

   
});

	function cal(){
		var mul = parseInt(<?php echo $price; ?>);
		var temp = document.getElementById("quantity").value;
		document.getElementById("total").value = temp * mul;
	}

</script>
