<?php
include '../inc/session.php';

//set page
$page = $_POST['page'];
//set id
$id = $_POST['project_id'];
// set project name
$t = $_POST['project_name'];

if (isset($_POST['update'])) { 
    $phase_id = $_POST['phase_id'];
    $phase_name = $_POST['phase_name'];
    $phase_date = $_POST['phase_date'];
    $phase_timeline = $_POST['phase_timeline'];
    $phase_pdf = $_FILES['phase_pdf']['name']; 
    $created_by = $user['emp_id'].' - '.$user['full_name'];

    //get old details
    $sql = "SELECT * FROM project_phase where phase_id = $phase_id";

    if ($conn->query($sql)) {

        $query = $conn->query($sql);
        $row = $query->fetch_assoc();

        //if file is empty
        if(empty($phase_pdf) && !empty($row['phase_pdf'])){
            $phase_pdf = $row['phase_pdf'];
        }

        //update
        $sql1 = "UPDATE `project_phase` SET `phase_name`='$phase_name',`phase_date`='$phase_date',`phase_timeline1`='$phase_timeline',`phase_pdf`='$phase_pdf' WHERE phase_id = $phase_id";

        if ($conn->query($sql1)) {

            //upload file
            if(!empty($phase_pdf)){
				move_uploaded_file($_FILES['phase_pdf']['tmp_name'], '../uploads/docs/'.$phase_pdf);	
			}

            // insert logs
            // Get host machine name
            $ip_address = $_SERVER['REMOTE_ADDR'];
            $host_name = gethostbyaddr($ip_address);

            $action = 'Project Phase - ' . $row['phase_name']. ' update <br/> 
                <table>
                    <thead>
                    <tr>
                        <th>Before</th>
                        <th>After</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>"'.$row['phase_name'].'"</td>
                        <td>"'.$phase_name.'"</td>
                    </tr>
                    <tr>
                    <td>"'.$row['phase_date'].'"</td>
                    <td>"'.$phase_date.'"</td>
                    </tr>
                    <tr>
                    <td>"'.$row['phase_timeline1'].'"</td>
                    <td>"'.$phase_timeline.'"</td>
                    </tr>
                    <tr>
                    <td>"'.$row['phase_pdf'].'"</td>
                    <td>"'.$phase_pdf.'"</td>
                    </tr>
                    </tbody>
                </table>';

            //run query
            $conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$created_by','$action','$ip_address','$host_name',default)");

            $_SESSION['success'] = 'Project updated successfully';
        } else {
            $_SESSION['error'] = $conn->error;
        }
    } else {
        $_SESSION['error'] = $conn->error;
    }
} else {
    $_SESSION['error'] = 'Error Fetching Data';
}

header('location: ../project_phase.php?id='.$id.'&page='.$page.'&t='.$t);
