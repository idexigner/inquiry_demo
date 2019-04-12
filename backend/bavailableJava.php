<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    // $p_id = $obj['p_id'];
     $date = $obj['date'];
     $aname = $obj['aname'];
     $aphoneNumber = $obj['aphoneNumber'];
     $acareOf = $obj['acareOf'];
     $acompleteAddress = $obj['acompleteAddress'];
     $asocietyName = $obj['asocietyName'];
     $atype = $obj['atype'];
     $aDemand = $obj['aDemand'];
     $anature = $obj['anature'];
     $aarea = $obj['aarea'];
     $aareaValue = $obj['aareaValue'];
     $aDirectionValue = $obj['aDirectionValue'];
     $afloorValue = $obj['afloorValue'];
     $afloorOther = $obj['afloorOther'];   
     $aroom = $obj['aroom'];
     $aroomOther = $obj['aroomOther'];
     $adocument = $obj['adocument'];
     $aauthority = $obj['aauthority'];
     $autility = $obj['autility'];
     $aProject = $obj['aProject'];
     $aotherDetails = $obj['aotherDetails'];
     $anearby = $obj['anearby'];
     $aotherFacilites = $obj['aotherFacilites'];
     $ahealthFacilites = $obj['ahealthFacilites'];
     $aDues = $obj['aDues'];
     $uid = $obj['uid'];
     $apicName = $obj['picName'];
     $apicNumber = $obj['picNumber'];


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("insert into available_rent(date,aname,aphoneNumber,acareOf,acompleteAddress,asocietyName,atype,aDemand,anature,aarea,aareaDrop,aDirection,afloor,afloorOther,aroom,aroomOther,adocument,aauthority,autility,aProject,aotherDetails,anearby,aotherFacilities,ahealthFacilities,aDues,apicName,apicNumber,u_id) values ('$date','$aname','$aphoneNumber','$acareOf','$acompleteAddress','$asocietyName','$atype','$aDemand','$anature','$aarea','$aareaValue','$aDirectionValue','$afloorValue','$afloorOther','$aroom','$aroomOther','$adocument','$aauthority','$autility','$aProject','$aotherDetails','$anearby','$aotherFacilites','$ahealthFacilites','$aDues','$apicName','$apicNumber','$uid')");
	
    if($result){
				echo json_encode("Success");
			}
			else{
			   echo json_encode(mysqli_error($con)); // our query fail 		

                echo "assad";
			}


		// if($result->num_rows>0){

        //     while($row[] = $result->fetch_assoc()) {

        //         $tem = $row;
                
        //         $json = json_encode($tem);
                
        //         }
        //         echo $json;	
		// }
		// else
		// {		
		//     echo  json_encode('No Update'); // alert msg in react native

		// }
	

?>


