<!-- Add -->
<div class="modal fade" id="addnew" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Upload New File</b></h4>
          	</div>
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="./process/file_add.php">
          	<div class="modal-body flag">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="file" name="upload_file" class="form-control" accept=".docx, .pdf" onchange="prefile(this)">
                        <p class="help-block">File Type : docx, pdf...</p>
                    </div>
                    <div class="col-sm-12">
                        <embed id="previewfile" src="" width="100%" height="375" type="application/pdf">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
              <button type="submit" title="Upload File" class="btn btn-primary btn-flat" name="add"><i class="fa fa-upload"></i> Upload</button>
            <button type="button" title="Close" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
