<?php

 


    if(isset($_POST['submit'])){
         echo "reachsed";

        $aname =  $_POST['aname'];
        $aphoneNumber =  $_POST['aphoneNumber'];
        $acareOf =  $_POST['acareOf'];

        $acompleteAddress =  $_POST['acompleteAddress'];
        $asocietyName =  $_POST['asocietyName'];
        $atype =  $_POST['atype'];
        if($atype==='other'){
            $atype =  $_POST['atypeOther'];         
        }
        $aDemand =  $_POST['aDemand'];
        $anature =  $_POST['anature'];
        $aarea =  $_POST['aarea'];
        $aareaDrop =  $_POST['aareaDrop'];
        $aDirection =  $_POST['aDirection'];
        $afloor =  implode(',', $_POST['afloor']);
        $afloorOther =  $_POST['afloorOther'];
        $aroom =  implode(',', $_POST['aroom']);
        $aroomOther =  $_POST['aroomOther'];
        $adocument =  $_POST['adocument'];
        $adocumentOther =  $_POST['adocumentOther'];
        $aauthority =  $_POST['aauthority'];
        $aauthorityOther =  $_POST['aauthorityOther'];
        // $spayment =  $_POST['spayment'];
        // $spaymentOther1 =  $_POST['spaymentOther1'];
        // $spaymentOther2 =  $_POST['spaymentOther2'];
        // $spaymentOther3 =  $_POST['spaymentOther3'];
        // $spaymentOther4 =  $_POST['spaymentOther4'];
        $autility =  implode(',', $_POST['autility']);
        $aProject =  $_POST['aProject'];
        $aotherDetails =  $_POST['aotherDetails'];
        $anearby =  $_POST['anearby'];
        $aotherFacilites =  $_POST['aotherFacilites'];
        $ahealthFacilites =  $_POST['ahealthFacilites'];
        $aDues =  $_POST['aDues'];


        
        

        
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
                    // $query= "insert into available_rent(aname,aphoneNumber,acareOf,acompleteAddress,asocietyName,atype,aDemand,anature,aarea,aareaDrop,aDirection,afloor,afloorOther,aroom,aroomOther,adocument,adocumentOther,aauthority,aauthorityOther,autility,aProject,aotherDetails,anearby,aotherFacilities,ahealthFacilities,aDues,u_id ) values ('$aname','$aphoneNumber','$acareOf','$acompleteAddress','$asocietyName','$atype','$aDemand',$anature','$aarea','$aareaDrop','$aDirection','$afloor','$afloorOther','$aroom','$aroomOther','$adocument','$adocumentOther','$aauthority',$aauthorityOther','$autility','$aProject','$aotherDetails','$anearby','$aotherFacilites','$ahealthFacilites','$aDues','guest')";

                    $query= "insert into available_rent(aname,aphoneNumber,acareOf,acompleteAddress,asocietyName,atype,aDemand,anature,aarea,aareaDrop,aDirection,afloor,afloorOther,aroom,aroomOther,adocument,adocumentOther,aauthority,aauthorityOther,autility,aProject,aotherDetails,anearby,aotherFacilities,ahealthFacilities,aDues,u_id) values ('$aname','$aphoneNumber','$acareOf','$acompleteAddress','$asocietyName','$atype','$aDemand','$anature','$aarea','$aareaDrop','$aDirection','$afloor','$afloorOther','$aroom','$aroomOther','$adocument','$adocumentOther','$aauthority','$aauthorityOther','$autility','$aProject','$aotherDetails','$anearby','$aotherFacilites','$ahealthFacilites','$aDues','guest')";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
            //  echo "Data failesdkjkj";
            //  echo mysql_error();
            //  mysql_error();

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