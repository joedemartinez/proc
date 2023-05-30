<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM users_table WHERE emp_id = '$username' AND status = '0'";
		$query = $conn->query($sql);


		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the Staff No - See Your Admin.';
		}
		else{
			$row = $query->fetch_assoc();
			if(password_verify($password, $row['password'])){
				$_SESSION['user'] = $row['emp_id'];
				$_SESSION['success'] = 'Welcome!!';

				// insert logs

				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				//run query
				$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','System Log In','$ip_address','$host_name',default)");
			}
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Staff No/Password is Incorrect';
	}

	header('location: index.php');

?>