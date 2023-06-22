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
                            </span> Technical
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Technical</li>
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
                                        <button type="button" title="Create New" class="btn btn-gradient-info btn-rounded btn-sm addNew"><i class="mdi mdi-folder-plus"></i> Create Project</button>
                                    </div>
                                    <table id="example1" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <th>#</th>
                                            <th>Project Name</th>
                                            <th>Date</th>
                                            <th>Timeline</th>
                                            <th>Date Created</th>
                                            <th>Created By</th>
                                            <?php
                                            if ($user['user_type'] == 'admin') : ?>
                                                <th>Action</th>
                                            <?php
                                            endif; ?>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql =  "SELECT * FROM projects WHERE cat_id = 4 AND delete_flag = 0 ORDER BY date_created DESC";
                                            $query = $conn->query($sql);
                                            //id auto increament in tables initiation
                                            $i = 1;
                                            while ($row = $query->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><a title="View Project Details" href="project_phase.php?id=<?=base64_encode($row['project_id'])?>&page=<?=base64_encode('technical.php')?>&t=<?=base64_encode($row['project_name'])?>"><?= $row['project_name']; ?></a></td>

                                                    <td><?= $row['project_date']; ?></td>
                                                    <td><?= $row['project_timeline']; ?></td>
                                                    <td><?= $row['date_created']; ?></td>
                                                    <td><?= $row['created_by']; ?></td>
                                                    <?php
                                                    if ($user['user_type'] == 'admin') : ?>
                                                        <td>
                                                            <button title="Edit" class="btn btn-gradient-dark btn-sm btn-rounded btn-icon-text edit" data-id='<?= $row['project_id'] ?>'><i class="mdi mdi-file-check"></i> Edit</button>
                                                            <button title='Delete' class='btn btn-gradient-danger btn-sm btn-rounded btn-flat delete' data-id='<?= $row['project_id'] ?>'><i class='mdi mdi-delete'></i> Delete</button>

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
                <?php include 'modals/project_modal.php'; ?>
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
                url: 'process/project_row.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    //if data is found in database
                    if (response != null) {
                        $('.project_id').val(response.project_id);
                        $('.project_name').val(response.project_name);
                        $('#project_id').val(response.project_id);
                        $('#project_name').val(response.project_name);
                        $('#project_date').val(response.project_date);
                        $('#project_timeline').val(response.project_timeline);
                    } else { //else display nothing\
                        console.log('error, unable to fetch')
                    }
                }
            });
        }
    </script>
</body>

</html>