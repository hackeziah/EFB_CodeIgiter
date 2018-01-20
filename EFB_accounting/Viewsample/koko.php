	

		$('#btnSave').click(function(){
			//var id = $(this).attr('data');
			//$('#deleteModal').modal('show');
			//$('#myForm').attr('action', );
			//prevent previous handler - unbind()

			$('#btnDelete').unbind().click(function(){

				$.ajax({
					type: 'ajax',
					method: 'post',
					async: false,
					url: '<?php echo base_url()?>Credvou_con/updateCredvou',
					data:{voucher_name:voucher_name},
					dataType: 'json',
					success: function(response){
						if(response.success){
						var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
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
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Update successfully').fadeIn().delay(4000).fadeOut('slow');
								showAllCred();
		
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Error Update');
					}
				});
			});
		});
