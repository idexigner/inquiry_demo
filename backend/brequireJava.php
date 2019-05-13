<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    // $p_id = $obj['p_id'];
     $date = strip_tags(mysqli_real_escape_string($con,trim( $obj['date'])));
     $rname = strip_tags(mysqli_real_escape_string($con,trim( $obj['rname'])));
     $rphoneNumber = strip_tags(mysqli_real_escape_string($con,trim( $obj['rphoneNumber'])));
     $rcareOf = strip_tags(mysqli_real_escape_string($con,trim( $obj['rcareOf'])));
     $rrange = strip_tags(mysqli_real_escape_string($con,trim( $obj['rrange'])));
     $rsocietyName = strip_tags(mysqli_real_escape_string($con,trim( $obj['rsocietyName'])));
     $rtype = strip_tags(mysqli_real_escape_string($con,trim( $obj['rtype'])));
     $rarea = strip_tags(mysqli_real_escape_string($con,trim( $obj['rarea'])));
     $rareaValue = strip_tags(mysqli_real_escape_string($con,trim( $obj['rareaValue'])));
     $rfloorValue = strip_tags(mysqli_real_escape_string($con,trim( $obj['rfloorValue'])));
     $rfloorOther = strip_tags(mysqli_real_escape_string($con,trim( $obj['rfloorOther'])));
     $rroom = strip_tags(mysqli_real_escape_string($con,trim( $obj['rroom'])));
     $rroomOtherText = strip_tags(mysqli_real_escape_string($con,trim( $obj['rroomOtherText'])));
     $rotherDetails = strip_tags(mysqli_real_escape_string($con,trim( $obj['rotherDetails'])));   
     $rnearby = strip_tags(mysqli_real_escape_string($con,trim( $obj['rnearby'])));
     $rotherFacilites = strip_tags(mysqli_real_escape_string($con,trim( $obj['rotherFacilites'])));
     $rhealthFacilites = strip_tags(mysqli_real_escape_string($con,trim( $obj['rhealthFacilites'])));
     $uid = strip_tags(mysqli_real_escape_string($con,trim( $obj['uid'])));
     $rpicName = strip_tags(mysqli_real_escape_string($con,trim( $obj['picName'])));
     $rpicNumber = strip_tags(mysqli_real_escape_string($con,trim( $obj['picNumber'])));
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


