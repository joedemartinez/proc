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
        Deactivated Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Deactivated Users</li>
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
              <!-- <a href="#addnew" data-toggle="modal" title="Add User" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New User</a> -->
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover table-striped">
                <thead>
                  <th>#</th>
                  <th>Staff No</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>User Type</th>
                  <th>CreatedOn</th>
                  <th>CreatedBy</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $sql =  "SELECT * FROM users_table WHERE status = 1 ORDER BY CreatedOn DESC";
                    $query = $conn->query($sql);
                   //id auto increament in tables initiation
                    $i = 1;
                    while($row = $query->fetch_assoc()){
                      //check profile pic
                      if(empty($row['photo'])){
                        $photo = '<img src="assets/images/profile.jpg" width="30px" height="30px">';
                      }else{
                        $photo = '<img width="30px" height="30px" src="assets/images/'.$row['photo'].'">';
                      }
                  ?>
                        <tr>
                          <td><?=  $i;?></td>
                          <td><?= $row['emp_id'];?></td>

                          <td><?= $photo;?></td>
                          <td><?= $row['full_name'];?></td>
                          <td><?= $row['user_type'];?></td>
                          <td><?= $row['CreatedOn'];?></td>
                          <td><?= $row['CreatedBy'];?></td>      
                          <td>
                            <?php 
                            if($password['user_type'] == 'admin'):
                              if($_SESSION['user'] != $row['emp_id']): ?>
                                <button class='btn btn-info btn-sm btn-flat activate' data-id='<?= $row['emp_id']?>'><i class='fa fa-toggle-on'></i> Activate</button>
                                <button title='Delete Unit' class='btn btn-danger btn-sm btn-flat delete' data-id='<?= $row['emp_id']?>'><i class='fa fa-trash'></i> Delete</button>
                            <?php 
                              endif;
                            endif;?>
                          </td>
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
 <?php include 'includes/users_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>


  $(document).on("click", ".activate", function(e){
    e.preventDefault();
    $('#activate').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on("click", ".delete", function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });


function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'process/employee_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      //if data is found in database
      if (response != null){
        $('.empid').val(response.emp_id);
        $('#employee_id').val(response.emp_id);
       $('#employee_name').val(response.full_name);
       $('.user_name').val(response.full_name);
      }
      else{//else display nothing\
        $('#employee_id').val(''); 
      }
    }
  });
}
</script>
</body>
</html>
