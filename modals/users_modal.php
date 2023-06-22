<!-- Add --> 
<div class="modal col-md-6 grid-margin fade" id="addnew" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="card modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">New User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-horizontal" method="POST" action="process/user_add.php">
        <div class="modal-body">
          <div class="form-group">
            <label for="staffno">Staff No</label>

            <div class="col-sm-12">
              <input type="text" class="form-control useridcheck" placeholder="Staff No" id="empid" name="emp_id" autofocus="" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="name">Name</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Full Name" id="emp_name" name="emp_name" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="unit">User Type</label>

            <div class="col-sm-12">
              <select class="form-control" name="user_type" id="user_type" required="">
                <option disabled="" selected value="">- Select User Type -</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="dpassword">Default Password</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Default Password" value="123456" readonly="" required="">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" title="Close" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
          <button type="submit" title="Add User" name="create" class="btn btn-gradient-primary btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-file-check btn-icon-prepend"></i> Create</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Reset Password -->
<div class="modal col-md-6 grid-margin fade" id="reset" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="card modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Reset Password</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-horizontal" method="POST" action="process/user_password_reset.php">
        <div class="modal-body">
          <div class="form-group">
            <label for="staffno">Staff No</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Staff No" id="employee_id" name="employee_id" readonly="" required>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Name</label>

            <div class="col-sm-12">
              <input type="text" class="form-control" placeholder="Full Name" id="employee_name" name="employee_name" required readonly="">
            </div>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" title="Close" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
          <button type="submit" title="Reset Password" name="reset" class="btn btn-gradient-primary btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-cached btn-icon-prepend"></i> Reset</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Delete -->
<div class="modal col-md-6 grid-margin fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="card modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-horizontal" method="POST" action="process/user_delete.php">
        <div class="modal-body">
          <div class="form-group">
            <label for="staffno">Staff No</label>

            <div>
              <input type="text" name="empid" class="form-control empid" placeholder="Staff No" required readonly="">
            </div>
          </div>
          <div class="form-group">
            <label for="staffno">Full Name</label>

            <div>
              <input type="text" name="emp_id" class="form-control user_name" placeholder="Name" required readonly="">
            </div>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" title="Close" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
          <button type="submit" title="Delete User" name="delete" class="btn btn-gradient-danger btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-delete btn-icon-prepend"></i> Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- deactivate -->
<div class="modal col-md-6 grid-margin fade" id="deactivate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="card modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Deactivate User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-horizontal" method="POST" action="process/user_delete.php">
        <div class="modal-body ">
          <div class="form-group">
            <label for="staffno">Staff No</label>

            <div>
              <input type="text" name="empid" class="form-control empid" placeholder="Staff No" required readonly="">
            </div>
          </div>
          <div class="form-group">
            <label for="staffno" >Full Name</label>

            <div>
              <input type="text" name="emp_id" class="form-control user_name" placeholder="Name" required readonly="">
            </div>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" title="Close" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
          <button type="submit" title="Deactivate User" name="deactivate" class="btn btn-gradient-warning btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-toggle-switch-off btn-icon-prepend"></i> Deactivate</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- activate -->
<div class="modal col-md-6 grid-margin fade" id="activate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="card modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Activate User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="form-horizontal" method="POST" action="process/user_delete.php">
        <div class="modal-body">
          <div class="form-group">
            <label for="staffno" class="col-sm-2 control-label">Staff No</label>

            <div >
              <input type="text" name="empid" class="form-control empid" placeholder="Staff No" required readonly="">
            </div>
          </div>
          <div class="form-group">
            <label for="staffno" class="col-sm-2 control-label">Full Name</label>

            <div>
              <input type="text" name="emp_id" class="form-control user_name" placeholder="Name" required readonly="">
            </div>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" title="Close" class="btn btn-gradient-secondary btn-rounded btn-icon-text btn-sm" data-bs-dismiss="modal"><i class="mdi mdi-close-circle btn-icon-prepend"></i> Cancel</button>
          <button type="submit" title="Activate User" name="activate" class="btn btn-gradient-warning btn-rounded btn-icon-text btn-sm"><i class="mdi mdi-toggle-switch-on btn-icon-prepend"></i> Activate</button>
        </div>
      </form>
    </div>
  </div>
</div>