<?php
	include '../includes/session.php'; 

	if(isset($_POST['update'])){
		$emp_id = $user['emp_id'];
		$new_password = $_POST['new_password'];
		$confirm_password = $_POST['confirm_password'];

		if ($new_password === $confirm_password) {
			$new_password = password_hash($new_password, PASSWORD_DEFAULT);

			$sql = "UPDATE users_table SET password = '$new_password' WHERE emp_id = '$emp_id'";
		 	if($conn->query($sql)){
		 		$_SESSION['success'] = 'User password updated successfully';
		 		// insert logs
				$username=$_SESSION['user'];
				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				$action = $emp_id.' - Profile Update';	

				//run query
				$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','$action','$ip_address','$host_name',default)");
		 	}
		 	else{
		 		$_SESSION['error'] = $conn->error;
		 	}
		}
		else{
			$_SESSION['error'] = 'Password do not match';
		}
	}
	else{
		 $_SESSION['error'] = 'Failed to update password';
	}

	header('location: '.$_SERVER['HTTP_REFERER']); // load the same page
?>