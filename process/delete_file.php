<?php 
	include '../includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];

		$sql1 = "SELECT NAME, DOWNLOAD FROM upload_files WHERE ID='$id'";
		$query1 = $conn->query($sql1);
		$row1 = $query1->fetch_assoc();


		$sql = "DELETE FROM upload_files WHERE ID = '$id'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'File Deleted successfully';
				// insert logs
				$username=$_SESSION['user'];
				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				$action = 'File Deleted -'.$row1['NAME'];

				//run query
				$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','$action','$ip_address','$host_name',default)");
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
	}
	else{
		$_SESSION['error'] = 'Error Occurred';
	}

	header('location: ../files.php');   

?>
?>