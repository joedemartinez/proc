<!-- Add -->
<div class="modal fade " id="profile" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>User Profile</b></h4>
          	</div>
          	<div class="modal-body flag">
            	<form class="form-horizontal" method="POST" action="./process/update_profile.php" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="col-sm-3 pull-right">
                      <img class="form-control" id="photo" name="photo" style="height: 100px" src="<?php echo (!empty($user['photo']))? 'assets/images/'.$user['photo']:'assets/images/profile.jpg'; ?>">
                      <a href="#edit_photo" data-toggle="modal" class="pull-right photo" title="Change Photo"><span class="fa fa-edit"></span></a>
                    </div>
                </div>
          		  <div class="form-group">
                  	<label for="emp_id" class="col-sm-3 control-label">Staff No</label>

                  	<div class="col-sm-6">
                    	<input type="text" class="form-control" name="emp_id" value="<?php echo $user['emp_id']; ?>" readonly>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="fullname" class="col-sm-3 control-label">FullName</label>

                    <div class="col-sm-6"> 
                      <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $user['full_name'] ?>" readonly>
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
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h4><i class='icon fa fa-warning'></i> Error!</h4>
                  New Password and Confirm Password do not match!!
                </div>
                <div id="passwordsucess" class='alert alert-success alert-dismissible' style="margin-bottom: 20px;padding-bottom: 5px;padding-top: 5px; display: none;">
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                  <h4><i class='icon fa fa-warning'></i> Success!</h4>
                  New Password and Confirm Password match!!
                </div>
          	</div>
          	<div class="modal-footer">
              <button type="submit" class="btn btn-success btn-flat" name="update" id="Updatebtn"><i class="fa fa-check-square-o"></i> Update</button>
            	<button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	
            	</form>
          	</div>
        </div>
    </div>
</div>


 <!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
            </div>
            <div class="modal-body flag">
              <form class="form-horizontal" method="POST" action="./process/emp_edit_photo.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="photo" class="col-sm-2 control-label">Photo</label>

                    <div class="col-sm-4">
                      <input type="file"  name="photo" accept="image/*" required onchange="prePhoto1(this)">
                    </div>
                     <div class="col-sm-4">
                      <img id="previewPhoto1"  alt="Preview Photo" width="80px" height="80px">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div> 