<html>
<head>
<title>kkakakaHOME</title>
<link rel="stylesheet" href="<?php echo base_url("resource/css/bootstrap.min.css");?>"/>
<link rel="stylesheet" href="<?php echo base_url("resource/css/bootstrap.css");?>"/>
</head>

<body>
<?php include('header.php');?>
<?php echo anchor('Home_con/add','<button type="submit" class="btn btn-primary">ADD</button>');?>
    <table class="table table-striped table-hover ">
  <thead>
  <tr>
     <td>EMP no</td>
      <td>First Nmae</td>
       <td>Last Name</td>
      <td>Middle Name</td>
      <td>Phone</td>
      <td>OPERATION</td>
    </tr>
  </tr>
 
  </thead>
  <tbody>		<?php foreach($listEmp  as $data):?>
						<tr>
							
							<td><h4> <?php echo $data->first_name ?></h4></td>
							<td><h4> <?php echo $data->last_name ?></h4></td>
                  
							<td>
<?php echo anchor('Home_con/edit/'.$data->emp_no,'<button type="submit" class="btn btn-info">EDIT</button>');?>        
 <?php echo anchor('Home_con/delete/'.$data->emp_no,'<button type="submit" class="btn btn-primary">DELETE</button>');?>
                                </a> 
							</tr>
				<?php endforeach;?>
  
 
       </tbody>
</table> 
    
  </fieldset>
</form>

</body>
</html>