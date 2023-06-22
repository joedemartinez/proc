<?php
	include '../inc/session.php'; 

	if(isset($_POST['upload'])){
		$emp_id = $user['emp_id'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/images/'.$filename);	
		}

			$sql = "UPDATE users_table SET photo = '$filename' WHERE emp_id = '$emp_id'";
		 	if($conn->query($sql)){
		 		$_SESSION['success'] = 'Profile Photo updated successfully';
		 		// insert logs
				$username=$user['emp_id'].' - '.$user['full_name'];
				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				$action = $emp_id.' - Photo Update';

				//run query
				$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','$action','$ip_address','$host_name',default)");
		 	}
		 	else{
		 		$_SESSION['error'] = $conn->error;
		 	}

		}
		else{
		 	$_SESSION['error'] = 'Error!!';
		}

	 header('location: '.$_SERVER['HTTP_REFERER']); // load the same page
?>