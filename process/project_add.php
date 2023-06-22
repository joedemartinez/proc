<?php
include '../inc/session.php';

//set page
$page = base64_decode($_POST['page']);
//set id
$id = $_POST['cat_id'];

if (isset($_POST['create']) && isset($_POST['cat_id'])) { 
	$cat_id = base64_decode($_POST['cat_id']);
	$project_name = $_POST['project_name'];
	$project_date = $_POST['project_date'];
	$project_timeline = $_POST['project_timeline'];
	$created_by = $user['emp_id'] . ' - ' . $user['full_name'];

	$sql = "INSERT INTO `projects`(`project_id`, `cat_id`, `project_name`, `project_date`, `project_timeline`, `created_by`) VALUES 
	(default,$cat_id,'$project_name','$project_date','$project_timeline','$created_by')";
	
	if ($conn->query($sql)) {
		$last_id = $conn->insert_id; // get last id

		// create the various 20 project phase
		$sql1 = "INSERT INTO `project_phase`(`phase_id`, `project_id`, `phase_name`) VALUES 
				(default,$last_id,'Initialtion/Apporval'),
				(default,$last_id,'Invitation'),
				(default,$last_id,'Tender Document'),
				(default,$last_id,'Issue Form'),
				(default,$last_id,'Opening'),
				(default,$last_id,'Submission Form'),
				(default,$last_id,'Attendance Form'),
				(default,$last_id,'Opening Records'),
				(default,$last_id,'Minutes'),
				(default,$last_id,'Tender Sumbmission'),
				(default,$last_id,'Evaluation Panel'),
				(default,$last_id,'Evaluation'),
				(default,$last_id,'Evaluation approval'),
				(default,$last_id,'Notification'),
				(default,$last_id,'Acceptance'),
				(default,$last_id,'Contract'),
				(default,$last_id,'Way Bill'),
				(default,$last_id,'SRA/Certificate'),
				(default,$last_id,'Request for Payment'),
				(default,$last_id,'PV')
				";

		if ($conn->query($sql1)) {
			// insert logs
			// Get host machine name
			$ip_address = $_SERVER['REMOTE_ADDR'];
			$host_name = gethostbyaddr($ip_address);

			$action = 'New Project - ' . $project_name . ' Created ';

			//run query
			$conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$created_by','$action','$ip_address','$host_name',default)");

			$_SESSION['success'] = 'New project created successfully';
		} else {
			$_SESSION['error'] = $conn->error;
		}
	} else {
		$_SESSION['error'] = $conn->error;
	}
} else {
	$_SESSION['error'] = 'Fill Details';
}

header('location: ../'.$page.'?id='.$id.'&page='.base64_encode($page));
