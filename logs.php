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
                                <i class="mdi mdi-playlist-check"></i>
                            </span> Logs
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Logs</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover table-striped">
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
                                            while ($row = $query->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $row['action']; ?></td>
                                                    <td><?= $row['emp_id']; ?></td>
                                                    <td><?= $row['ip']; ?></td>
                                                    <td><?= $row['host']; ?></td>
                                                    <td><?= $row['created_at']; ?></td>
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
                </div>
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
</body>

</html>