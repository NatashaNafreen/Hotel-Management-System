<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register Page</title>


    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
    
<div class='home' style="height: 700px; background: rgba(0, 0, 0, .5);">
    <div class="col-lg-6 col-lg-offset-3">
    	<h1>Register Here:</h1>
        <p>Fill in Details!</p>

      <?php if(isset($_SESSION['success'])){?>
      
      <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>

      <?php
      } ?>  
      
      <?php echo validation_errors('<div class="alert alert-danger">' , '</div>'); ?>  
	    <form action="" method="POST">
	        
	    	<div class="form-group">
	    		<label for="username">Username:</label>
	    		<input class="form-control" name="username" id="username" type="text">
	    	</div>

	    	<div class="form-group">
	    		<label for="email">Email:</label>
	    		<input class="form-control" name="email" id="email" type="text">
	    	</div>

	    	<div class="form-group">
	    		<label for="password">Password:</label>
	    		<input class="form-control" name="password" id="password" type="password">
	    	</div>

	    	<div class="form-group">
	    		<label for="password">Confirm Password:</label>
	    		<input class="form-control" name="password2" id="password" type="password">
	    	</div>

	    	<div class="form-group">
	    		<label for="gender">Gender:</label>
	    		<select class="form-control" id="gender" name="gender">
	    			<option value="Male">Male</option>
	    			<option value="Female">Female</option>
	    		</select>
	    	</div>

	    	<div class="form-group">
	    		<label for="phone">Phone:</label>
	    		<input class="form-control" name="phone" id="phone" type="text">
	    	</div>

	    	<div class="text-center">
	    		<button class="btn btn-primary" name="register">Register</button>
	    	</div>
	    </form>	
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
  </body>
</html>

<style type="text/css">
label , h1 , p{
  color: yellow;  
}

body{
  background-image: url(<?php echo base_url('resource/images/4.jpg')?>);
  background-repeat: no-repeat;
  background-size: 100%;
}

</style>