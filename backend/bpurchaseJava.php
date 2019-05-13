<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    // $p_id = $obj['p_id'];
    $date = strip_tags(mysqli_real_escape_string($con,trim( $obj['date'])));
     $name = strip_tags(mysqli_real_escape_string($con,trim( $obj['name'])));
     $phoneNumber = strip_tags(mysqli_real_escape_string($con,trim( $obj['phoneNumber'])));
     $careOf = strip_tags(mysqli_real_escape_string($con,trim( $obj['careOf'])));
     $range = strip_tags(mysqli_real_escape_string($con,trim( $obj['range'])));
     $societyName = strip_tags(mysqli_real_escape_string($con,trim( $obj['societyName'])));
     $type = strip_tags(mysqli_real_escape_string($con,trim( $obj['type'])));
     $nature = strip_tags(mysqli_real_escape_string($con,trim( $obj['nature'])));
     $area = strip_tags(mysqli_real_escape_string($con,trim( $obj['area'])));
     $areaValue = strip_tags(mysqli_real_escape_string($con,trim( $obj['areaValue'])));
     $payment = strip_tags(mysqli_real_escape_string($con,trim( $obj['payment'])));
     $down = strip_tags(mysqli_real_escape_string($con,trim( $obj['down'])));
     $schedulePeriod = strip_tags(mysqli_real_escape_string($con,trim( $obj['schedulePeriod'])));
     $monthly = strip_tags(mysqli_real_escape_string($con,trim( $obj['monthly'])));   
     $floorValue = strip_tags(mysqli_real_escape_string($con,trim( $obj['floorValue'])));
     $floorOther = strip_tags(mysqli_real_escape_string($con,trim( $obj['floorOther'])));
     $room = strip_tags(mysqli_real_escape_string($con,trim( $obj['room'])));
     $roomOther = strip_tags(mysqli_real_escape_string($con,trim( $obj['roomOther'])));
     $otherDetails = strip_tags(mysqli_real_escape_string($con,trim( $obj['otherDetails'])));
     $nearby = strip_tags(mysqli_real_escape_string($con,trim( $obj['nearby'])));
     $otherFacilites = strip_tags(mysqli_real_escape_string($con,trim( $obj['otherFacilites'])));
     $healthFacilites = strip_tags(mysqli_real_escape_string($con,trim( $obj['healthFacilites'])));
     $uid = strip_tags(mysqli_real_escape_string($con,trim( $obj['uid'])));
     $picName = strip_tags(mysqli_real_escape_string($con,trim( $obj['picName'])));
     $picNumber = strip_tags(mysqli_real_escape_string($con,trim( $obj['picNumber'])));


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("insert into purchase(date,name , phone , careOf , ranges , societyName , type , nature , area , areaUnit , payment , downPayment , schedulePayment , monthlyPayment , floor , floorOther , room , roomOther , otherDetail , nearby , otherFacilities , healthFacilities,picName,picNumber,u_id) values('$date','$name','$phoneNumber','$careOf','$range','$societyName','$type','$nature','$area','$areaValue','$payment','$down','$schedulePeriod','$monthly','$floorValue','$floorOther','$room','$roomOther','$otherDetails','$nearby','$otherFacilites','$healthFacilites','$picName','$picNumber','$uid')");
	
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


