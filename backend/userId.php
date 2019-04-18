<?php
// session_start();
include('DBConfig.php');	


$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);

	 $uid = $obj['uid'];
	
// $username = $_POST['username'];
// $password = $_POST['password'];

	$result= $con->query("select * from users where url='$uid'");
	
// $result= $conn->query("SELECT * FROM users where username='$username' and password='$password'");
	
	if($result->num_rows==0){
		echo json_encode('Wrong Details');				
	}
	else{		
	// echo json_encode('ok');	

	while($row[] = $result->fetch_assoc()) {

		$tem = $row;
		
		$json = json_encode($tem);
		
		
		}	
		echo $json;	
	}
		
?>

