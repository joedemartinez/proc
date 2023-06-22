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
                                <i class="mdi mdi-account-multiple"></i>
                            </span> Users
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
                            </ol>
                        </nav>
                    </div>

                    <?php
                    if (isset($_SESSION['error'])) {
                        echo "
                            <div class='alert alert-danger alert-dismissible'>
                            <h4><i class='icon fa fa-warning'></i> Error!</h4>
                            " . $_SESSION['error'] . "
                            </div>
                        ";
                        unset($_SESSION['error']);
                    }
                    if (isset($_SESSION['success'])) {
                        echo "
                            <div class='alert alert-success alert-dismissible'>
                            <h4><i class='icon fa fa-check'></i> Success!</h4>
                            " . $_SESSION['success'] . "
                            </div>
                        ";
                        unset($_SESSION['success']);
                    }
                    ?>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <button title="Refresh" class="btn btn-gradient-success btn-rounded btn-sm" onClick="window.location.reload();"><i class="mdi mdi-cached"></i> Refresh</button>
                                        <button type="button" title="Create New" class="btn btn-gradient-info btn-rounded btn-sm addNew"><i class="mdi mdi-account-plus"></i> New User</button>
                                    </div>
                                    <table id="example1" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <th>#</th>
                                            <th>Staff No</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>User Type</th>
                                            <th>CreatedOn</th>
                                            <th>CreatedBy</th>
                                            <?php
                                            if ($user['user_type'] == 'admin') : ?>
                                                <th>Action</th>
                                            <?php
                                            endif; ?>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql =  "SELECT * FROM users_table WHERE status = 0 ORDER BY CreatedOn DESC";
                                            $query = $conn->query($sql);
                                            //id auto increament in tables initiation
                                            $i = 1;
                                            while ($row = $query->fetch_assoc()) {
                                                //check profile pic
                                                if (empty($row['photo'])) {
                                                    $photo = '<img src="uploads/images/profile.jpg" width="30px" height="30px">';
                                                } else {
                                                    $photo = '<img width="30px" height="30px" src="uploads/images/' . $row['photo'] . '">';
                                                }
                                            ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $row['emp_id']; ?></td>

                                                    <td><?= $photo; ?></td>
                                                    <td><?= $row['full_name']; ?></td>
                                                    <td><?= $row['user_type']; ?></td>
                                                    <td><?= $row['CreatedOn']; ?></td>
                                                    <td><?= $row['CreatedBy']; ?></td>
                                                    <?php
                                                        if ($user['user_type'] == 'admin') : ?>
                                                    <td>
                                                    <?php 
                                                        if ($_SESSION['user'] != $row['emp_id']) : ?>
                                                                <button class='btn btn-gradient-success btn-sm btn-rounded btn-icon-text reset' data-id='<?= $row['emp_id'] ?>'><i class='mdi mdi-refresh'></i> Reset Password</button> 
                                                                <button class='btn btn-gradient-warning btn-sm btn-rounded btn-icon-text deactivate' data-id='<?= $row['emp_id'] ?>'><i class='mdi mdi-toggle-switch-off'></i> Deactivate</button>
                                                                <button title='Delete' class='btn btn-gradient-danger btn-sm btn-rounded btn-icon-text delete' data-id='<?= $row['emp_id'] ?>'><i class='mdi mdi-delete'></i> Delete</button>
                                                        <?php
                                                        endif; ?>
                                                    </td>
                                                    <?php
                                                        endif; ?>
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
                <?php include 'modals/users_modal.php'; ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <?php include 'inc/scripts.php'; ?>
    <script>
        $(document).on("click", ".addNew", function(e) {
            e.preventDefault();
            $('#addnew').modal('show');
        });

        $(document).on("click", ".reset", function(e) {
            e.preventDefault();
            $('#reset').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on("click", ".deactivate", function(e) {
            e.preventDefault();
            $('#deactivate').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on("click", ".delete", function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });


        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'process/employee_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    //if data is found in database
                    if (response != null) {
                        $('.empid').val(response.emp_id);
                        $('#employee_id').val(response.emp_id);
                        $('#employee_name').val(response.full_name);
                        $('.user_name').val(response.full_name);
                    } else { //else display nothing\
                        $('#employee_id').val('');
                    }
                }
            });
        }
    </script>
</body>

</html>