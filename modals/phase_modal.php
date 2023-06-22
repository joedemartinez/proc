<!-- add new modal -->
<div class="modal col-md-6 grid-margin fade" id="addnew" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="card modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="POST" action="process/project_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="phase_name">Project Name</label>
                        <input type="text" class="form-control" name="cat_id" value="<?= $_GET['id'] ?>" required style="display: none;">
                        <input type="text" class="form-control" name="page" value="<?= $_GET['page'] ?>" required style="display: none;">
                        <input type="text" class="form-control" name="phase_name" placeholder="phase Name" autocomplete="" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="phase_date">Date</label>
                        <input type="date" class="form-control" name="phase_date" placeholder="Date" autocomplete="" required>
                    </div>
                    <div class="form-group">
                        <label for="phase_timeline">Timeline</label>
                        <input type="text" class="form-control" name="phase_timeline" placeholder="Timeline" autocomplete="" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
                        <button type="submit" title="Create" name="create" class="btn btn-gradient-primary btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i> Create</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<!--edit modal -->
<div class="modal col-md-6 grid-margin fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="card modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Phase</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="POST" action="process/phase_update.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="project_name">Phase Name</label>
                        <input type="text" class="form-control" name="phase_id" id="phase_id" placeholder="Project ID" style="display: none;">
                        <input type="text" class="form-control" name="project_id" value="<?= $_GET['id'] ?>" required style="display: none;">
                        <input type="text" class="form-control" name="page" value="<?= $_GET['page'] ?>" required style="display: none;">
                        <input type="text" class="form-control" name="project_name" value="<?= $_GET['t'] ?>" required style="display: none;">
                        <input type="text" class="form-control" name="phase_name" id="phase_name" placeholder="Phase Name" autocomplete="" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="phase_date">Date</label>
                        <input type="date" class="form-control" name="phase_date" id="phase_date" placeholder="Date" autocomplete="" required>
                    </div>
                    <div class="form-group">
                        <label for="phase_timeline">Timeline</label>
                        <input type="text" class="form-control" name="phase_timeline" id="phase_timeline" placeholder="Timeline" autocomplete="" required>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="scan_doc">Scan Document pdf.</label>
                            <input type="file" name="phase_pdf" id="phase_pdf" class="form-control" accept=".pdf" onchange="prefile(this)">
                        </div>
                        <div class="col-sm-12">
                            <embed id="previewfile" src="" width="100%" height="275" type="application/pdf">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
                        <button type="submit" title="Update" name="update" class="btn btn-gradient-primary btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i> Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<!--delete modal -->
<div class="modal col-md-6 grid-margin fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="card modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete phase</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="POST" action="process/phase_delete.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="project_name">Project Name</label>
                        <input type="text" class="form-control" name="phase_id" id="phase_id" placeholder="Project ID" style="display: none;">
                        <input type="text" class="form-control" name="project_id" value="<?= $_GET['id'] ?>" required style="display: none;">
                        <input type="text" class="form-control" name="page" value="<?= $_GET['page'] ?>" required style="display: none;">
                        <input type="text" class="form-control" name="project_name" value="<?= $_GET['t'] ?>" required style="display: none;">
                        <input type="text" class="form-control" name="phase_name" id="phase_name" placeholder="Phase Name" autocomplete="" autofocus required>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
                        <button type="submit" title="Delete" name="delete" class="btn btn-gradient-danger btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-delete btn-icon-prepend"></i> Delete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!--put back modal -->
<div class="modal col-md-6 grid-margin fade" id="putback" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="card modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Restore Project</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="forms-sample" method="POST" action="process/project_delete.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="project_name">Project Name</label>
                        <input type="text" class="form-control project_id" name="project_id" placeholder="Project ID" style="display: none;">
                        <input type="text" class="form-control" name="cat_id" value="<?= $_GET['id'] ?>" required style="display: none;">
                        <input type="text" class="form-control" name="page" value="<?= $_GET['page'] ?>" required style="display: none;">
                        <input type="text" class="form-control project_name" name="project_name" placeholder="Project Name" required readonly>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
                        <button type="submit" title="Put Back" name="putback" class="btn btn-gradient-dark btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-replay"></i> Put back</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
