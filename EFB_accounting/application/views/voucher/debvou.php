 
<script src="<?php echo base_url();?>resource/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
 
<script src="<?php echo base_url();?>resource/plugins/input-mask/jquery.inputmask.js"></script>
 
<script src="<?php echo base_url();?>resource/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
 
<script src="<?php echo base_url();?>resource/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
 
<script src="<?php echo base_url();?>resource/bower_components/moment/min/moment.min.js"></script>
 
<script src="<?php echo base_url();?>resource/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
 
<script src="<?php echo base_url();?>resource/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
 
<script src="<?php echo base_url();?>resource/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
 
<script src="<?php echo base_url();?>resource/plugins/timepicker/bootstrap-timepicker.min.js"></script>

      <div class="content-wrapper">
       
      <section class="content-header">
      <h1>
       VOUCHER TASKS
     
      </h1>
        <section class="content">
        <?php echo form_open('Debvou_con/adddeb');?>
            <div class="form-horizontal">
  
            <div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">Debit Voucher</h2>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Voucher Number</label>
                  <div class="col-sm-4">
                   		<input type="text" class="form-control" name="voucher_name" id="Voucher Number">
                  </div>
                  
    				    <label class="col-sm-2 control-label">Date</label>
                 <div class="col-sm-4">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                   
                    <input type="text" name="date"class="form-control pull-right" id="datepicker">
                    </div>
                  </div>
                             
                    
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Debit Account</label>
                    <div class="col-sm-4">
                      <input type="text" name="debit_account" class="form-control" required="required">
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
                     <label>Debit Account</label>
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
                 <th>&nbsp;Navarration</th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-info">			
                <td>&nbsp;<input type="text" name="sno" class="form-control" required="required"></td>
                <td>&nbsp;<input type="text" name="code" class="form-control" required="required"></td>
                <td>&nbsp;<input type="text" name="name_of_ac" class="form-control" required="required"></td>
                <td>&nbsp;<input type="text" name="amount" class="form-control" required="required"></td>
		            <td>&nbsp;<input type="text" name="narration" class="form-control" required="required"></td>
          
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
                    <input type="text" name="authorize_by" class="form-control"  required="required">
                  </div> 
                      <label class="col-sm-2 control-label">Prepared By:</label>
                  <div class="col-sm-4">
                    <input type="text" name="prepared_by" class="form-control"  required="required">
                  </div> 
               
                  </div>
         <div class="form-group">
                  <label class="col-sm-8 control-label"></label>
                  <div class="col-sm-4">
               <input type="submit" name="compute" class="btn btn-primary btn-lg" value="Compute">
                  
               <input type="submit" name="save" class="btn btn-primary btn-lg" value="Save">
                 
                 <input type="submit" name="clear" class="btn btn-danger btn-lg" value="Clear">
                  </div>
            </div>
                 </div>
               
           </div>
            <?php echo form_close(); ?>  
        </section>
     </section>
</div>

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