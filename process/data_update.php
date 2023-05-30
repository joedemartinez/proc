<?php
	include '../includes/session.php';

	if(isset($_POST['update'])){
		$id = $_POST['e_id'];
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

		$sql = "UPDATE $table SET `date`='$date',`pv_no`='$pv_no',`audit_no`='$audit_no',`Payee`='$payee',`particulars`='$particulars',`amount`='$amount',`status`='$status',`who_queried`='$who_queried',`what_queried`='$what_queried',`signature`='$signature',`date_updated`=default,`updated_by`='$created_by' WHERE id = $id";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Record updated successfully';
				// insert logs
				$username=$_SESSION['user'];
				// Get host machine name
				$ip_address = $_SERVER['REMOTE_ADDR'];
				$host_name = gethostbyaddr($ip_address);

				$action = 'Record updated in '.$table .' table - PV No -'.$pv_no.' and Audit No '.$audit_no;

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