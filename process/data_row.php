<?php 
	include '../includes/session.php';

	if(isset($_POST['search'])){
		$id = $_POST['id'];
		$search = $_POST['search'];
		$sql = "SELECT * FROM $search where id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>