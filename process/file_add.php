<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
		$emp_id = $user['emp_id'];

		$filename = $_FILES['upload_file']['name']; 
		$size = $_FILES['upload_file']['size'];

		date_default_timezone_set("GMT");
        $time = date("M-d-Y h:i A");

        // if file exist
        $sql =  "SELECT * FROM upload_files WHERE NAME='$filename' AND SIZE = '$size'";
		$query = $conn->query($sql);

		if($query->num_rows > 0){
            $_SESSION['error'] = 'File Already Exits!!!';
            header('location: ../files.php');
            die();
            exit();
        }else{
			if(!empty($filename)){
				move_uploaded_file($_FILES['upload_file']['tmp_name'], '../uploads/'.$filename);	
			}

	        $sql = "INSERT INTO `upload_files`(`ID`, `NAME`, `SIZE`, `DOWNLOAD`, `TIMERS`, `emp_id`, `date_created`, `created_by`, `deleted_by`, `date_deleted`) VALUES (default,'$filename','$size',0,'$time','$emp_id',default,'$emp_id','$employee_id',default)";

			 	if($conn->query($sql)){
			 		$_SESSION['success'] = 'New File uploaded successfully';
			 		// insert logs
					$username=$_SESSION['user'];
					// Get host machine name
					$ip_address = $_SERVER['REMOTE_ADDR'];
					$host_name = gethostbyaddr($ip_address);

					$action = $filename.' - File uploaded';	


					//run query
					$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','$action','$ip_address','$host_name',default)");
			 	}
			 	else{
			 		$_SESSION['error'] = $conn->error;
			 	}
		}
	}
	else{
	 	$_SESSION['error'] = 'Error!!';
	}

	 header('location: '.$_SERVER['HTTP_REFERER']); // load the same page

?>