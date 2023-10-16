<?php
//Hugo Hiraoka
//This PHP script has information to access the database

	$servername = "localhost";
	$dbuser = "hugo";
	$dbpwd = "password";
	$dbname = "MOKOSPACE";

	// Create connection to database
	$conn = new mysqli($servername, $dbuser, $dbpwd, $dbname);

	// Check connection to database
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else 
	{
		

	echo "Connected successfully to "."$dbname";
	}
?>
