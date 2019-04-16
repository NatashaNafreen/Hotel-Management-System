<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Page</title>


    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>
<div class='home' style="height: 700px; background: rgba(0, 0, 0, .5);">
  <h1 class='heading'>Welcome to 327 Hotel</h1>
  
  <div class="button">

    <a href="<?php echo site_url('LoginController/login');?>"><button type="button" class="btn btn-info btn-lg btn-block" style="width: 100%;">Already Have an Account?</button></a>

    <br/><br/>
<a href=""></a>
    <a href="<?php echo site_url('LoginController/register');?>"><button type="button" class="btn btn-primary btn-lg btn-block" style="width: 100%;">New In Here? Register</button></a>
  </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>resource/js/bootstrap.js"></script>
  </body>

  
</html>

<style type="text/css">
.heading{

  text-align: center;
  margin: 0 auto;
  padding-top: 200px;
  padding-right: 10px;
  color: red;
}

.button{
position: absolute;
top: 50%;
right: 41%;
margin: 0 auto;
}

body{
  background-image: url(<?php echo base_url('resource/images/7.png')?>);
  background-repeat: no-repeat;
  background-size: 100%;
}

</style>