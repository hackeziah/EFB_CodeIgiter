


        <div class="content-wrapper">
       
           <section class="content-header">
      <h1>
       VOUCHER TASKS
     
      </h1>
        <section class="content">
        <?php echo form_open('Transvou_con/add');?>
            <div class="form-horizontal" >
       
            <div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">Credit Voucher</h2>


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
                 
                  <input type="text" name="date" class="form-control"  required="required">
                  </div>
                  
                </div>
                
                </div>               
    <div class="form-group">
                  <label class="col-sm-2 control-label">Credit Account:</label>
                  <div class="col-sm-4">
                    <input type="text" name="credit_account" class="form-control"  required="required">
                  </div> 
                      <label class="col-sm-2 control-label">Dedit Account:</label>
                  <div class="col-sm-4">
                    <input type="text" name="debit_account" class="form-control"  required="required">
                  </div> 
     			</div>
                
                
                
                <div class="form-group">
                  <label class="col-sm-2 control-label">Amount in Rs:</label>
                  <div class="col-sm-4">
                    <input type="text" name="amount" class="form-control"  required="required">
                  </div> 
                      <label class="col-sm-2 control-label">Narration:</label>
                  <div class="col-sm-4">
                    <input type="text" name="narration" class="form-control"  required="required">
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
                  <div class="col-sm-2">
                  <input type="submit" name="submit" class="btn btn-block btn-primary btn-lg" value="Submit">
                  </div>
                  <div class="col-sm-2">
                  <input type="reset" name="clear" class="btn btn-block btn-danger btn-lg" value="Clear">
                  </div>
            </div>
            </div>
            </div>
            
            <?php echo form_close(); ?>  
        </section>
     </section>
</div>
 









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