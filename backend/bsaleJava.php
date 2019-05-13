<?php 

include 'DBConfig.php';

//    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);

	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

    // $p_id = $obj['p_id'];
     $date = strip_tags(mysqli_real_escape_string($con,trim( $obj['date'])));
     $sname = strip_tags(mysqli_real_escape_string($con,trim( $obj['sname'])));
     $sphoneNumber = strip_tags(mysqli_real_escape_string($con,trim( $obj['sphoneNumber'])));
     $scareOf = strip_tags(mysqli_real_escape_string($con,trim( $obj['scareOf'])));
     $scompleteAddress = strip_tags(mysqli_real_escape_string($con,trim( $obj['scompleteAddress'])));
     $SsocietyName = strip_tags(mysqli_real_escape_string($con,trim( $obj['SsocietyName'])));
     $stype = strip_tags(mysqli_real_escape_string($con,trim( $obj['stype'])));
     $sDemand = strip_tags(mysqli_real_escape_string($con,trim( $obj['sDemand'])));
     $snature = strip_tags(mysqli_real_escape_string($con,trim( $obj['snature'])));
     $sarea = strip_tags(mysqli_real_escape_string($con,trim( $obj['sarea'])));
     $sareaDropValue = strip_tags(mysqli_real_escape_string($con,trim( $obj['sareaDropValue'])));
     $sDirectionValue = strip_tags(mysqli_real_escape_string($con,trim( $obj['sDirectionValue'])));
     $sfloorDropValue = strip_tags(mysqli_real_escape_string($con,trim( $obj['sfloorDropValue'])));
     $sfloorCheckOther = strip_tags(mysqli_real_escape_string($con,trim( $obj['sfloorCheckOther'])));   
     $sroom = strip_tags(mysqli_real_escape_string($con,trim( $obj['sroom'])));
     $sroomOther = strip_tags(mysqli_real_escape_string($con,trim( $obj['sroomOther'])));
     $sdocument = strip_tags(mysqli_real_escape_string($con,trim( $obj['sdocument'])));
     $sauthority = strip_tags(mysqli_real_escape_string($con,trim( $obj['sauthority'])));
     $spayment = strip_tags(mysqli_real_escape_string($con,trim( $obj['spayment'])));
     $spaymentOtherText = strip_tags(mysqli_real_escape_string($con,trim( $obj['spaymentOtherText'])));
     $sutility = strip_tags(mysqli_real_escape_string($con,trim( $obj['sutility'])));
     $sProject = strip_tags(mysqli_real_escape_string($con,trim( $obj['sProject'])));
     $sotherDetails = strip_tags(mysqli_real_escape_string($con,trim( $obj['sotherDetails'])));
     $snearby = strip_tags(mysqli_real_escape_string($con,trim( $obj['snearby'])));
     $sotherFacilites = strip_tags(mysqli_real_escape_string($con,trim( $obj['sotherFacilites'])));
     $shealthFacilites = strip_tags(mysqli_real_escape_string($con,trim( $obj['shealthFacilites'])));
     $uid = strip_tags(mysqli_real_escape_string($con,trim( $obj['uid'])));
     $spicName = strip_tags(mysqli_real_escape_string($con,trim( $obj['picName'])));
     $spicNumber = strip_tags(mysqli_real_escape_string($con,trim( $obj['picNumber'])));


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


