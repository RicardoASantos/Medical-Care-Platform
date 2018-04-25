<?php

	$servername = "localhost";
	$dbusername = "desanctu_admin";
	$dbpassword = "pastilha503";
	$dbname = "desanctu_all-in-saude";
	
	$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);

	if ($conn -> connect_error){
		 die("Connection failed: " . $conn->connect_error);
	}	
	
?>