<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
		$emp_id = $_POST['emp_id'];
		$password = password_hash("password", PASSWORD_DEFAULT);
		$user_type = $_POST['user_type'];
		$full_name = $_POST['emp_name'];
		date_default_timezone_set("GMT");
        $CreatedOn = date('Y-m-d');

        $CreatedBy = $user['full_name'];

        $sql =  "SELECT * FROM users_table WHERE emp_id='$emp_id'";
		$query = $conn->query($sql);
		if($query->num_rows > 0){
            $_SESSION['error'] = 'Staff ID Already Exits!!!';
            header('location: ../users.php');
            die();
            exit();
        }
        else{
			$sql = "INSERT INTO users_table (emp_id, full_name, password, user_type, CreatedOn, CreatedBy) VALUES ('$emp_id', '$full_name', '$password', '$user_type', '$CreatedOn', '$CreatedBy')";
				if($conn->query($sql)){
					$_SESSION['success'] = 'User added successfully';
					// insert logs
					$username=$_SESSION['user'];
					// Get host machine name
					$ip_address = $_SERVER['REMOTE_ADDR'];
					$host_name = gethostbyaddr($ip_address);

					$action = 'User Created - '.$emp_id;

					//run query
					$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','$action','$ip_address','$host_name',default)");
				}
				else{
					$_SESSION['error'] = $conn->error; 
				}
        }
	}	
	else{
		$_SESSION['error'] = 'Fill Details';
	}

	header('location: ../users.php');

?>