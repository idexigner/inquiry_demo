<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    // $p_id = $obj['p_id'];
     $date =strip_tags(mysqli_real_escape_string($con,trim( $obj['date'])));
     $aname =strip_tags(mysqli_real_escape_string($con,trim( $obj['aname'])));
     $aphoneNumber =strip_tags(mysqli_real_escape_string($con,trim( $obj['aphoneNumber'])));
     $acareOf =strip_tags(mysqli_real_escape_string($con,trim( $obj['acareOf'])));
     $acompleteAddress =strip_tags(mysqli_real_escape_string($con,trim( $obj['acompleteAddress'])));
     $asocietyName =strip_tags(mysqli_real_escape_string($con,trim( $obj['asocietyName'])));
     $atype =strip_tags(mysqli_real_escape_string($con,trim( $obj['atype'])));
     $aDemand =strip_tags(mysqli_real_escape_string($con,trim( $obj['aDemand'])));
     $anature =strip_tags(mysqli_real_escape_string($con,trim( $obj['anature'])));
     $aarea =strip_tags(mysqli_real_escape_string($con,trim( $obj['aarea'])));
     $aareaValue =strip_tags(mysqli_real_escape_string($con,trim( $obj['aareaValue'])));
     $aDirectionValue =strip_tags(mysqli_real_escape_string($con,trim( $obj['aDirectionValue'])));
     $afloorValue =strip_tags(mysqli_real_escape_string($con,trim( $obj['afloorValue'])));
     $afloorOther =strip_tags(mysqli_real_escape_string($con,trim( $obj['afloorOther'])));   
     $aroom =strip_tags(mysqli_real_escape_string($con,trim( $obj['aroom'])));
     $aroomOther =strip_tags(mysqli_real_escape_string($con,trim( $obj['aroomOther'])));
     $adocument =strip_tags(mysqli_real_escape_string($con,trim( $obj['adocument'])));
     $aauthority =strip_tags(mysqli_real_escape_string($con,trim( $obj['aauthority'])));
     $autility =strip_tags(mysqli_real_escape_string($con,trim( $obj['autility'])));
     $aProject =strip_tags(mysqli_real_escape_string($con,trim( $obj['aProject'])));
     $aotherDetails =strip_tags(mysqli_real_escape_string($con,trim( $obj['aotherDetails'])));
     $anearby =strip_tags(mysqli_real_escape_string($con,trim( $obj['anearby'])));
     $aotherFacilites =strip_tags(mysqli_real_escape_string($con,trim( $obj['aotherFacilites'])));
     $ahealthFacilites =strip_tags(mysqli_real_escape_string($con,trim( $obj['ahealthFacilites'])));
     $aDues =strip_tags(mysqli_real_escape_string($con,trim( $obj['aDues'])));
     $uid =strip_tags(mysqli_real_escape_string($con,trim( $obj['uid'])));
     $apicName =strip_tags(mysqli_real_escape_string($con,trim( $obj['picName'])));
     $apicNumber =strip_tags(mysqli_real_escape_string($con,trim( $obj['picNumber'])));


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


