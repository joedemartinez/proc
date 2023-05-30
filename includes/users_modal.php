<!-- Add -->
<div class="modal fade" id="addnew" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add User</b></h4>
          	</div>
          	<div class="modal-body flag">
            	<form class="form-horizontal" method="POST" action="./process/user_add.php">
                <div class="form-group">
                    <label for="staffno" class="col-sm-2 control-label">Staff No</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control useridcheck" placeholder="Staff No" id="empid" name="emp_id" autofocus="" required="">
                    </div>
                </div>
          		  <div class="form-group">
                  	<label for="name" class="col-sm-2 control-label">Name</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" placeholder="Full Name" id="emp_name" name="emp_name"  required="">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="unit" class="col-sm-2 control-label">User Type</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="user_type" id="user_type" required="">
                        <option disabled="" selected value="">- Select User Type -</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dpassword" class="col-sm-2 control-label">Default Password</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Default Password" value="password"  readonly="" required=""> 
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
              <button type="submit" title="Add User" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Create User</button>
            <button type="button" title="Close" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


 <!-- Reset Password -->
<div class="modal fade" id="reset" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span> Reset Password</span></b></h4>
            </div>
            <form class="form-horizontal" method="POST" action="./process/user_password_reset.php">
            <div class="modal-body flag">
               <div class="form-group">
                  <label for="staffno" class="col-sm-2 control-label">Staff No</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Staff No" id="employee_id" name="employee_id" readonly="" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" placeholder="Full Name" id="employee_name" name="employee_name" required  readonly="">
                  </div>
                </div>
            </div>
            <div class="modal-footer ">
              <button type="submit" class="btn btn-success btn-flat" name="reset"><i class="fa fa-check-square-o"></i> Reset</button>
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span>Delete User</span></b></h4>
            </div>
            <div class="modal-body flag">
              <form class="form-horizontal" method="POST" action="./process/user_delete.php">
                <div class="form-group">
                  <label for="staffno" class="col-sm-2 control-label">Staff No</label>

                  <div class="col-sm-9">
                    <input type="text" name="empid" class="form-control empid" placeholder="Staff No" required readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="staffno" class="col-sm-2 control-label">Full Name</label>

                  <div class="col-sm-9">
                    <input type="text" name="emp_id" class="form-control user_name" placeholder="Name" required readonly="">
                  </div>
                </div>
            </div>
            <div class="modal-footer ">
              <button type="submit" class="btn btn-danger btn-flat" name="delete" onclick="return confirm('Do you want to delete this record?')"><i class="fa fa-trash"></i> Delete</button>
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div> 

<!-- deactivate -->
<div class="modal fade" id="deactivate" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span>Deactivate</span></b></h4>
            </div>
            <div class="modal-body flag">
              <form class="form-horizontal" method="POST" action="./process/user_delete.php">
                <div class="form-group">
                  <label for="staffno" class="col-sm-2 control-label">Staff No</label>

                  <div class="col-sm-9">
                    <input type="text" name="empid" class="form-control empid" placeholder="Staff No" required readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="staffno" class="col-sm-2 control-label">Full Name</label>

                  <div class="col-sm-9">
                    <input type="text" name="emp_id" class="form-control user_name" placeholder="Name" required readonly="">
                  </div>
                </div>
            </div>
            <div class="modal-footer ">
              <button type="submit" class="btn btn-danger btn-flat" name="deactivate" onclick="return confirm('Do you want to deactivate this record?')"><i class="fa fa-toggle-off"></i> Deactivate</button>
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div> 

<!-- activate -->
<div class="modal fade" id="activate" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span>Activate</span></b></h4>
            </div>
            <div class="modal-body flag">
              <form class="form-horizontal" method="POST" action="./process/user_delete.php">
                <div class="form-group">
                  <label for="staffno" class="col-sm-2 control-label">Staff No</label>

                  <div class="col-sm-9">
                    <input type="text" name="empid" class="form-control empid" placeholder="Staff No" required readonly="">
                  </div>
                </div>
                <div class="form-group">
                  <label for="staffno" class="col-sm-2 control-label">Full Name</label>

                  <div class="col-sm-9">
                    <input type="text" name="emp_id" class="form-control user_name" placeholder="Name" required readonly="">
                  </div>
                </div>
            </div>
            <div class="modal-footer ">
              <button type="submit" class="btn btn-warning btn-flat" name="activate" onclick="return confirm('Do you want to activate this record?')"><i class="fa fa-toggle-on"></i> Activate</button>
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div> 


     