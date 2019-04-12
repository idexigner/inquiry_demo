<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    // $p_id = $obj['p_id'];
    $date = $obj['date'];
     $name = $obj['name'];
     $phoneNumber = $obj['phoneNumber'];
     $careOf = $obj['careOf'];
     $range = $obj['range'];
     $societyName = $obj['societyName'];
     $type = $obj['type'];
     $nature = $obj['nature'];
     $area = $obj['area'];
     $areaValue = $obj['areaValue'];
     $payment = $obj['payment'];
     $down = $obj['down'];
     $schedulePeriod = $obj['schedulePeriod'];
     $monthly = $obj['monthly'];   
     $floorValue = $obj['floorValue'];
     $floorOther = $obj['floorOther'];
     $room = $obj['room'];
     $roomOther = $obj['roomOther'];
     $otherDetails = $obj['otherDetails'];
     $nearby = $obj['nearby'];
     $otherFacilites = $obj['otherFacilites'];
     $healthFacilites = $obj['healthFacilites'];
     $uid = $obj['uid'];
     $picName = $obj['picName'];
     $picNumber = $obj['picNumber'];


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


