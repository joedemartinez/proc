<?php 
	include '../includes/session.php';

	if(isset($_GET['id'])){
 		$hash = $_GET['id'];
		$id = base64_decode($hash);

		$sql = "SELECT NAME, DOWNLOAD FROM upload_files WHERE ID='$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		$filepath = '../uploads/' . $row['NAME'];

		// insert logs
		$username=$_SESSION['user'];
		// Get host machine name
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$host_name = gethostbyaddr($ip_address);

		$action = 'File Download -'.$row['NAME'];

		//run query
		$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$username','$action','$ip_address','$host_name',default)");

		if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($row['NAME']));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../uploads/' . $row['NAME']));
        readfile('../uploads/' . $row['NAME']);

        // Now update downloads count
        $newCount = $row['DOWNLOAD']+1;
       
        $updateQuery = "UPDATE upload_files SET DOWNLOAD=$newCount WHERE ID=$id";
        $query1 = $conn->query($updateQuery);
        exit;
    	}
	}
	else{
		$_SESSION['error'] = 'Error Occurred';
	} 

	header('location: ../files.php');
?>