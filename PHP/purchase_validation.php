<?php
error_reporting(0);
	if(isset($_POST['submit'])){
	$todo = 0;
		$fname = $_POST['fname'];
		if(!ctype_alpha(str_replace(' ', '', $fname))){
			$fnameerr = "Only Alphabets";
		}
		else{
			$newfname = $fname;
			$todo+=1;
		}

		$quantity = $_POST['quantity'];
		$size = $_POST['size'];
		if(!isset($_POST['size'])){
			$sizeerr = "Select atleast one ";
		}
		else{
			$newsize = $_POST['size'];
			$todo+=1;
		}

		$method = $_POST['method'];
		if(!isset($_POST['method'])){
			$methoderr = "Select atleast one ";
		}
		else{
			$newmethod = $_POST['method'];
			$todo+=1;
		}

		$address = $_POST['address'];
		if(!ctype_alnum(str_replace(' ', '',$address))){
			$adderr = "Only Alphabets";
		}
		else{
			$newadd = $address;
			$todo+=1;
		}

		$city = $_POST['city'];
		if(!ctype_alpha(str_replace(' ', '', $city))){
			$cityerr = "Only alphabets";
		}
		else{
			$newcity = $city;
			$todo+=1;
		}

		$state = $_POST['state'];
		if(!ctype_alpha(str_replace(' ', '', $state))){
			$stateerr = "Only alphabets";
		}
		else{
			$newstate = $state;
			$todo+=1;
		}

		$zip = $_POST['zip'];
		if(!ctype_digit($zip)){
			$ziperr = "Only digits";
		}
		elseif((strlen($zip) != 6))
		{
			$ziperr = "Only 6 digits";
		}
		else{
			$newzip = $zip;
			$todo+=1;
		}

		if($_POST['method'] === "Net banking")
		{
			$card = $_POST['cardname'];
			if(!ctype_alpha(str_replace(' ', '', $card))){
				$carderr = "Only Alphabets";
			}
			else{
				$newcard = $card;
				$todo+=1;
			}

			$cardnumber = $_POST['cardnumber'];
			if(!ctype_digit(str_replace(' ', '', $cardnumber))){
				$cardnumerr = "Only Digits";
			}
			elseif((strlen($cardnumber) != 12))
			{
				$cardnumerr = "Only 12 digits";
			}
			else{
				$newcardnum = $cardnumber;
				$todo+=1;
			}

			$cvv = $_POST['cvv'];
			if(!ctype_digit(str_replace(' ', '', $cvv))){
				$cvverr = "Only Digits";
			}
			elseif((strlen($cvv) != 3))
			{
				$cvverr = "Only 3 digits";
			}
			else{
				$newcvv = $cvv;
				$todo+=1;
			}
		}

		$email = $_POST['email'];
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                    $emailerr = "Invalid email format";
                }
                else{
                    $newemail = $_POST["email"];
                    $todo+=1;
                }  

        $number = $_POST['mno'];
        if((strlen($number) != 10) or (!ctype_digit($number))){
        	$mnoerr = "Enter 10 digit number";
        }
        else{
        	$newmno = $number;
        	$todo+=1;
        }

        $quantity = $_POST["quantity"];
        $total = ((int)$price * $quantity);
        $month = $_POST['month'];
        $year = $_POST['year'];
        if(($_POST["method"] === "Cash on delivery") and ($todo == 9)){
        	$cashinsert = "INSERT INTO `purchase` (`order_id`, `user_id`, `tshirt_id`, `Full Name`, `Size`, `Quantity`, `Total`, `Method`, `Address`, `City`, `State`, `Zip`, `Card holder`, `Card number`, `Exp month`, `Exp year`, `CVV`, `Email`, `Mo number`, `Tshirt_image`, `date_time`) VALUES (NULL, '$user', $t_id, '$fname', '$size', $quantity, $total , '$method', '$address', '$city', '$state', $newzip, NULL , NULL, NULL, NULL , NULL, '$email', $number, '$image', current_timestamp);";

        	$cashquery = mysqli_query($con,$cashinsert) or die("error:".mysqli_error($con));

        	$order = "SELECT order_id FROM purchase ORDER BY order_id DESC LIMIT 1;";

        	$orderquery = mysqli_query($con,$order) or die("error:".mysqli_error($con));

        	$array = mysqli_fetch_assoc($orderquery);

        	$order_id = $array["order_id"];
        	mysqli_close($con);
        	header("location: ./bill.php?o_id=$order_id");
        }
        elseif($_POST["method"] === "Net banking" and $todo == 12)
        {
        	$onlineinsert = "INSERT INTO `purchase` (`order_id`, `user_id`, `tshirt_id`, `Full Name`, `Size`, `Quantity`, `Total`, `Method`, `Address`, `City`, `State`, `Zip`, `Card holder`, `Card number`, `Exp month`, `Exp year`, `CVV`, `Email`, `Mo number`, `Tshirt_image`, `date_time`) VALUES (NULL, '$user', $t_id, '$fname', '$size', $quantity, $total , '$method', '$address', '$city', '$state', $newzip, '$card' , '$cardnumber', '$month', '$year' , '$cvv', '$email', $number, '$image', current_timestamp);";

        	$onlinequery = mysqli_query($con,$onlineinsert) or die("error:".mysqli_error($con));

        	$order = "SELECT order_id FROM purchase ORDER BY order_id DESC LIMIT 1;";

        	$orderquery = mysqli_query($con,$order) or die("error:".mysqli_error($con));

        	$array = mysqli_fetch_assoc($orderquery);

        	$order_id = $array["order_id"];

        	mysqli_close($con);
        	header("location: ./bill.php?o_id=$order_id");
        }
	}
?>
