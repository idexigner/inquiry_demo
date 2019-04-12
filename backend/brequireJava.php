<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    // $p_id = $obj['p_id'];
     $date = $obj['date'];
     $rname = $obj['rname'];
     $rphoneNumber = $obj['rphoneNumber'];
     $rcareOf = $obj['rcareOf'];
     $rrange = $obj['rrange'];
     $rsocietyName = $obj['rsocietyName'];
     $rtype = $obj['rtype'];
     $rarea = $obj['rarea'];
     $rareaValue = $obj['rareaValue'];
     $rfloorValue = $obj['rfloorValue'];
     $rfloorOther = $obj['rfloorOther'];
     $rroom = $obj['rroom'];
     $rroomOtherText = $obj['rroomOtherText'];
     $rotherDetails = $obj['rotherDetails'];   
     $rnearby = $obj['rnearby'];
     $rotherFacilites = $obj['rotherFacilites'];
     $rhealthFacilites = $obj['rhealthFacilites'];
     $uid = $obj['uid'];
     $rpicName = $obj['picName'];
     $rpicNumber = $obj['picNumber'];
    //  $roomOther = $obj['roomOther'];
    //  $otherDetails = $obj['otherDetails'];
    //  $nearby = $obj['nearby'];
    //  $otherFacilites = $obj['otherFacilites'];
    //  $healthFacilites = $obj['healthFacilites'];


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("insert into required_rent(date,rname,rphoneNumber,rcareOf,rrange,rsocietyName,rarea,rareaDrop,rtype,rfloor,rfloorOther,rroom,rroomOther,rOtherDetails,rnearby,rotherFacilities,rhealthFacilities,rpicName,rpicNumber,u_id) values ('$date','$rname','$rphoneNumber','$rcareOf','$rrange','$rsocietyName','$rarea','$rareaValue','$rtype','$rfloorValue','$rfloorOther','$rroom','$rroomOtherText','$rotherDetails','$rnearby','$rotherFacilites','$rhealthFacilites','$rpicName','$rpicNumber','$uid')");
	
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


