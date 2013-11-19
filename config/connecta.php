<?php

	//db vars
	$host = 'localhost';
	$user = 'root';
	$passwrd = ''; 
	$db_name = 'impala_db'; 
	
	// Create connection
	$con=mysqli_connect($host, $user, $passwrd, $db_name);

	// Check connection
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
?> 