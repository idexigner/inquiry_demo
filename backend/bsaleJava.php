<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    // $p_id = $obj['p_id'];
     $date = $obj['date'];
     $sname = $obj['sname'];
     $sphoneNumber = $obj['sphoneNumber'];
     $scareOf = $obj['scareOf'];
     $scompleteAddress = $obj['scompleteAddress'];
     $SsocietyName = $obj['SsocietyName'];
     $stype = $obj['stype'];
     $sDemand = $obj['sDemand'];
     $snature = $obj['snature'];
     $sarea = $obj['sarea'];
     $sareaDropValue = $obj['sareaDropValue'];
     $sDirectionValue = $obj['sDirectionValue'];
     $sfloorDropValue = $obj['sfloorDropValue'];
     $sfloorCheckOther = $obj['sfloorCheckOther'];   
     $sroom = $obj['sroom'];
     $sroomOther = $obj['sroomOther'];
     $sdocument = $obj['sdocument'];
     $sauthority = $obj['sauthority'];
     $spayment = $obj['spayment'];
     $spaymentOtherText = $obj['spaymentOtherText'];
     $sutility = $obj['sutility'];
     $sProject = $obj['sProject'];
     $sotherDetails = $obj['sotherDetails'];
     $snearby = $obj['snearby'];
     $sotherFacilites = $obj['sotherFacilites'];
     $shealthFacilites = $obj['shealthFacilites'];
     $uid = $obj['uid'];
     $spicName = $obj['picName'];
     $spicNumber = $obj['picNumber'];


	// $result= $con->query("update purchase set name='$pname' where p_id='$p_id'");


    $result= $con->query("insert into sale(date,sname ,sphoneNumber ,scareOf ,scompleteAddress  ,ssocietyName  ,stype  ,sdemand,snature  ,sarea  ,sareaDrop  ,sdirection  ,sfloor  ,sfloorOther  ,sroom  ,sroomOther  ,sdocument   ,sauthority    ,spayment  ,spaymentOther1  ,sutility  ,sproject  ,sotherDetails  ,snearby  ,sotherFacilities  ,shealthFacilities,spicName,spicNumber  ,u_id ) values ('$date','$sname','$sphoneNumber','$scareOf','$scompleteAddress','$SsocietyName','$stype','$sDemand','$snature','$sarea','$sareaDropValue','$sDirectionValue','$sfloorDropValue','$sfloorCheckOther','$sroom','$sroomOther','$sdocument','$sauthority','$spayment','$spaymentOtherText','$sutility','$sProject','$sotherDetails','$snearby','$sotherFacilites','$shealthFacilites','$spicName','$spicNumber','$uid')");
	
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


