<?php
    require 'config.php';	

	if(isset($_POST["submit"]))
	{
	  $drink_choice = $_POST['drink_choice'];
	  $quantity = $_POST['quantity'];
	  $drink_size = $_POST['drink_size'];
	  $add_ons = $_POST['add_ons'];
	  $fries_size = $_POST['fries_size'];
	  $variety = $_POST['variety'];
	  $food_name = $_GET['food_name'];
	 

	  $duplicate = mysqli_query($conn, "SELECT * FROM tbl_order WHERE choice = '$drink_choice' AND quantity = '$quantity' 
	  AND drink_size = '$drink_size' 
	  AND add_ons = '$add_ons' 
	  AND fries_size = '$fries_size' 
	  AND variety = '$variety' 
	  AND food_name = '$food_name' ");
		  $sql = "INSERT INTO tbl_order VALUES('','$drink_choice','$quantity','$drink_size','$add_ons','$fries_size','$variety','$food_name')";
		  $result= mysqli_query($conn, $sql);
			  echo"<script> alert('Drink Added'); </script>";
			  
			  header("Location:home.html");
	}

	

	
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
	<h1>error</h2>
  </body>
</html>