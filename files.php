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
        Uploaded Files
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Uploaded Files</li>
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
              <a href="#addnew" data-toggle="modal" title="Upload Document" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New File</a>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover table-striped">
                <thead>
                  <th>#</th>
                  <th>Filename</th>
                  <th>FileSize</th>
                  <th>Downloads</th>
                  <th>Uploaded By</th> 
                   <th>Uploaded On</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                    $sql =  "SELECT * FROM upload_files ORDER BY timers DESC";
                    $query = $conn->query($sql);
                   //id auto increament in tables initiation
                    $i = 1;
                    while($row = $query->fetch_assoc()){
                  ?>
                      <tr>
                          <td><?=  $i;?></td>
                          <td><?= $row['NAME'];?></td>
                          <td><?= floor($row['SIZE']/1000).' KB';?></td>
                          <td><?= $row['DOWNLOAD'];?></td>
                          <td><?= $row['emp_id'];?></td>
                          <td><?= $row['TIMERS'];?></td>     
                          <td>
                            <a href="process/download_file.php?id=<?= base64_encode($row['ID'])?>" title="Download" class="btn btn-primary btn-sm btn-flat download" data-id='<?= $row['ID']?>'><i class='fa fa-download'></i> Download</a>
                            <a class="btn btn-success btn-sm btn-flat view" href="uploads/<?= $row['NAME']?>" target="_blank"><i class='fa fa-eye'></i> View</a>
                            <?php if($password['user_type'] == 'admin'): ?>
                            <button title="Delete" class="btn btn-danger btn-sm btn-flat delete" data-id='<?= $row['ID']?>'><i class='fa fa-trash'></i> Delete</button>
                            <?php endif;?>
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
 <?php include 'includes/files_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>

  $(document).on("click", ".delete", function(e){
    var result = confirm('Do you want to delete this file?');
    if(result == true){
      e.preventDefault();
      var id = $(this).data('id');
      del(id);
    }else
      console.log('error')
  });

function del(id){
  $.ajax({
    type: 'POST',
    url: 'process/delete_file.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      //if data is found in database
      console.log('success');
    }
  });
}

</script>
</body>
</html>
