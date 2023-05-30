<!-- Add -->
<div class="modal fade" id="addnew" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add New</b></h4>
          	</div>
          	<div class="modal-body flag">
            	<form class="form-horizontal" method="POST" action="./process/data_add.php">
                <input type="hidden" name="t_name" id="t_name">
                <div class="form-group">
                    <label for="date" class="col-sm-2 control-label">Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" placeholder="Date" id="date" name="date" autofocus="" required="">
                    </div>
                </div>
          		  <div class="form-group">
                  	<label for="pv_no" class="col-sm-2 control-label">PV No</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" placeholder="PV No" id="pv_no" name="pv_no"  required="">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="audit_no" class="col-sm-2 control-label">Audit No</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Audit No" id="audit_no" name="audit_no"  required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="payee" class="col-sm-2 control-label">Payee</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Payee" id="payee" name="payee"  required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="particulars" class="col-sm-2 control-label">Details of Particulars</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" placeholder="Details of Particulars" id="particulars" name="particulars"  required="" style="resize:none;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-2 control-label">Amount</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" placeholder="Amount" id="amount" name="amount"  required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="status" id="status" required="">
                        <option disabled selected value="">- Select Status -</option>
                        <option value="passed">Passed</option>
                        <option value="pending">Pending</option>
                        <option value="queried">Queried</option>
                      </select>
                    </div>
                </div>
                <div class="form-group" id="who_queried"style="display:none">
                    <label for="who_queried" class="col-sm-2 control-label">Who Queried?</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Who Queried?"  name="who_queried" id="id_who_queried">
                    </div>
                </div>
                <div class="form-group"  id="what_queried" style="display:none">
                    <label for="what_queried" class="col-sm-2 control-label">What was Queried?</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" placeholder="What was Queried?" name="what_queried" id="id_what_queried" style="resize:none;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="signature" class="col-sm-2 control-label">Signature</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Signature" id="signature" name="signature"  required="">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
              <button type="submit" title="Save" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save </button>
            <button type="button" title="Close" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	</form>
          	</div>
        </div>
    </div>
</div>



<!-- Edit -->
<div class="modal fade" id="edit" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span>Edit Details</span></b></h4>
            </div>
            <div class="modal-body flag">
              <form class="form-horizontal" method="POST" action="./process/data_update.php">
                <input type="hidden" name="t_name" id="e_t_name">
                <input type="hidden" name="e_id" id="e_id">
                <div class="form-group">
                    <label for="date" class="col-sm-2 control-label">Date</label>

                    <div class="col-sm-9">
                      <input type="date" class="form-control" placeholder="Date" id="e_date" name="date" autofocus="" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pv_no" class="col-sm-2 control-label">PV No</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="PV No" id="e_pv_no" name="pv_no"  required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="audit_no" class="col-sm-2 control-label">Audit No</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Audit No" id="e_audit_no" name="audit_no"  required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="payee" class="col-sm-2 control-label">Payee</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Payee" id="e_payee" name="payee"  required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="particulars" class="col-sm-2 control-label">Details of Particulars</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" placeholder="Details of Particulars" id="e_particulars" name="particulars"  required="" style="resize:none;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="amount" class="col-sm-2 control-label">Amount</label>

                    <div class="col-sm-9">
                      <input type="number" class="form-control" placeholder="Amount" id="e_amount" name="amount"  required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="col-sm-2 control-label">Status</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="status" id="e_status" required="">
                        <option disabled selected value="">- Select Status -</option>
                        <option value="passed">Passed</option>
                        <option value="pending">Pending</option>
                        <option value="queried">Queried</option>
                      </select>
                    </div>
                </div>
                <div class="form-group" id="h_who_queried"style="display:none">
                    <label for="who_queried" class="col-sm-2 control-label">Who Queried?</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Who Queried?" id="e_who_queried"  name="who_queried">
                    </div>
                </div>
                <div class="form-group"  id="h_what_queried" style="display:none">
                    <label for="what_queried" class="col-sm-2 control-label">What was Queried?</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" placeholder="What was Queried?" name="what_queried" id="e_what_queried" style="resize:none;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="signature" class="col-sm-2 control-label">Signature</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" placeholder="Signature" id="e_signature" name="signature"  required="">
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
              <button type="submit" class="btn btn-success btn-flat" name="update" onclick="return confirm('Do you want to update this record?')"><i class="fa fa-edit"></i> Update</button>
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              </form>
            </div>
        </div>
    </div>
</div> 


     