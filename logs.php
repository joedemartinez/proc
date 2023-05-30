<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        History Logs
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">History Logs</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <button class="btn btn-primary btn-sm btn-flat" onClick="window.location.reload();"><i class="fa fa-refresh"></i> Refresh</button>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover table-striped">
                <thead>
                  <th>#</th>
                  <th>Log</th>
                  <th>User</th>
                  <th>IP Address</th>
                  <th>Host Machine</th> 
                   <th>Created On</th>
                </thead>
                <tbody>
                  <?php
                    $sql =  "SELECT * FROM history_log ORDER BY created_at DESC";
                    $query = $conn->query($sql);
                   //id auto increament in tables initiation
                    $i = 1;
                    while($row = $query->fetch_assoc()){
                  ?>
                      <tr>
                          <td><?=  $i;?></td>
                          <td><?= $row['action'];?></td>
                          <td><?= $row['emp_id'];?></td>
                          <td><?= $row['ip'];?></td>
                          <td><?= $row['host'];?></td>
                          <td><?= $row['created_at'];?></td>
                         </tr>
                     <?php $i++;
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
 <?php include 'includes/files_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
