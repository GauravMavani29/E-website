<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/dashboard_style.css">
</head>
<body>
  <?php 
    error_reporting(0);
    $msg = $_GET['msg'];
    $color = "";
    if($msg == "Successfully Uploaded")
    {
      $color = "green";
    }
    else{
    $color = "red";
  }
  ?>
<div class="container">
<h3>Add Product</h3>
  <form action="dash_validation.php" method="POST" enctype="multipart/form-data">
    <label for="t-title">T-shirt Title</label>
    <input type="text" id="t-title" name="t-title" placeholder="T-shirt Title" required>

    <label for="length">Length (In Inches)</label>
    <input type="text" id="length" name="length" placeholder="Length of the t-shirt" required>

    <label for="Size">Size &nbsp;: </label>
    <label for="size" checked>S</label>
    <input type="checkbox" name="size[]" value="S">
    <label for="size">M</label>
    <input type="checkbox" name="size[]" value="M">
    <label for="size">L</label>
    <input type="checkbox" name="size[]" value="L">
    <label for="size">XL</label>
    <input type="checkbox" name="size[]" value="XL">
    <label for="size">XXL</label>
    <input type="checkbox" name="size[]" value="XXL"><br><br>

    <label for="Image">T-shirt Image &nbsp;:</label>
    <input type="file" name="image"  required><br/><br>

    <label for="Price">Price (In $)&nbsp; </label>
    <input type="text" id="price" name="price" placeholder="Price of the t-shirt" required>

    <label for="washcare">WASHCARE</label>
    <textarea id="washcare" name="washcare" placeholder="Write something aboute washcare .." style="height:80px"required></textarea>

    <label for="Composition">COMPOSITION</label>
    <textarea id="composition" name="composition" placeholder="Write something about composition .." style="height:80px" required></textarea>

    <input type="submit" value="Submit"><span id="success" style="color: <?php echo $color; ?>; margin: 5px;"><?php echo $msg; ?></span>
    <input type="button" value="Logout" onclick="back()">
  </form>
</div>

<script type="text/javascript" language="javascript">
  function back()
  {
    window.location.href = './admin.php?logout=<?php echo "failed"; ?>';
  }
</script>
</body>
</html>
