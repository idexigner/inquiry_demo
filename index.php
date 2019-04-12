<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>One Source Inquiry Form</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <input type="text" id="uid" value="<?php echo  $_GET['uid'];?>" style="display:none;"/>

    <div>
        <img src="img/transpareent-01.png" style="width:240px; height:auto;margin:0 0 0 43%;">

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
