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
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 0;">
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
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">4
              <?php
                // $sql = "SELECT * FROM upload_files";
                // $query = $conn->query($sql);

                // echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>...</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-stalker"></i>
            </div>
            <a href="#" class="small-box-footer">...</i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">4
              <?php
                // $sql = "SELECT * FROM reform";
                // $query = $conn->query($sql);

                // echo "<h3>".$query->num_rows."</h3>";
              ?>
              <p>...</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-list"></i>
            </div>
            <a href="#" class="small-box-footer">...</i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">4
              <?php
                // $sql = "SELECT * FROM fpmu";
                // $query = $conn->query($sql);

                // echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>....</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-list"></i>
            </div>
            <a href="#" class="small-box-footer">...</i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">6
              <?php
                // $sql = "SELECT * FROM free_shs";
                // $query = $conn->query($sql);

                // echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>....</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-list"></i>
            </div>
            <a href="#" class="small-box-footer">...</i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </section>




    <!-- chart -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div style="width: 100%;">
            <canvas id="myChart"></canvas>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-12">
          <!-- small box -->
          <div style="width: 100%;">
            <canvas id="myChart1"></canvas>
          </div>
        </div>
        <!-- ./col -->
      </div>
      
      
        <!-- <div style="width: 40%;">
          <canvas id="myChart"></canvas>
        </div>
        <div style="width: 40%; float: right;">
          <canvas id="myChart1"></canvas>
        </div> -->
      

      <?php
        // Chart 1
        // $sql ="SELECT emp_id,count(emp_id) as count FROM upload_files group by emp_id";
        // $result =$conn->query($sql);
        // $chart_data="";
        // while ($row = $result->fetch_assoc()) { 
   
        //       $name[]  = $row['emp_id']  ;
        //       $counts[] = $row['count'];
        //   }

        // // Prepare data for chart

        // $data = json_encode($counts);
        // $labels = json_encode($name);

        // //Chart 2
        // $sql1 ="SELECT NAME,sum(DOWNLOAD) as count FROM upload_files group by NAME";
        // $result1 =$conn->query($sql1);
        // $chart_data1="";
        // while ($row1 = $result1->fetch_assoc()) { 
   
        //       $name1[]  = $row1['NAME']  ;
        //       $counts1[] = $row1['count'];
        //   }

        // // Prepare data for chart

        // $data1 = json_encode($counts1);
        // $labels1 = json_encode($name1);

      ?>
    </section>

      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<script src="assets/dist/js/Chart.min.js"></script>
  <script>
    console.log( <?php echo $data; ?>)
    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx1 = document.getElementById('myChart1').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?php echo $labels; ?>,
        datasets: [{
          label: 'Files Uploaded Per Person',
          data: <?php echo $data; ?>,
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)'
          ],
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,
              stepSize: 1,
              beginAtZero: true
            }
          }]
        }
      }
    });

    var myChart1 = new Chart(ctx1, {
      type: 'line',
      data: {
        labels: <?php echo $labels1; ?>,
        datasets: [{
          label: 'Files Per Download',
          data: <?php echo $data1; ?>,
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)'
          ],
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              min: 0,
              stepSize: 1,
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>

</body>
</html>
