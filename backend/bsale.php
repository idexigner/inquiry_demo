<?php

 


    if(isset($_POST['submit'])){
         echo "reached";

        $sname =  $_POST['sname'];
        $sphoneNumber =  $_POST['sphoneNumber'];
        $scareOf =  $_POST['scareOf'];

        $scompleteAddress =  $_POST['scompleteAddress'];
        $ssocietyName =  $_POST['SsocietyName'];
        $stype =  $_POST['stype'];
        if($stype==='other'){
            $stype =  $_POST['stypeOther'];         
        }
        $sDemand =  $_POST['sDemand'];
        $snature =  $_POST['snature'];
        $sarea =  $_POST['sarea'];
        $sareaDrop =  $_POST['sareaDrop'];
        $sDirection =  $_POST['sDirection'];
        $sfloor =  implode(',', $_POST['sfloor']);
        $sfloorOther =  $_POST['sfloorOther'];
        $sroom =  implode(',', $_POST['sroom']);
        $sroomOther =  $_POST['sroomOther'];
        $sdocument =  $_POST['sdocument'];
        $sdocumentOther =  $_POST['sdocumentOther'];
        $sauthority =  $_POST['sauthority'];
        $sauthorityOther =  $_POST['sauthorityOther'];
        $spayment =  $_POST['spayment'];
        $spaymentOther1 =  $_POST['spaymentOther1'];
        $spaymentOther2 =  $_POST['spaymentOther2'];
        $spaymentOther3 =  $_POST['spaymentOther3'];
        $spaymentOther4 =  $_POST['spaymentOther4'];
        $sutility =  implode(',', $_POST['sutility']);
        $sProject =  $_POST['sProject'];
        $sotherDetails =  $_POST['sotherDetails'];
        $snearby =  $_POST['snearby'];
        $sotherFacilites =  $_POST['sotherFacilites'];
        $shealthFacilites =  $_POST['shealthFacilites'];
        

        
        // if($_POST['floor']===null){
        //         $floor =  mysql_real_escape_string(implode(',', $_POST['floor']));
        // }else{
        //     $floor='nu';
        // }
        
        
        // $oherDetails =  $_POST['oherDetails'];
        // $nearby =  $_POST['nearby'];
        // $otherFacilites =  $_POST['otherFacilites'];
        // $healthFacilites =  $_POST['healthFacilites'];
       


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
                    $query= "insert into sale(sname ,sphoneNumber ,scareOf ,scompleteAddress  ,ssocietyName  ,stype  ,sdemand,snature  ,sarea  ,sareaDrop  ,sdirection  ,sfloor  ,sfloorOther  ,sroom  ,sroomOther  ,sdocument  ,sdocumentOther  ,sauthority  , sauthorityOther  ,spayment  ,spaymentOther1  ,spaymentOther2  ,spaymentOther3  ,spaymentOther4  ,sutility  ,sproject  ,sotherDetails  ,snearby  ,sotherFacilities  ,shealthFacilities  ,u_id ) values ('$sname','$sphoneNumber','$scareOf','$scompleteAddress','$ssocietyName','$stype','$sDemand','$snature','$sarea','$sareaDrop','$sDirection','$sfloor','$sfloorOther','$sroom','$sroomOther','$sdocument','$sdocumentOther','$sauthority','$sauthorityOther','$spayment','$spaymentOther1','$spaymentOther2','$spaymentOther3','$spaymentOther4','$sutility','$sProject','$sotherDetails','$snearby','$sotherFacilites','$shealthFacilites','guest')";

            // }

           
        
       
        
        if(mysqli_query($con,$query)){
            // echo "Data inserted";
             header("Location: http://1sourceestate.com");
            die();
            // echo $floor;
            // $message="Successfully Inserted";
            // echo "<script type='text/javascript'>alert('Successfully Inserted');</script>";
            // echo "<script type='text/javascript'>console.log('Sucasdcessfully Inserted');</script>";
            // sleep(2);
            // $msg='Successfull';
            // header("Location:../domain.php?msg=".$msg);
            // header("Location:../index.php");
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