<?php

	$dbhost = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rdesk";

	$conn = new mysqli($dbhost, $username, $password, $dbname);

	if ($conn->connect_errno) {
		die("Connection failed: " . $conn->connect_errno);
	}

?>