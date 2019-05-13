<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>One Source Inquiry Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  
      <link rel="stylesheet" href="css/style.css">
      <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;


}

li {
  float: left;
}

li a {
  display: block;
  /*color: #666;*/
  color: #565656;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {

  color: #737272;
}

li a.active {
  color: #737272;
  
}
</style>
  
</head>

<body>

  <input type="text" id="uid" value="<?php echo  $_GET['uidUrl'];?>" style="display:none;"/>

    <div style="height:35px; width:100%; background-color:#4f4500;    color: white;    padding: 10px 0 0 15%;    font-size: 13px;    font-weight: bold;">
      <span><span class="fa fa-phone"></span> 021 34490202 | +92 314 7710190 | +92 321 9285028</span>
      <span style="padding-left: 15px;"><span class="fa fa-envelope"></span> info@1sourceestate.com</span>
    </div>

    <div style="    background-color: white;    width: 70%;    height: 85px;    padding: 4px 15% 0 15%;">
        <img src="img/transpareent-01.png" style="width:180px; height:auto; float:left">


        <ul style="float:right;    margin-top: 15px;font-size: 14px;    font-weight: bold;">
  <li><a href="http://www.1sourceestate.com/"><span class="fa fa-home" style="padding-right:7px;"></span>OneSource</a></li>
  <li><a href="http://www.1sourceestate.com/about/"><span class="fa fa-user" style="padding-right:7px;"></span>About</a></li>
  <li><a href="http://www.1sourceestate.com/portfolio/"><span class="fa fa-book" style="padding-right:7px;"></span>Portfolio</a></li>
  <li><a href="http://www.1sourceestate.com/services/"><span class="fa fa-tools" style="padding-right:7px;"></span>Services</a></li>
  <li><a href="http://www.1sourceestate.com/contact/"><span class="fa fa-address-book" style="padding-right:7px;"></span>Contact</a></li>
  <li><a class="active" href="http://1sourceestate.com/inquiry_demo/?uidUrl=37429861"><span class="fa fa-less-than" style="padding-right:7px;"></span>Request Property</a></li>
</ul>
    </div>


    <select class="drop" id="mainDrop" style="width:70%;font-size:14px;margin:10px 15%;">    
        <option value="purchase">Purchase/Requirement Form</option>
        <option value="sale">Sale/Available Form</option>
        <option value="required">Required for RENT Form</option>
        <option value="available">Available for RENT Form</option>
    </select>



<div id="purchaseForm" class="box"> <?php include 'purchaseForm.php'; ?></div>
<div id="saleForm" class="box"><?php include 'saleForm.php'; ?></div>
<div id="requiredForm" class="box"><?php include 'requiredRentForm.php'; ?></div>
<div id="availableForm" class="box"><?php include 'availableRentForm.php'; ?></div>

  



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

    <script  src="js/own.js"></script>
    <script  src="js/index.js"></script>
    
    <script>
    window.onload = onLoadFunction();
    </script>



</body>

</html>
