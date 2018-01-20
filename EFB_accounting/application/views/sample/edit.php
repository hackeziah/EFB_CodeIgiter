
<link rel="stylesheet" href="<?php echo base_url("resource/css/bootstrap.css");?>"/>
</head>

<body>
<?php include('header.php');?>
<?php echo  form_open('Home_con/emp_edit');?>
<form class="form-horizontal">
  <fieldset>
    <div class="form-group">
    <label class="col-lg-1 control-label">Employee No:</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="emp_no" value="<?php echo $data->emp_no ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-1 control-label">First Name:</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="first_name" value="<?php echo $data->first_name?>">
      </div>
      
      <label class="col-lg-1 control-label">Last Name:</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="last_name" value="<?php  echo $data->last_name?>">
      </div>
       <label  class="col-lg-1 control-label">Middle Name:</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="middle_name" value="<?php echo $data->middle_name?>" >
      </div>
      
       <label  class="col-lg-1 control-label">Phone No:</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="phone"value="<?php echo $data->phone ?>" >
      </div>
      
    </div>
   

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-9">
      
        <button type="submit" class="btn btn-primary">EDIT</button>
      </div>
    </div>

  

  </fieldset>
  
</form>
    <?php echo  form_close(); ?>
</body>
</html>