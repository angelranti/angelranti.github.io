<?php
     session_start();
	 
	 define('SITEURL','http://localhost/chick-a-dee/');
	 define('LOCALHOST','localhost');
	 define('DB_USERNAME','root');
	 define('DB_PASSWORD','');
	 define('DB_NAME','chick-a-dee');
	 
     $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());//database connection
	 $db_select= mysqli_select_db($conn,'chick-a-dee') or die(mysqli_error());
	 
?>