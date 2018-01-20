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
       <h1>ADD EMPLOYEE</h1>
        <section class="content">
              
              
      
      <!-- Profile Image -->
    <div class="box box-primary pad-profile">
     	<div class="box-header with-border">
        <h3 class="box-title">Employee <small></small></h3>
      </div>
      <?php echo form_open('Employee_con/addemp');?>
      <form>
      
     
        <div class="box-body box-profile">
          <div class="col-md-4">
            <div class="pic_size" id="image-holder"> 
                          <center> <img class="thumb-image setpropileam" src="http://localhost/ee//assets/images/user.png" alt="User profile picture"></center>
            </div>
            <br>
            <div class="fileUpload btn btn-primary wdt-bg">
                <span>Change Picture</span>
                <input id="fileUpload" class="upload" name="profile_pic" type="file" accept="image/*" /><br />
                <input type="hidden" name="fileOld" value="user.png" />
            </div>
          </div>
          <div class="col-md-8">
            <h3>Personal Information:</h3>
            <div class="form-group has-feedback clear-both">
              <label for="exampleInputEmail1">First Name:</label>
              <input type="text" name="first_name" required="required" class="form-control" placeholder="First Name">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
              <label for="exampleInputEmail1">Last Name:</label>
              <input type="text" name="last_name"  required="required" class="form-control" placeholder="Last Name">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
              <label for="exampleInputEmail1">User Name:</label>
              <input type="text" class="form-control" name="user_name" placeholder="User Name">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
                    
            <div class="form-group has-feedback">
              <label for="exampleInputEmail1">Email:</label>
              <input type="email" id="profileEmail" name="email" class="form-control">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
              <br>

          </div>
         <!-- /.box-body -->
         
         
         <!----THIS---->
         
                <div class="row  clearfix"> 
<div class="col-md-6"> 


     <h3>Other Information</h3>
      <div class="form-group has-feedback">
      <div class="row">
           <div class="col-sm-6">
              <label for="exampleInputEmail1">Gender:</label>
              <select name="gender" class="form-control" placeholder="Gender" required>
                      <option value="">Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                    </div>
            <div class="col-sm-6">
             <div class="form-group">

            <label for="exampleInputEmail1">Birthday:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="birthday" type="text" class="form-control pull-right" id="datepicker" >
                </div>
            </div>
            </div>
            </div>        
            </div>  
            
            <div class="form-group has-feedback">
              <label>Address</label>
             <div>
                  <textarea name="address" class="textarea" placeholder="Address"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>

            </div> 
            
                                  
                                
            <div class="form-group has-feedback">
              <label for="exampleInputEmail1"></label>
              
            </div>  
            <br>
            <div class="form-group has-feedback sub-btn-wdt" >
  
              <!-- <div class=" pull-right">
              </div> -->
            </div>
</div>
  <div class="col-md-6"> 


     <h3>Change Password:</h3>
     <div class="form-group has-feedback">
              <label for="exampleInputEmail1">Current Password:</label>
              <input id="pass11" class="form-control" pattern=".{6,}" type="password" placeholder="********" name="currentpassword" title="6-14 characters">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>                       
            <div class="form-group has-feedback">
              <label for="exampleInputEmail1">New Password:</label>
              <input type="password" class="form-control" placeholder="New Password" name="password">
              <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
            </div>                       
            <div class="form-group has-feedback">
              <label for="exampleInputEmail1">Confirm New Password:</label>
              <input type="password" class="form-control" placeholder="Confirm New Password" name="confirmPassword">
              <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
            </div>  
            <br>
            <div class="form-group has-feedback sub-btn-wdt" >
              <input type="hidden" name="id" value="8">
              <input type="hidden" name="user_type" value="user">
              <div class="row">
               <label class="col-sm-9 control-label"></label>
           <div class="col-sm-3">
               
        <button type="submit" class="btn btn-primary">Submit</button>
           </div>
              
      
              </div>  
              <!-- <div class=" pull-right">
              </div> -->
            </div>
</div>
</div>
         
         
         <!--THIS-->
        </div>
</form>
    <?php echo form_close(); ?>                     
      <!-- /.box -->
    </div>
    <!-- /.content -->

<!-- /.content-wrapper -->
              
                                 
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th><strong>Employee ID</strong></th>
                 <th><strong> Employe Name</strong></th>
                 <th><strong>Login Time</strong></th>
                 <th><strong>Logout Time</strong></th>
                 <th>&nbsp;Working hours</th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-info">			
                <td>&nbsp;127</td>
                <td>&nbsp;Lamadrid,Kevin Paul</td>
                <td>&nbsp;2013-03-08 09:20:03</td>
                <td>&nbsp;2013-03-08 17:20:26</td>
		<td>&nbsp;08:00:23</td>
              </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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