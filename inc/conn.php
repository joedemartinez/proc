<?php
	$conn = new mysqli('localhost', 'root', '', 'proc');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>