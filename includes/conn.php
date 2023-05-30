<?php
	$conn = new mysqli('localhost', 'root', '', 'procdb');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>