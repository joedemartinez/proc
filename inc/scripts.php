<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->

<!-- End custom js for this page -->

<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>


<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/buttons.html5.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/buttons.flash.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/jszip.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/pdfmake.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/vfs_fonts.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/buttons.print.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/buttons.colVis.min.js"></script>
<script src="assets/js/printThis.js"></script>

<script>
  $(document).ready(function() {
    // $('.table td, .table th').addClass('py-1 px-2 align-middle')
    $('#example1').DataTable({
      "sort": true,
      "select": true,
      'stateSave': true,
      buttons: [
        'pageLength', 'colvis', 'excel', 'csv', 'pdf',
	          {
	            extend: 'print',
	            // title: 'nono nonono',
	            exportOptions: {
	                columns: ':visible',
	                stripHtml: false,
	            },
	            // text: '<i class="fa fa-print"></i> Print',
	            customize: function (win) {
	                $(win.document.body)
	                    .css('font-size', '10pt')
	                    .prepend(
	                        '<img src="" style="position:absolute; top:0; left:0;" />'
	                    );

	                $(win.document.body).find('table')
	                    .addClass('compact')
	                    .css('font-size', 'inherit');
	            }
	        }
      ],
      dom: 'Bfrtip',
      lengthMenu: [
        [10, 25, 50, 100, 200, -1],
        ['10 rows', '25 rows', '50 rows', '100 rows', '200 rows', 'Show all']
      ]

    })
  });
</script>
<!-- loader -->
<script type="text/javascript">
  $(window).on('load', function() {
    //you remove this timeout
    setTimeout(function() {
      $('#loader').fadeOut('slow');
    }, 1000);
  });
</script>
<!-- daterange -->
<script type="text/javascript">
  $(function() {
    $('input[name="project_timeline"], input[name="phase_timeline"]').daterangepicker({
      // "autoUpdateInput": false
    });
  });

  //view file
  function prefile(input) {
    var reader = new FileReader();
    reader.onload = function() {
      var output = document.getElementById('previewfile');
      output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
  }

  //preview photo before upload
  function prePhoto(input){
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById('previewPhoto');
      output.src = reader.result;
     }
     reader.readAsDataURL(event.target.files[0]);
    }
</script>

<!-- alert messages fading -->
<script type="text/javascript">
  $(function() {
    $(".alert:visible").fadeOut(5000);
  });


  //new and confirm password
  $("#confirm_password").keyup(function(event) {
    if ($('#new_password').val() != $('#confirm_password').val()) {
      document.getElementById('passworderror').style.display = 'block';
      document.getElementById('Updatebtn').setAttribute("disabled", "true");
      document.getElementById('passwordsucess').style.display = 'none';
      event.preventDefault();

    } else if ($('#new_password').val() == "" && $('#confirm_password').val() == "") {
      document.getElementById('Updatebtn').removeAttribute("disabled");
      document.getElementById('passworderror').style.display = 'none';
    } else {
      document.getElementById('passwordsucess').style.display = 'block';
      document.getElementById('Updatebtn').removeAttribute("disabled");
      document.getElementById('passworderror').style.display = 'none';
      event.preventDefault();
    }
  });


//profile
  $(document).on("click", ".openModal", function(e) {
    e.preventDefault();
    $('#profile').modal('show');
  });
//edit photo
  $(document).on("click", ".edit_photo", function(e) {
    e.preventDefault();
    $('#edit_photo').modal('show');
  });
</script>