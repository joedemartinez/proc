<!-- Add -->
<div class="modal col-md-6 grid-margin fade" id="profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="card modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">User Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-horizontal" method="POST" action="./process/update_profile.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="col-md-6 pull-right">
            <div class="form-group">
              <div class="pull-right">
                <img class="form-control" id="photo" name="photo" style="height: 161px" src="<?php echo (!empty($user['photo'])) ? 'uploads/images/' . $user['photo'] : 'uploads/images/profile.jpg'; ?>">
                <a data-toggle="modal" class="pull-right photo edit_photo" title="Change Photo"><span class="mdi mdi-lead-pencil"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="emp_id" class="control-label">Staff No</label>
              <div>
                <input type="text" class="form-control" name="emp_id" value="<?php echo $user['emp_id']; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="fullname" class="control-label">FullName</label>
              <div>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $user['full_name'] ?>" readonly>
              </div>
            </div>
          </div>
          <hr>
          <h3>Change Password </h3>
          <hr>
          <div class="form-group">
            <label for="curr_password" class="col-sm-3 control-label">Current Password</label>

            <div class="col-sm-6">
              <input type="password" class="form-control" id="curr_password" name="curr_password" value="<?php echo $password['password']; ?>" required readonly>
            </div>
          </div>
          <div class="form-group">
            <label for="new_password" class="col-sm-3 control-label">New Password</label>

            <div class="col-sm-6">
              <input type="password" class="form-control" id="new_password" name="new_password" value="">
              <span toggle="#new_password" class="fa fa-fw fa-eye toggle-password" style="float: right;margin-right: 15px;margin-bottom: 0px;margin-top: -23px; position: relative; z-index: 2; cursor:pointer"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="confirm_password" class="col-sm-3 control-label">Confirm Password</label>

            <div class="col-sm-6">
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="">
              <span toggle="#confirm_password" class="fa fa-fw fa-eye toggle-password" style="float: right;margin-right: 15px;margin-bottom: 0px;margin-top: -23px; position: relative; z-index: 2; cursor:pointer"></span>
            </div>
          </div>
          <div id="passworderror" class='alert alert-danger alert-dismissible' style="margin-bottom: 20px;padding-bottom: 5px;padding-top: 5px; display: none;">
            New Password and Confirm Password do not match!! 
          </div>
          <div id="passwordsucess" class='alert alert-success alert-dismissible' style="margin-bottom: 20px;padding-bottom: 5px;padding-top: 5px; display: none;">
            New Password and Confirm Password match!!
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" title="Close" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
          <button type="submit" title="Update Profile" name="update" id="Updatebtn" class="btn btn-gradient-primary btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i> Update</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Update Photo -->
<div class="modal col-md-6 grid-margin fade" id="edit_photo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="card modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Photo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-horizontal" method="POST" action="./process/emp_edit_photo.php" enctype="multipart/form-data">
        <div class="modal-body flag">
          <div class="form-group">
            <label for="photo" class="col-sm-2 control-label">Photo</label>

            <div class="col-sm-4">
              <input type="file" name="photo" accept="image/*" onchange="prePhoto(this)">
            </div>
            <div class="col-sm-4">
              <img id="previewPhoto" alt="Preview Photo" width="170px" height="110px">
            </div>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" title="Close" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
          <button type="submit" title="Upload" name="upload" class="btn btn-gradient-primary btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-cloud-upload btn-icon-prepend"></i> Upload</button>
    </div>
  </div>
</div>
</div>