<?php
	include '../includes/session.php';

	if(isset($_POST['add'])){
		$table = $_POST['t_name'];
		$date = $_POST['date'];
		$pv_no = $_POST['pv_no'];
		$audit_no = $_POST['audit_no'];
		$payee = $_POST['payee'];
		$particulars = $_POST['particulars'];
		$amount = $_POST['amount'];
		$status = $_POST['status'];
		$who_queried = $_POST['who_queried'];
		$what_queried = $_POST['what_queried'];
		$created_by = $user['full_name'];
		$signature = $_POST['signature'];

		$sql = "INSERT INTO $table (`id`, `date`, `pv_no`, `audit_no`, `Payee`, `particulars`, `amount`, `status`, `who_queried`, `what_queried`, `signature`, `date_created`, `created_by`, `date_updated`, `updated_by`) VALUES (default,'$date','$pv_no','$audit_no','$payee','$particulars','$amount','$status','$who_queried','$what_queried','$signature',default,'$created_by',default,'$created_by')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'New record added successfully';
				// insert logs
				$username=$_SESSION['user'];
				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				$action = 'New Record added to '.$table .' table - PV No -'.$pv_no.' and Audit No '.$audit_no;

				//run query
				$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','$action','$ip_address','$host_name',default)");
			}
			else{
				$_SESSION['error'] = $conn->error; 
			}
	}	
	else{
		$_SESSION['error'] = 'Fill Details';
	}

	header('location: ../audit.php?page=data&search='.$table);

?>