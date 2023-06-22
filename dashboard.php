<?php include 'inc/session.php'; ?>
<?php include 'inc/header.php'; ?>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <?php include 'inc/menubar.php'; ?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php include 'inc/sidebar.php'; ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
              </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <a title="Goods" class="col-md-3 stretch-card grid-margin nav-link" href="goods.php?id=<?= base64_encode(1) ?>&page=<?= base64_encode('goods.php') ?>">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h1 class="font-weight-normal mb-3">Goods
                  </h1>
                  <h1>
                    <?=
                    $conn->query("SELECT * FROM projects where cat_id = 1 AND `delete_flag` = 0 ")->num_rows;
                    ?>
                  </h1>
                </div>
              </div>
            </a>
            <a title="Works" class="col-md-3 stretch-card grid-margin nav-link" href="works.php?id=<?= base64_encode(2) ?>&page=<?= base64_encode('works.php') ?>">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h1 class="font-weight-normal mb-3">Works
                  </h1>
                  <h1>
                    <?=
                    $conn->query("SELECT * FROM projects where cat_id = 2 AND `delete_flag` = 0 ")->num_rows;
                    ?>
                  </h1>
                </div>
              </div>
            </a>
            <a title="Construction" class="col-md-3 stretch-card grid-margin nav-link" href="normalServices.php?id=<?= base64_encode(3) ?>&page=<?= base64_encode('normalServices.php') ?>">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h1 class="font-weight-normal mb-3">Construction
                  </h1>
                  <h1>
                    <?=
                    $conn->query("SELECT * FROM projects where cat_id = 3 AND `delete_flag` = 0 ")->num_rows;
                    ?>
                  </h1>
                </div>
              </div>
            </a>
            <a title="Technical" class="col-md-3 stretch-card grid-margin nav-link" href="technical.php?id=<?= base64_encode(4) ?>&page=<?= base64_encode('technical.php') ?>">
              <div class="card bg-gradient-primary card-img-holder text-white">
                <div class="card-body">
                  <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                  <h1 class="font-weight-normal mb-3">Technical
                  </h1>
                  <h1>
                    <?=
                    $conn->query("SELECT * FROM projects where cat_id = 4 AND `delete_flag` = 0 ")->num_rows;
                    ?>
                  </h1>
                </div>
              </div>
            </a>
          </div>
          <div class="row">

            <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Projects by Categories</h4>
                  <canvas id="barChart" style="height:230px"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- //CHARTS -->
        <?php
        // Chart 1
        $sql = "SELECT cat_name, (select count(*) from projects where cat_id = cat.cat_id) as count FROM `categories` cat ";
        $result = $conn->query($sql);
        $chart_data = "";
        while ($row = $result->fetch_assoc()) {

          $name[]  = $row['cat_name'];
          $counts[] = $row['count'];
        }

        // Prepare data for chart

        $data = json_encode($counts);
        $labels = json_encode($name);

        ?>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include 'inc/footer.php'; ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <?php include 'inc/scripts.php'; ?>

  <script>
    (function($) {
      'use strict';
      $(function() {

        //bar chart
        var data = {
          labels: <?php echo $labels; ?>,
          datasets: [{
            label: '# of Porjects',
            data: <?php echo $data; ?>,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            fill: false
          }]
        };
        var options = {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }

        };
        if ($("#barChart").length) {
          var barChartCanvas = $("#barChart").get(0).getContext("2d");
          // This will get the first returned node in the jQuery collection.
          var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: data,
            options: options
          });
        }

      });
    })(jQuery);
  </script>
</body>

</html>