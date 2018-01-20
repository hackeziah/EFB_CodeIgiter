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

<?php 
$this->load->view('form/sidebar');
?>
   
<div class="content-wrapper">
<section class="content-header">
       <h1>Attendance Register</h1>
        <section class="content">
        <div class="box box-primary pad-profile">
     	<div class="box-header with-border">
        <h3 class="box-title">Register <small></small></h3>
      </div>
      <div class="box-body box-profile">
      <form action="" method="post">
      <div class="row">
          <div class="col-lg-4 input_field_sections">
              <h5>Select Employee <span style="color: #cc0000">*</span></h5>
              <select required="" name="employee_id" class="form-control">
                  <option value="">Select Employee</option>
                  <?php
                      foreach ($getEmployee as $value)
                      { ?>
                  <option value="<?=$value->empID?>"><?=$value->empFirstName?></option>
                  <?php }
                  ?>
              </select>
          </div>
          
          <div class="col-lg-4 input_field_sections">
              <h5>Attendance Date <span style="color: #cc0000">*</span></h5>
              <input required type="text" class="form-control datepicker" name="attendence_date" value=""/>
          </div>
          
      </div>
      
      <div class="row">
          <div class="col-lg-4 input_field_sections">
              <h5>On Time <span style="color: #cc0000">*</span></h5>
              <div class="input-group bootstrap-timepicker timepicker">
                  <input required="" type="text" class="form-control input-small timepicker1" name="on_time">
                  <span class="input-group-addon" style="cursor: pointer;"><i class="fa fa-clock-o"></i></span>
              </div>
          </div>
          
          <div class="col-lg-4 input_field_sections">
              <h5>Off Time <span style="color: #cc0000">*</span></h5>
              <div class="input-group bootstrap-timepicker timepicker">
                  <input required="" type="text" class="form-control input-small timepicker1" name="off_time">
                  <span class="input-group-addon" style="cursor: pointer;"><i  class="fa fa-clock-o"></i></span>
              </div>
              
          </div>
      </div>
      
      <div class="row">
          <div class="col-lg-8 input_field_sections">
              <button type="submit" class="btn btn-primary">Save</button>
          </div>
      </div>
      </form>
           </div>
            </div>
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