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
                                <i class="mdi mdi-archive"></i>
                            </span><?= base64_decode($_GET['t'])?> Project Phases
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Project Phase</li>
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
                                        <a href="<?= base64_decode($_GET['page'])?>" title="Back" class="btn btn-gradient-light btn-rounded btn-sm"><i class="mdi mdi-arrow-left"></i> Back</a>
                                        <button title="Refresh" class="btn btn-gradient-success btn-rounded btn-sm" onClick="window.location.reload();"><i class="mdi mdi-cached"></i> Refresh</button>
                                        <!-- <button type="button" title="Create New" class="btn btn-gradient-info btn-rounded btn-sm addNew"><i class="mdi mdi-folder-plus"></i> Create Project</button> -->
                                    </div>
                                    <table id="example1" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <th>#</th>
                                            <th>Details</th>
                                            <th>Date</th>
                                            <th>Timeline</th>
                                            <th>Scan Document</th>
                                            <?php
                                            if ($user['user_type'] == 'admin') : ?>
                                                <th>Action</th>
                                            <?php
                                            endif; ?>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $proj_id = base64_decode($_GET['id']);
                                            $sql =  "SELECT * FROM project_phase WHERE project_id = $proj_id AND delete_flag = 0 ORDER BY phase_id";
                                            $query = $conn->query($sql);
                                            //id auto increament in tables initiation
                                            $i = 1;
                                            while ($row = $query->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $row['phase_name']; ?></td>

                                                    <td><?= $row['phase_date']; ?></td>
                                                    <td><?= $row['phase_timeline1']; ?></td>
                                                    <td><?= $row['phase_pdf']; ?></td>
                                                    <?php
                                                    if ($user['user_type'] == 'admin') : ?>
                                                        <td>
                                                        <?php
                                                        if (!empty($row['phase_pdf'])) : ?>
                                                            <a title="View docs" class="btn btn-gradient-light btn-sm btn-rounded btn-icon-text" href="uploads/docs/<?= $row['phase_pdf'] ?>" target="_blank"><i class="mdi mdi mdi-eye"></i> View Doc</a>
                                                        <?php endif; ?>
                                                            <button title="Edit" class="btn btn-gradient-dark btn-sm btn-rounded btn-icon-text edit" data-id='<?= $row['phase_id'] ?>'><i class="mdi mdi-file-check"></i> Edit</button>
                                                            <!-- <button title='Delete' class='btn btn-gradient-danger btn-sm btn-rounded btn-flat delete' data-id='<?= $row['phase_id'] ?>'><i class='mdi mdi-delete'></i> Delete</button> -->

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
                <?php include 'modals/phase_modal.php'; ?>
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

        $(document).on("click", ".edit", function(e) {
            e.preventDefault();
            $('#edit').modal('show');
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
                url: 'process/phase_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    //if data is found in database
                    if (response != null) {
                        $('.phase_id').val(response.phase_id);
                        $('.phase_name').val(response.phase_name);
                        $('#phase_id').val(response.phase_id);
                        $('#phase_name').val(response.phase_name);
                        $('#phase_date').val(response.phase_date);
                        $('#phase_timeline').val(response.phase_timeline1);
                        $('#phase_pdf').val(response.phase_pdf);
                    } else { //else display nothing\
                        console.log('error, unable to fetch')
                    }
                }
            });
        }
    </script>
</body>

</html>