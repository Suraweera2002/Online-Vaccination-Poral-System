<?php

	$servername = "localhost";
	$username = "root";
	$password = "12345678";
	$database ="iwt";
	// Create connection

	$connec = new mysqli($servername, $username, $password, $database);
	
	if ($connec->connect_error) {
	die("CONNECTION FAILED: " . $connec->connect_error);
	}
	
?>