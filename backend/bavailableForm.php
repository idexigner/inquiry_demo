<?php

 


    if(isset($_POST['submit'])){
         //echo "reachsed";
       //  $username = strip_tags(mysqli_real_escape_string($con,trim($username)));
        $aname =  strip_tags(mysqli_real_escape_string($con,trim($_POST['aname'])));
        $aphoneNumber =  strip_tags(mysqli_real_escape_string($con,trim($_POST['aphoneNumber'])));
        $acareOf =  strip_tags(mysqli_real_escape_string($con,trim($_POST['acareOf'])));

        $acompleteAddress =  strip_tags(mysqli_real_escape_string($con,trim($_POST['acompleteAddress'])));
        $asocietyName =  strip_tags(mysqli_real_escape_string($con,trim($_POST['asocietyName'])));
        $atype =  strip_tags(mysqli_real_escape_string($con,trim($_POST['atype'])));
        if($atype==='other'){
            $atype =  strip_tags(mysqli_real_escape_string($con,trim($_POST['atypeOther'];)))         
        }
        $aDemand =  strip_tags(mysqli_real_escape_string($con,trim($_POST['aDemand'])));
        $anature =  strip_tags(mysqli_real_escape_string($con,trim($_POST['anature'])));
        $aarea =  strip_tags(mysqli_real_escape_string($con,trim($_POST['aarea'])));
        $aareaDrop =  strip_tags(mysqli_real_escape_string($con,trim($_POST['aareaDrop'])));
        $aDirection =  strip_tags(mysqli_real_escape_string($con,trim($_POST['aDirection'])));
        $afloor =  implode(',', $_POST['afloor']);
        $afloorOther =  strip_tags(mysqli_real_escape_string($con,trim($_POST['afloorOther'])));
        $aroom =  implode(',', $_POST['aroom']);
        $aroomOther =  strip_tags(mysqli_real_escape_string($con,trim($_POST['aroomOther'])));
        $adocument =  strip_tags(mysqli_real_escape_string($con,trim($_POST['adocument'])));
        $adocumentOther =  strip_tags(mysqli_real_escape_string($con,trim(['adocumentOther'])));
        $aauthority =  strip_tags(mysqli_real_escape_string($con,trim(['aauthority'])));
        $aauthorityOther =  strip_tags(mysqli_real_escape_string($con,trim(['aauthorityOther'])));
        // $spayment =  $_POST['spayment'];
        // $spaymentOther1 =  $_POST['spaymentOther1'];
        // $spaymentOther2 =  $_POST['spaymentOther2'];
        // $spaymentOther3 =  $_POST['spaymentOther3'];
        // $spaymentOther4 =  $_POST['spaymentOther4'];
        $autility =  implode(',', $_POST['autility']);
        $aProject =  strip_tags(mysqli_real_escape_string($con,trim(['aProject'])));
        $aotherDetails =  strip_tags(mysqli_real_escape_string($con,trim(['aotherDetails'])));
        $anearby =  strip_tags(mysqli_real_escape_string($con,trim(['anearby'])));
        $aotherFacilites =  strip_tags(mysqli_real_escape_string($con,trim(['aotherFacilites'])));
        $ahealthFacilites =  strip_tags(mysqli_real_escape_string($con,trim(['ahealthFacilites'])));
        $aDues =  strip_tags(mysqli_real_escape_string($con,trim(['aDues'])));


        
        

                    include 'DBConfig.php';
                  

                    $query= "insert into available_rent(aname,aphoneNumber,acareOf,acompleteAddress,asocietyName,atype,aDemand,anature,aarea,aareaDrop,aDirection,afloor,afloorOther,aroom,aroomOther,adocument,adocumentOther,aauthority,aauthorityOther,autility,aProject,aotherDetails,anearby,aotherFacilities,ahealthFacilities,aDues,u_id) values ('$aname','$aphoneNumber','$acareOf','$acompleteAddress','$asocietyName','$atype','$aDemand','$anature','$aarea','$aareaDrop','$aDirection','$afloor','$afloorOther','$aroom','$aroomOther','$adocument','$adocumentOther','$aauthority','$aauthorityOther','$autility','$aProject','$aotherDetails','$anearby','$aotherFacilites','$ahealthFacilites','$aDues','guest')";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            // }

           
        
       
        
        if(mysqli_query($con,$query)){
            // echo "Data inserted";
             header("Location: http://1sourceestate.com");
            die();
            
           
            

        }
        else{
           

             header("Location: http://1sourceestate.com");
            die();

          
        }

       

    }




   


?>