<?php
	require 'config.php';
	if(!empty($_SESSION["id"])){
	  header("Location: home.html");
	}
	if(isset($_POST["submit"])){
	  $user = $_POST["user"];
	  $password = $_POST["password"];
	  $result = mysqli_query($conn, "SELECT * FROM td_user WHERE username = '$username' AND password = '$password'");
	  $row = mysqli_fetch_assoc($result);
	  if(mysqli_num_rows($result) > 0){
		if($password == $row['password']){
		  $_SESSION["login"] = true;
		  $_SESSION["id"] = $row["id"];
		  header("Location: home.html");
		}
		else{
		  echo
		  "<script> alert('Wrong Password'); </script>";
		}
	  }
	  else{
		echo
		"<script> alert('User Not Registered'); </script>";
	  }
	}
	 header("Location: home.html");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h2>Login</h2>
    
    <br>
    <a href="registration.php">Registration</a>
  </body>
</html>