<?php
	session_start();
	include '../inc/conn.php';
	// insert logs
	$username=$_SESSION['user'];
	// Get host machine name
	$ip_address = $_SERVER['REMOTE_ADDR'];
	$host_name = gethostbyaddr($ip_address);

	//run query
	$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','System Log Out','$ip_address','$host_name',default)");

	session_destroy();

	header('location: ../index.php');
?>