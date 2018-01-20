<link rel="stylesheet" href="<?php echo base_url("resource/bbower_components/bootstrap/dist/css/bootstrap.min.css");?>"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("resource/bbower_components/font-awesome/css/font-awesome.min.css");?>"/>
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url("resource/bbower_components/Ionicons/css/ionicons.min.css");?>"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("resource/bdist/css/AdminLTE.min.css");?>"/>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("resource/bdist/css/skins/_all-skins.min.css");?>"/>


<link rel="stylesheet" type="text/css" href="<?php echo base_url("resource/bower_components/datatables.net-bs/css/dataTables.bootstrap.css");?>"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url("resource/bower_components/Ionicons/css/ionicons.min.css");?>"/>


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  
  

<link rel="stylesheet" type="text/css" href="<?php echo base_url("resource/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css");?>"/> 

<link rel="stylesheet" href="<?php echo base_url("resource/bower_components/bootstrap/dist/css/bootstrap.min.css");?>"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/font-awesome/css/font-awesome.min.css");?>"/>
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/Ionicons/css/ionicons.min.css");?>"/>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("resource/dist/css/AdminLTE.min.css");?>"/>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("resource/dist/css/skins/_all-skins.min.css");?>"/>
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/morris.js/morris.css");?>"/>
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/jvectormap/jquery-jvectormap.css");?>"/>
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css");?>"/>
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url("resource/bower_components/bootstrap-daterangepicker/daterangepicker.css");?>"/>
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url("resource/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css");?>"/>
 <link rel="<?php echo base_url("resource/bower_components/bootstrap-timepicker/css/timepicker.less");?>"/>
  
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
<!-- DataTables -->


<?php echo  form_open('Credvou_con/edit_cred');?>
<form>
                  <!-- Modal -->
                  <?php foreach ($data as $data):?>
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Edit Voucher</h4>
                        </div>
                        <div class="modal-body">
                    
                    <div class="form-horizontal">
                    <div class="control-group">
                    
                    <div class="form-group">
                
                           <label class="col-sm-2 control-label">V.Name</label>
                                  <div class="col-sm-4">
                                    <input type="text" name="voucher_name" class="form-control"  required="required" value="<?php echo $data->voucher_name ?>">
                                  </div> 
                            <label class="col-sm-2 control-label">Date</label>      
                                  <div class="col-sm-4">
                                    <input type="text" name="date" class="form-control"  required="required" value="<?php echo $data->date?>">
                                  </div> 
                                  
                    </div>
                    
                    <div class="form-group">
                
                           <label class="col-sm-2 control-label">C.Account</label>
                                  <div class="col-sm-4">
                                    <input type="text" name="credit_account" class="form-control"  required="required"  value="<?php echo $data->credit_account?>">
                                  </div> 
                            <label class="col-sm-2 control-label">SNO</label>      
                                  <div class="col-sm-4">
                                    <input type="text" name="sno" class="form-control"  required="required"  value="<?php echo $data->sno?>">
                                  </div> 
                                  
                    </div>
                    <div class="form-group">
                           <label class="col-sm-2 control-label">Code</label>      
                                  <div class="col-sm-4">
                                    <input type="text" name="code" class="form-control"  required="required"  value="<?php echo $data->code?>">
                                  </div> 
                           <label class="col-sm-2 control-label">N.of.Account</label>
                                  <div class="col-sm-4">
                                    <input type="text" name="name_of_ac" class="form-control"  required="required"  value="<?php echo $data->name_of_ac?>">
                                  </div> 
                           
                                  
                    </div>
                    <div class="form-group">
                    <label for="comment">Narration:</label>
                     <textarea class="form-control" rows="5" id="comment" name="narration"  value="<?php echo $data->narration?>"></textarea>

                    </div>
                
                    <div class="form-group">
                                  <label class="col-sm-2 control-label">Authorize By:</label>
                                  <div class="col-sm-4">
                                    <input type="text" name="authorize_by" class="form-control"  required="required" value="<?php echo $data->authorize_by?>">
                                  </div> 
                                      <label class="col-sm-2 control-label">Prepared By:</label>
                                  <div class="col-sm-4">
                                    <input type="text" name="prepared_by" class="form-control"  required="required"  value="<?php echo $data->prepared_by?>">
                                  </div> 
                               
                                  
                    </div>



                    <div class="form-group">
                           <label class="col-sm-8 control-label">Total Amount</label>      
                                  <div class="col-sm-4">
                                    <input type="text" name="total" class="form-control"  required="required" value="<?php echo $data->total?>">
                                  </div> 
                           
                                  
                    </div>
                
                    </div>
                    </div>
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">EDIT</button>
                      
                        </div>
                      </div>
                    </div>
                  </div>
  <?php endforeach;?>         
</form>
 <?php echo  form_close(); ?>
