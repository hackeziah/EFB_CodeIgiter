
<link rel="stylesheet" type="text/css" href="<?php echo base_url("resource/bower_components/datatables.net-bs/css/dataTables.bootstrap.css");?>"/>

<link rel="stylesheet" href="<?php echo base_url("resource/css/bootstrap.min.css");?>"/> 

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
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">  
  

<link rel="stylesheet" type="text/css" href="<?php echo base_url("resource/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css");?>"/> 
<?php
$this->load->view('form/sidebar');

?>
<div class="content-wrapper">     
   <section class="content-header">
       <h1>View Shift Attendance</h1>
        <section class="content">
             				
                            
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
           
       <div>
       <div>
       <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr role="row">
                       <th style="display: none;">id</th>
                       <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Employee Name</th>
                       <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Date</th>
                       <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Time In</th>
                       <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Time Out</th>
                       <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Created Date</th>
                   </tr>
               </thead>
               <tbody>
                   <?php
                   if(!empty($getShiftAttendance))
                   {
                       foreach ($getShiftAttendance as $value)
                       { ?>
                           <tr>
                               <td style="display: none;"><?=$value->aloID?></td>
                               <td><?=$value->empFirstName?></td>
                               <td><?=$value->aloDay?></td>
                               <td><?=$value->aloTimeIn?></td>
                               <td><?=$value->aloTimeOut?></td>
                               <td><?=$value->created_date?></td>
                           </tr>   
                   <?php   }
                   }
                   ?>
               </tbody>
           </table>
       </div>
   </div>
   <!-- END EXAMPLE TABLE PORTLET-->



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


<!-- DataTables -->
<script src="<?php echo base_url();?>resource/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>resource/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- DataTables -->

<script type="text/javascript" src="<?=base_url()?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/custom.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/select2/js/select2.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/datatables/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/datatables/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/datatables/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/datatables/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/datatables/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>resource/datatables/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/pages/users.js"></script>  


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
