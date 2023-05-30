<?php 
	include '../includes/session.php';

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$search = $_GET['search'];

		$sql1 = "SELECT pv_no, audit_no FROM $search WHERE id=$id";
		$query1 = $conn->query($sql1);
		$row1 = $query1->fetch_assoc();


		$sql = "DELETE FROM $search WHERE id = '$id'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Record Deleted successfully';
				// insert logs
				$username=$_SESSION['user'];
				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				$action = 'Record Deleted from '.$search.' table with PV No '.$row1['pv_no'].' and Audit No '.$row1['audit_no'];

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

	header('location: ../audit.php?page=data&search='.$search);   

?>
