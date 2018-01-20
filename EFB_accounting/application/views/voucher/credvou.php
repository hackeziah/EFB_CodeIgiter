
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


      <div class="content-wrapper">
       
       <section class="content-header">
      <h1>
       VOUCHER TASKS
     
      </h1>
        <section class="content">
        <?php echo form_open('Credvou_con/addcred');?>
    
            <div class="form-horizontal">
           
            <div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">Credit Voucher</h2>


                <div class="form-group">
                  <label class="col-sm-2 control-label">Voucher Name</label>
                  <div class="col-sm-4">
                   		<input type="text" class="form-control" name="voucher_names" id="Voucher Number">
                  </div>
                  
  				 <label class="col-sm-2 control-label">Date</label>
               <div class="col-sm-4">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                 
                  <input type="text" name="dates" class="form-control pull-right" id="datepicker">
                  </div>
                </div>
                           
                  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Credit Account</label>
                  <div class="col-sm-4">
                    <input type="text" name="credit_accounts" class="form-control" required="required">
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
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                 <th><strong>S.No</strong></th>
                 <th><strong>Code</strong></th>
                 <th><strong>Name of Account</strong></th>
                 <th><strong>Amount</strong></th>
                 <th><strong>Narration</strong></th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-info">			
                <td>&nbsp;<input type="text" name="snos" class="form-control" required="required"></td>
                <td>&nbsp;<input type="text" name="codes" class="form-control" required="required"></td>
                <td>&nbsp;<input type="text" name="name_of_acs" class="form-control" required="required"></td>
                <td>&nbsp;<input type="text" name="amounts" class="form-control" required="required"></td>
	             	<td>&nbsp;<input type="text" name="narrations" class="form-control" required="required"></td>
          
                </tbody>
              </table>
            
             
            
              </div>
                  
                </div>
                  <div class="form-group">
                  <label class="col-sm-8 control-label">Total Amount</label>
                  <div class="col-sm-4">
                    <input type="text" name="totals" class="form-control"  required="required">
                  </div> 
           </div>
           </div>
           </div>
               <div class="box box-primary">
            <div class="box-header with-border">
            
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Authorize By:</label>
                  <div class="col-sm-4">
                    <input type="text" name="authorize_bys" class="form-control"  required="required">
                  </div> 
                      <label class="col-sm-2 control-label">Prepared By:</label>
                  <div class="col-sm-4">
                    <input type="text" name="prepared_bys" class="form-control"  required="required">
                  </div> 
               
                  </div>
                           <div class="form-group">
                  <label class="col-sm-8 control-label"></label>
                  <div class="col-sm-4">
            <!-- <input type="submit" name="compute" class="btn btn-primary btn-lg" value="Compute">
              <input type="submit" name="clear" class="btn btn-danger btn-lg" value="Clear">
              -->
               <input type="submit" name="save" class="btn btn-primary btn-lg" value="Save">
                 
                
                  </div>
</div>
  </div>
  </div>        


  <div class="box box-info">
<div class="box-header with-border">
                            
        
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table  id="example1"class="table table-bordered table-striped">
                <thead>
                <tr>
                <th><strong>Voucher Number</strong></th>
                <th><strong>Date</strong></th>
                <th><strong>Credit Account</strong></th>
                <th><strong>Name of Account</strong></th>
                <th><strong>Total</strong></th>
                <th><strong>Authorize By</strong></th>
                <th><strong>Prepared By</strong></th>
                <th><strong>Action</strong></th>
               </tr>
                </thead>
           
                <tbody id="showdata">
             
             
                </tbody>
                <tfoot>
                <tr>
                <th><strong>Voucher Number</strong></th>
                <th><strong>Date</strong></th>
                <th><strong>Credit Account</strong></th>
                <th><strong>Name of Account</strong></th>
                <th><strong>Total</strong></th>
                <th><strong>Authorize By</strong></th>
                <th><strong>Prepared By</strong></th>
                <th><strong>Action</strong></th>
               </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
       
        <!-- /.col -->
      </div>
      <?php echo form_close(); ?>    
    



</div>
</div>
</div>



        </section>
     </section>
</div>
 

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Edit Credit</h4>
		</div>
		<div class="modal-body">
				<form id="myForm" action="" method="post" class="form-horizontal">
				
					<div class="form-group">
						<label for="name" class="label-control col-md-4">Voucher Name</label>
						<div class="col-md-8">
							<input type="text" name="voucher_name" class="form-control" >
						</div>
					</div>
				

 

					<div class="form-group">
						<label for="date" class="label-control col-md-4">Date</label>
						<div class="col-md-8">
						<input type="text" name="date" class="form-control" >
						</div>
					</div>
					<div class="form-group">
						<label for="date" class="label-control col-md-4">Credit Account</label>
						<div class="col-md-8">
						<input type="text" name="credit_account" class="form-control" >
						</div>
					</div>
					<div class="form-group">
						<label for="date" class="label-control col-md-4">SNO</label>
						<div class="col-md-8">
						<input type="text" name="sno" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="date" class="label-control col-md-4">Code</label>
						<div class="col-md-8">
						<input type="text" name="code" class="form-control" >
						</div>
					</div>



					<div class="form-group">
						<label for="date" class="label-control col-md-4">Name of Account</label>
						<div class="col-md-8">
						<input type="text" name="name_of_ac" class="form-control" >
						</div>
					</div>
					<div class="form-group">
						<label for="date" class="label-control col-md-4">Amount</label>
						<div class="col-md-8">
						<input type="text" name="amount" class="form-control" >
						</div>
					</div>
					<div class="form-group">
						<label for="date" class="label-control col-md-4">narration</label>
						<div class="col-md-8">
						<input type="text" name="narration" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label for="date" class="label-control col-md-4">Total</label>
						<div class="col-md-8">
						<input type="text" name="total" class="form-control" >
						</div>
					</div>

					
					<div class="form-group">
						<label for="date" class="label-control col-md-4">Authorize By</label>
						<div class="col-md-8">
						<input type="text" name="authorize_by" class="form-control" >
						</div>
					</div>
					<div class="form-group">
						<label for="date" class="label-control col-md-4">Prepared By</label>
						<div class="col-md-8">
						<input type="text" name="prepared_by" class="form-control" >
						</div>
					</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" id="btnSave" class="btn btn-primary" data-dismiss="modal">Save changes</button>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
        	Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  
  
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



<script>
	$(function(){

		showAllCred();

		$('#btnSave').click(function(){
			var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
			showAllCred();
			
			var voucher_name =  $('input[name=voucher_name]');
			var date =  $('input[name=date]');
			var credit_account =  $('input[name=credit_account]');
			var sno =   $('input[name=sno]');
			var code = $('input[name=code]');
			var name_of_ac = $('input[name=name_of_ac]');
			var amount =  $('input[name=amount]');
			var narration =  $('input[name=narration]');
			var total =   $('input[name=total]');
			var authorize_by =  $('input[name=authorize_by]');
			var prepared_by =  $('input[name=prepared_by]');
	
	$.ajax({
		type: 'ajax',
		method: 'post',
		url: url,
		data: data,
		async: false,
		dataType: 'json',
		success: function(success){
      $('.alert-success').html('Update successfully').fadeIn().delay(4000).fadeOut('slow');
		
		
			$('#myModal').modal('hide');
			$('#myForm')[0].reset();
      $('.alert-success').html('Update successfully').fadeIn().delay(4000).fadeOut('slow');

				showAllCred();
        refresh();
       
		},
	
	});

$('.alert-success').html('Update successfully').fadeIn().delay(4000).fadeOut('slow');
		
showAllCred();
		});


		//edit
$('#showdata').on('click', '.item-edit', function(){
			var voucher_name = $(this).attr('data');  
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Edit CREDIT VOUCHER');
			$('#myForm').attr('action', '<?php echo base_url()?>Credvou_con/updateCredvou');

			$.ajax({
				type: 'ajax',
				method: 'get',
				url: '<?php echo base_url() ?>Credvou_con/editCredvou',
				data: {voucher_name: voucher_name},
				async: false,
				dataType: 'json',
				success: function(data){
					
										$('input[name=voucher_name]').val(data.voucher_name);
										$('input[name=date]').val(data.date);
										$('input[name=credit_account]').val(data.credit_account);
										$('input[name=sno]').val(data.sno);
										$('input[name=code]').val(data.code);
										$('input[name=name_of_ac]').val(data.name_of_ac);
										$('input[name=amount]').val(data.amount);
										$('input[name=narration]').val(data.narration);
										$('input[name=total]').val(data.total);
										$('input[name=authorize_by]').val(data.authorize_by);
										$('input[name=prepared_by]').val(data.prepared_by);
									},
				error: function(){
					alert('Could not Edit Data');
				}
			});
		});

		$('#showdata').on('click', '.item-delete', function(){
			var voucher_name= $(this).attr('data');
			$('#deleteModal').modal('show');
			//prevent previous handler - unbind()
			$('#btnDelete').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'get',
					async: false,
					url: '<?php echo base_url() ?>Credvou_con/deleteCredvou',
					data:{voucher_name:voucher_name},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Employee Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllCred();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Error deleting');
					}
				});
			});
		});

		//function
		function showAllCred(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>Credvou_con/showAllCred',
				async: false,
				dataType: 'json',
				success: function(data){
					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html +='<tr>'+
									'<td>'+data[i].voucher_name+'</td>'+
									'<td>'+data[i].date+'</td>'+
                  '<td>'+data[i].credit_account+'</td>'+
                  '<td>'+data[i].name_of_ac+'</td>'+
                  '<td>'+data[i].total+'</td>'+	 
                  '<td>'+data[i].authorize_by+'</td>'+	  
                  '<td>'+data[i].prepared_by+'</td>'+	  
									'<td>'+
										'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].voucher_name+'">Edit</a>'+
										'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].voucher_name+'">Delete</a>'+
									'</td>'+
							    '</tr>';
					}
					$('#showdata').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
		}



	});
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