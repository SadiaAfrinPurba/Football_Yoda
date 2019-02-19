<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "football_yoda";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	
?>