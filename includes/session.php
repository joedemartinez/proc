<?php
	date_default_timezone_set("GMT"); 
	session_start();
	include 'conn.php';

	if(!isset($_SESSION['user']) || trim($_SESSION['user']) == ''){
		header('location: index.php');
	}

	$sql = "SELECT * FROM users_table WHERE emp_id = '".$_SESSION['user']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();

	$sql = "SELECT password, user_type FROM users_table WHERE emp_id = '".$_SESSION['user']."'";
	$query = $conn->query($sql);
	$password = $query->fetch_assoc();
	
?>