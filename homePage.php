<div class='home' style="height: 700px; background: rgba(0, 0, 0, .5);">
  <h1 class='heading'>Welcome to 327 Hotel</h1>
  
  <div class="button">

    <a href="<?php echo site_url('GetDataController/allRooms');?>"><button type="button" class="btn btn-primary btn-lg btn-block" style="width: 100%;">Search Room</button></a>

    <br/><br/>
<a href=""></a>
    <a href="<?php echo site_url('MainController/getIn');?>"><button type="button" class="btn btn-primary btn-lg btn-block" style="width: 100%;">Get You In</button></a>
  </div>
</div>

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
right: 45%;
margin: 0 auto;
}

body{
  background-image: url(<?php echo base_url('resource/images/3.jpg')?>);
  background-repeat: no-repeat;
  background-size: 100%;
}

</style>