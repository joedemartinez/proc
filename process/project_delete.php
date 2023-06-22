<?php
include '../inc/session.php';

//set page
$page = base64_decode($_POST['page']);
//set id
$id = $_POST['cat_id'];

if (isset($_POST['delete'])) { 
    $project_id = $_POST['project_id'];
    $project_name = $_POST['project_name'];
    $created_by = $user['emp_id'].' - '.$user['full_name'];

    //get old details
    $sql = "SELECT * FROM projects where delete_flag = 0 AND project_id = $project_id";

    if ($conn->query($sql)) {

        $query = $conn->query($sql);
        $row = $query->fetch_assoc();

        //update
        $sql1 = "UPDATE `projects` SET `delete_flag`= 1 WHERE project_id = $project_id";

        if ($conn->query($sql1)) {

            // insert logs
            // Get host machine name
            $ip_address = $_SERVER['REMOTE_ADDR'];
            $host_name = gethostbyaddr($ip_address);

            $action = 'Project - ' . $row['project_name']. ' deleted';

            //run query
            $conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$created_by','$action','$ip_address','$host_name',default)");

            $_SESSION['success'] = 'Project deleted successfully';
        } else {
            $_SESSION['error'] = $conn->error;
        }
    } else {
        $_SESSION['error'] = $conn->error;
    }
}
else if (isset($_POST['delete_forever'])) {
    $project_id = $_POST['project_id'];
    $project_name = $_POST['project_name'];
    $created_by = $user['emp_id'].' - '.$user['full_name'];

    //get old details
    $sql = "SELECT * FROM projects where delete_flag = 1 AND project_id = $project_id";

    if ($conn->query($sql)) {

        $query = $conn->query($sql);
        $row = $query->fetch_assoc();

        //update
        $sql1 = "UPDATE `projects` SET `delete_flag`= 2 WHERE project_id = $project_id";

        if ($conn->query($sql1)) {

            // insert logs
            // Get host machine name
            $ip_address = $_SERVER['REMOTE_ADDR'];
            $host_name = gethostbyaddr($ip_address);

            $action = 'Project - ' . $row['project_name']. ' deleted forever';

            //run query
            $conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$created_by','$action','$ip_address','$host_name',default)");

            $_SESSION['success'] = 'Project deleted permanently successful';
        } else {
            $_SESSION['error'] = $conn->error;
        }
    } else {
        $_SESSION['error'] = $conn->error;
    }
} 
else if (isset($_POST['putback'])) {
    $project_id = $_POST['project_id'];
    $project_name = $_POST['project_name'];
    $created_by = $user['emp_id'].' - '.$user['full_name'];

    //get old details
    $sql = "SELECT * FROM projects where delete_flag = 1 AND project_id = $project_id";

    if ($conn->query($sql)) {

        $query = $conn->query($sql);
        $row = $query->fetch_assoc();

        //update
        $sql1 = "UPDATE `projects` SET `delete_flag`= 0 WHERE project_id = $project_id";

        if ($conn->query($sql1)) {

            // insert logs
            // Get host machine name
            $ip_address = $_SERVER['REMOTE_ADDR'];
            $host_name = gethostbyaddr($ip_address);

            $action = 'Project - ' . $row['project_name']. ' restored';

            //run query
            $conn->query("INSERT INTO `history_log`(`log_id`, `emp_id`, `action`, `ip`, `host`, `created_at`) VALUES (default,'$created_by','$action','$ip_address','$host_name',default)");

            $_SESSION['success'] = 'Project restore successful';
        } else {
            $_SESSION['error'] = $conn->error;
        }
    } else {
        $_SESSION['error'] = $conn->error;
    }
} 
else {
    $_SESSION['error'] = 'Error Fetching Data';
}

header('location: ../'.$page.'?id='.$id.'&page='.base64_encode($page));
