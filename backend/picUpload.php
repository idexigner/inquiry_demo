<?php
//echo "Reacehed here";
    if(isset($_POST['submit'])){

    $picName=$_POST['picName']; 
    $userId=$_POST['userId'];
    $refillChk=$_POST['refillChk'];
    // Count total files
    $countfiles = count($_FILES['file']['name']);
   
    // Looping all files
    for($i=0;$i<$countfiles;$i++){
    // $filename = $_FILES['file']['name'][$i];
     $filename = $picName.$i.".jpg";
     
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'][$i],'../upload/'.$filename);
    
    }
   }
   //echo "Done";.'&refill=1'
  // header('Location: http://1sourceestate.com/inquiry_demo?uid='.$userId);
  if($refillChk == "yes"){
    header('Location: http://localhost/inquiry_demo?uidUrl='.$userId);
  }
  else{
      if($userId == "37429861"){
        header('Location: http://1sourceestate.com/');
      }
    else{
        header('Location: http://1sourceestate.com/onesource_admin/');
    }
  }
   
?>