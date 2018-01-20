<html>
<head>
<title>HOME</title>
<link rel="stylesheet" href="<?php echo base_url("resource/css/bootstrap.min.css");?>"/>
<link rel="stylesheet" href="<?php echo base_url("resource/css/bootstrap.css");?>"/>
</head>

<body>
<?php include('header.php');?>
<?php echo  form_open('Home_con/emp_add');?>
<form class="form-horizontal">
  <fieldset>
    <div class="form-group">
    <label class="col-lg-1 control-label">firt_name</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="first_name"  required>
      </div>
    </div>
    <div class="form-group">
 
      <label class="col-lg-1 control-label">Last Name:</label>
      <div class="col-lg-2">
        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
      </div>
      
      
      
      
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-9">
      
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

  

  </fieldset>
  
</form>
    <?php echo  form_close(); ?>
</body>
</html>