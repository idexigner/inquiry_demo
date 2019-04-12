<?php

 


    if(isset($_POST['submit'])){
         echo "reached";

        $rname =  $_POST['rname'];
        $rphoneNumber =  $_POST['rphoneNumber'];
        $rcareOf =  $_POST['rcareOf'];
        $rrange =  $_POST['rrange'];
        $rsocietyName =  $_POST['rsocietyName'];        
        $rarea =  $_POST['rarea'];
        $rareaDrop =  $_POST['rareaDrop'];
        $rtype =  $_POST['rtype'];
        if($rtype==='other'){
            $rtype =  $_POST['rtypeOther'];         
        }
        $rfloor =  implode(',', $_POST['rfloor']);
        $rfloorOther =  $_POST['rfloorOther'];
        $rroom =  implode(',', $_POST['rroom']);
        $rroomOther =  $_POST['rroomOther'];         
        $rotherDetails =  $_POST['rotherDetails'];
        $rnearby =  $_POST['rnearby'];
        $rotherFacilites =  $_POST['rotherFacilites'];
        $rhealthFacilites =  $_POST['rhealthFacilites'];
        

        
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
                    $query= "insert into required_rent(rname,rphoneNumber,rcareOf,rrange,rsocietyName,rarea,rareaDrop,rtype,rfloor,rfloorOther,rroom,rroomOther,rOtherDetails,rnearby,rotherFacilities,rhealthFacilities,u_id) values ('$rname','$rphoneNumber','$rcareOf','$rrange','$rsocietyName','$rarea','$rareaDrop','$rtype','$rfloor','$rfloorOther','$rroom','$rroomOther','$rotherDetails','$rnearby','$rotherFacilites','$rhealthFacilites','guest')";

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