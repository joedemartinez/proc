<?php
	include '../includes/session.php';

	if(isset($_POST['delete'])){
		$emp_id = $_POST['empid'];

		//$sql = "DELETE FROM users_table WHERE emp_id = '$emp_id'";
		$sql = "DELETE FROM users_table WHERE emp_id = '$emp_id'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'User Deleted successfully';

				// insert logs
				$username=$_SESSION['user'];
				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				$action = 'User Deleted - '.$emp_id;

				//run query
				$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','$action','$ip_address','$host_name',default)");
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
	}
	else if(isset($_POST['deactivate'])){
		$emp_id = $_POST['empid'];

		//$sql = "DELETE FROM users_table WHERE emp_id = '$emp_id'";
		$sql = "UPDATE users_table SET status = '1' WHERE emp_id = '$emp_id'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Successfully Deactivated';

				// insert logs
				$username=$_SESSION['user'];
				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				$action = 'User Deactivation - '.$emp_id;

				//run query
				$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','$action','$ip_address','$host_name',default)");

				header('location: ../deactivatedusers.php'); 
				exit();
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
	}
	else if(isset($_POST['activate'])){
		$emp_id = $_POST['empid'];

		//$sql = "DELETE FROM users_table WHERE emp_id = '$emp_id'";
		$sql = "UPDATE users_table SET status = '0' WHERE emp_id = '$emp_id'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Successfully Activated';
				// insert logs
				$username=$_SESSION['user'];
				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				$action = 'User Activation - '.$emp_id;

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

	header('location: ../users.php');   

?>