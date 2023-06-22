<?php
include '../inc/session.php';

//set page
$page = base64_decode($_POST['page']);
//set id
$id = $_POST['cat_id'];

if (isset($_POST['update'])) { 
    $project_id = $_POST['project_id'];
    $project_name = $_POST['project_name'];
    $project_date = $_POST['project_date'];
    $project_timeline = $_POST['project_timeline'];
    $created_by = $user['emp_id'].' - '.$user['full_name'];

    //get old details
    $sql = "SELECT * FROM projects where project_id = $project_id";

    if ($conn->query($sql)) {

        $query = $conn->query($sql);
        $row = $query->fetch_assoc();

        //update
        $sql1 = "UPDATE `projects` SET `project_name`='$project_name',`project_date`='$project_date',`project_timeline`='$project_timeline' WHERE project_id = $project_id";

        if ($conn->query($sql1)) {

            // insert logs
            // Get host machine name
            $ip_address = $_SERVER['REMOTE_ADDR'];
            $host_name = gethostbyaddr($ip_address);

            $action = 'Project - ' . $row['project_name']. ' update <br/> 
                <table>
                    <thead>
                    <tr>
                        <th>Before</th>
                        <th>After</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>"'.$row['project_name'].'"</td>
                        <td>"'.$project_name.'"</td>
                    </tr>
                    <tr>
                    <td>"'.$row['project_date'].'"</td>
                    <td>"'.$project_date.'"</td>
                    </tr>
                    <tr>
                    <td>"'.$row['project_timeline'].'"</td>
                    <td>"'.$project_timeline.'"</td>
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

header('location: ../'.$page.'?id='.$id.'&page='.base64_encode($page));
