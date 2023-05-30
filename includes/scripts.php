<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/buttons.html5.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- <script src="assets/bower_components/raphael/raphael.min.js"></script> -->
<!-- <script src="assets/bower_components/morris.js/morris.min.js"></script> -->
<!-- ChartJS -->
<script src="assets/bower_components/chart.js/Chart.js"></script>
<!-- Sparkline -->
<script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="assets/bower_components/moment/min/moment.min.js"></script>
<script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>


<script src="assets/bower_components/datatables.net-bs/js/buttons.flash.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/jszip.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/pdfmake.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/vfs_fonts.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/buttons.print.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/buttons.colVis.min.js"></script>
<script src="assets/dist/js/printThis.js"></script>


<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>

<script type="text/javascript">
  $(window).on('load', function(){
    //you remove this timeout
    setTimeout(function(){
          $('#loader').fadeOut('slow');  
      }, 1000);
      //remove the timeout
      //$('#loader').fadeOut('slow'); 
  });
</script>

<script>
  $(document).ready(function() {
    // $('.table td, .table th').addClass('py-1 px-2 align-middle')
    $('#example1').DataTable({
      // "scrollX": true,
       // "scrollY": 300,
      // "autoWidth": false,
      "sort": true,
      "select": true,
      'stateSave': true,
      dom: 'Bfrtip',
        lengthMenu: [
          [ 10, 25, 50, 100, 200, -1 ],
          [ '10 rows', '25 rows', '50 rows','100 rows','200 rows', 'Show all' ]
      ],
      buttons: [
          'pageLength', 'colvis', 'excel', 'csv', 'pdf', 'print'
      ]
    })
    $('#example2').DataTable({
       // "scrollX": true,
       // "scrollY": 300,
      // "autoWidth": false,
      "sort": true,
      "select": true,
      'stateSave': true,
      dom: 'Bfrtip',
        lengthMenu: [
          [ 10, 25, 50, 100, 200, -1 ],
          [ '10 rows', '25 rows', '50 rows','100 rows','200 rows', 'Show all' ]
      ],
      buttons: [
          'pageLength', 'colvis','excel', 'csv', 'pdf', 'print'
      ]
    })
    $('#example3').DataTable({
       // "scrollX": true,
       // "scrollY": 300,
      // "autoWidth": true,
      "sort": true,
      "select": true,
      'stateSave': true,
      dom: 'Bfrtip',
        lengthMenu: [
          [ 10, 25, 50, 100, 200, -1 ],
          [ '10 rows', '25 rows', '50 rows','100 rows','200 rows', 'Show all' ]
      ],
      buttons: [
          'pageLength', 'colvis','excel', 'csv', 'pdf', 'print'
      ]
    })
  });
</script>
<script>
$(function(){
  /** add active class and stay opened when selected */
  var url = window.location;

  // for sidebar menu entirely but not cover treeview
  $('ul.sidebar-menu a').filter(function() {
     return this.href == url;
  }).parent().addClass('active');

  // for treeview
  $('ul.treeview-menu a').filter(function() {
     return this.href == url;
  }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
  
});
</script>

<!-- alert messages fading -->
<script type="text/javascript">
  $(function() {
    $(".alert:visible").fadeOut(20000);
  });
</script>


<!-- show/hide password -->
<script type="text/javascript">
    //toggle password
    $(".toggle-password").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });


  //new and confirm password
   $("#confirm_password").keyup(function( event ) {
    if( $('#new_password').val() != $('#confirm_password').val() ) {
      document.getElementById('passworderror').style.display='block';
      document.getElementById('Updatebtn').setAttribute("disabled", "true");
      document.getElementById('passwordsucess').style.display='none';
      event.preventDefault();

    }else if ($('#new_password').val() == "" && $('#confirm_password').val() == "") {
      document.getElementById('Updatebtn').removeAttribute("disabled");
      document.getElementById('passworderror').style.display='none';
    }
    else{
      document.getElementById('passwordsucess').style.display='block';
      document.getElementById('Updatebtn').removeAttribute("disabled");
      document.getElementById('passworderror').style.display='none';
      event.preventDefault();

    }
  });




  </script>

<script>
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

    function prePhoto1(input){
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById('previewPhoto1');
      output.src = reader.result;
     }
     reader.readAsDataURL(event.target.files[0]);
    }

    function prefile(input){
     var reader = new FileReader();
     reader.onload = function()
     {
      var output = document.getElementById('previewfile');
      output.src = reader.result;
     }
     reader.readAsDataURL(event.target.files[0]);
    }
</script>
