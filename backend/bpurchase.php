<?php

 


    if(isset($_POST['submit'])){
        //  echo "reached";

        $name =  $_POST['name'];
        $phoneNumber =  $_POST['phoneNumber'];
        $careOf =  $_POST['careOf'];
        $range =  $_POST['range'];
        $societyName =  $_POST['societyName'];
        $type =  $_POST['type'];
       if($type==='other'){
            $type =  $_POST['typeOther'];         
        }
        $nature =  $_POST['nature'];
        $area =  $_POST['area'];
        $areaDrop =  $_POST['areaDrop'];
        $payment =  $_POST['payment'];
        $down =  $_POST['down'];
        $schedulePeriod =  $_POST['schedulePeriod'];
        $monthly =  $_POST['monthly'];

        
        // if($_POST['floor']===null){
        //         $floor =  mysql_real_escape_string(implode(',', $_POST['floor']));
        // }else{
        //     $floor='nu';
        // }
        $floor =  implode(',', $_POST['floor']);
        $floorOther =  $_POST['floorOther'];
        $room = implode(',', $_POST['room']);
        $roomOther =  $_POST['roomOther'];
        $oherDetails =  $_POST['oherDetails'];
        $nearby =  $_POST['nearby'];
        $otherFacilites =  $_POST['otherFacilites'];
        $healthFacilites =  $_POST['healthFacilites'];
       


    //   echo trim($domain);
    //    $run=true;
                // if(empty($domain)){
                //     $run=false;
                //     $msg='Empty';

                // }else if(preg_match('/[#!@%12345678890$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $domain) ){
                //     // /\\d/
                //     //'/^[\w]+$/'
                //     // [#!@%12345678890$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]
                //     $run=false;
                //     $msg='Invalid';
                // }   
                    
            //         if(empty($domain)){
                    
            // }
            // else{
                // if($run === true){
                    include 'DBConfig.php';
                    // $con = mysqli_connect("localhost","root","","crime_management_system");
                    $query= "insert into purchase(name , phone , careOf , ranges , societyName , type , nature , area , areaUnit , payment , downPayment , schedulePayment , monthlyPayment , floor , floorOther , room , roomOther , otherDetail , nearby , otherFacilities , healthFacilities) values('$name','$phoneNumber','$careOf','$range',' $societyName','$type','$nature','$area','$areaDrop','$payment',' $down','$schedulePeriod','$monthly','$floor','$floorOther',' $room','$roomOther','$oherDetails','$nearby','$otherFacilites','$healthFacilites')";

            // }

           
        
       
        
        if(mysqli_query($con,$query)){
            // echo "Data inserted";
            // echo $floor;
            // $message="Successfully Inserted";
            // echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
            // echo "<script type='text/javascript'>console.log('Sucasdcessfully Inserted');</script>";
            // sleep(2);
            // $msg='Successfull';
            // header("Location:../domain.php?msg=".$msg);
            // header("Location:../index.php");
            // var url= "http://1sourceestate.com"; 
            // window.location = url; 

            header("Location: http://1sourceestate.com");
            die();

            // header("http://1sourceestate.com");
            // if(preg_match('/^[\w]+$/', $String)){
            //      header("Location:../domain.php");
            // }
            // else{
            //     $msg='Invalid Domainss';
            // header("Location:../domain.php?msg=".$msg);

            // }
           
            

        }
        else{
            //  echo "Data failed";
             header("Location: http://1sourceestate.com");
            die();
            
            //  echo $floor;
            //   $msg='Invalid Domains';
        //    header("Location:../index.php");
            
            // header("Location:../domain.php");
            // exit();
            //  $message="Data Failed to Insert";
            //  
            // echo "<script type='text/javascript'>alert('Data Failed to Insert');</script>";
            //
        }

        // mysql_query("");


// create TABLE tbl_create_emergency(id int primary key AUTO_INCREMENT, locationTitle varchar(255), locationAddress varchar(255),
// locationType varchar(255),severity varchar(255), landlordName varchar(255), landlordContact varchar(255), latitude varchar(255), 
// longitude varchar(255))

    }


    // function ContainsNumbers($String){
    // return preg_match('/^[\w]+$/', $String) > 0;


   


?>