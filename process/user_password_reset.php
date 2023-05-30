<?php
	include '../includes/session.php';

	if(isset($_POST['reset'])){
		$employee_id = $_POST['employee_id'];
		$password = password_hash("password", PASSWORD_DEFAULT);


		$sql = "UPDATE users_table SET password = '$password' WHERE emp_id = '$employee_id'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Password Reset successful';
				// insert logs
				$username=$_SESSION['user'];
				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				$action = 'Password Reset for - '.$employee_id;

				//run query
				$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','$action','$ip_address','$host_name',default)");
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
	}	
	else{
		$_SESSION['error'] = 'Unable to Reset Password';
	}

	header('location: ../users.php');

?>