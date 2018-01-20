


  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" type="text/css" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.css">

<link rel="stylesheet" type="text/css" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">  

  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

<?php include_once "../form/sidebar.php" ?>
 <div class="content-wrapper">
       
           <section class="content-header">
      <h1>
       VOUCHER TASKS
     
      </h1>
        <section class="content">
        
            <form class="form-horizontal" action="" name="form" method="post">
            <div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">Credit Voucher</h2>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Voucher Number</label>
                  <div class="col-sm-4">
                   		<input type="text" class="form-control" name="vouchername" id="Voucher Number">
                  </div>
                  
  				 <label class="col-sm-2 control-label">Date</label>
               <div class="col-sm-4">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                 
                  <input type="text" class="form-control pull-right" id="datepicker">
                  </div>
                </div>
                           
                  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Credit Account</label>
                  <div class="col-sm-4">
                    <input type="text" name="creditaccount" class="form-control" required="required">
                  </div>
                  <label class="col-sm-6 control-label"></label>
                </div>
               
   
              
             


</div>
</div>

          <div class="box box-info">
            <div class="box-header with-border">
               
               <div class="form-group">  
                     <label class="col-sm-5 control-label"></label>
                  <div class="col-sm-2">
                  <h4>
                     <label>Credit Account</label>
                  </h4>
                  </div>
                  <label class="col-sm-5 control-label"></label>
                </div>
           <div class="form-group">  
               <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th><strong>S.No</strong></th>
                 <th><strong>Code</strong></th>
                 <th><strong>Name of Account</strong></th>
                 <th><strong>Amount</strong></th>
                 <th>&nbsp;Navagation</th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-info">			
                <td>&nbsp;<input type="text" name="sno" class="form-control" required="required"></td>
                <td>&nbsp;<input type="text" name="sno" class="form-control" required="required"></td>
                <td>&nbsp;<input type="text" name="sno" class="form-control" required="required"></td>
                <td>&nbsp;<input type="text" name="sno" class="form-control" required="required"></td>
		<td>&nbsp;<input type="text" name="sno" class="form-control" required="required"></td>
          
                </tbody>
              </table>
            
             
            
              </div>
                  
                </div>
                  <div class="form-group">
                  <label class="col-sm-8 control-label">Total Amount</label>
                  <div class="col-sm-4">
                    <input type="text" name="total" class="form-control"  required="required">
                  </div> 
           </div>
           </div>
           </div>
               <div class="box box-primary">
            <div class="box-header with-border">
            
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Authorize By:</label>
                  <div class="col-sm-4">
                    <input type="text" name="authorizeby" class="form-control"  required="required">
                  </div> 
                      <label class="col-sm-2 control-label">Prepared By:</label>
                  <div class="col-sm-4">
                    <input type="text" name="preparedby" class="form-control"  required="required">
                  </div> 
               
                  </div>
                      <div class="form-group">
                  <label class="col-sm-8 control-label"></label>
                  <div class="col-sm-2">
                  <input type="submit" name="submit" class="btn btn-block btn-primary" value="Submit">
                  </div>
                  <div class="col-sm-2">
                  <input type="reset" name="clear" class="btn btn-block btn-danger" value="Clear">
                  </div>
            </div>
                 </div>
           
            </form>
        </section>
     </section>
</div>

<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- DataTables -->
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App --><script type="text/javascript" src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>



<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>