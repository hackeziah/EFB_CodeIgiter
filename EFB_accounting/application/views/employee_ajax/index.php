
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
<div class="content-wrapper">     
   <section class="content-header">
       <h1>ATTENDACE</h1>
        <section class="content">
             				
                            
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
							<div class="alert alert-success" style="display: none;"></div>
	            <button id="btnAdd" class="btn btn-success">Add New</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                
		<thead>
		<tr class="bg-info">		
			<th><strong>ID</strong></th>
			<th><strong>Employee Name</strong></th>
			<th><strong>Address</strong></th>
			<th><strong>Created at</strong></th>
			<th><strong>Action</strong></th>
		</tr>
	</thead>
	<tbody id="showdata" class="bg-info">
                
             
                </tbody>
                <tfoot>
								<tr class="bg-info">		
								<th><strong>ID</strong></th>
								<th><strong>Employee Name</strong></th>
								<th><strong>Address</strong></th>
								<th><strong>Created at</strong></th>
								<th><strong>Action</strong></th>
							</tr>
                </tfoot>
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


<!-- DataTables -->
<script src="<?php echo base_url();?>resource/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>resource/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- DataTables -->


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
		//var result = '';
	/*		if(voucher_name.val()==''){
				voucher_name.parent().parent().addClass('has-error');
			}else{
				voucher_name.parent().parent().removeClass('has-error');
				result +='1';
			}
			if(date.val()==''){
				date.parent().parent().addClass('has-error');
			}else{
				date.parent().parent().removeClass('has-error');
				result +='2';
			}

      if(credit_account.val()==''){
				credit_account.parent().parent().addClass('has-error');
			}else{
				credit_account.parent().parent().removeClass('has-error');
				result +='3';
			}

      if(sno.val()==''){
				sno.parent().parent().addClass('has-error');
			}else{
				sno.parent().parent().removeClass('has-error');
				result +='4';
			}
      

      if(code.val()==''){
				code.parent().parent().addClass('has-error');
			}else{
				code.parent().parent().removeClass('has-error');
				result +='5';
			}

      if(name_of_ac.val()==''){
				name_of_ac.parent().parent().addClass('has-error');
			}else{
        name_of_ac.parent().parent().removeClass('has-error');
				result +='6';
			}


      

      if(amount.val()==''){
				aomunt.parent().parent().addClass('has-error');
			}else{
				amount.parent().parent().removeClass('has-error');
				result +='7';
			}

      if(narration.val()==''){
				narration.parent().parent().addClass('has-error');
			}else{
        narration.parent().parent().removeClass('has-error');
				result +='8';
			}

      if(total.val()==''){
			 total.parent().parent().addClass('has-error');
			}else{
        total.parent().parent().removeClass('has-error');
				result +='9';
			}

      if(authorize_by.val()==''){
        authorize_by.parent().parent().addClass('has-error');
			}else{
        authorize_by.parent().parent().removeClass('has-error');
				result +='10';
			}

      if(prepared_by.val()==''){
        prepared_by.parent().parent().addClass('has-error');
			}else{
        prepared_by.parent().parent().removeClass('has-error');
				result +='11';
			}
*/

		//if(result==''){

	$.ajax({
		type: 'ajax',
		method: 'post',
		url: url,
		data: data,
		async: false,
		dataType: 'json',
		success: function(success){
		
			$('#myModal').modal('hide');
			$('#myForm')[0].reset();
				showAllCred();
		
		},
	
	});
//}
//error: function(){
//alert('Could not add data');
//	}
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
									'<td>'+data[i].sno+'</td>'+
                 				  
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