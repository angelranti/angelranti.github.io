<?php

	$name = $_POST['name'];
	$username = $_POST['username'];
	$email_address = $_POST['email_address'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];

	// Database connection
	$conn = new mysqli('localhost: ','root','chick-a-dee');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO tbl_user(name, username, email_address, password,confirm_password) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $name, $username, $email_address, $contact_number, $password, $confirm_password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}


?>