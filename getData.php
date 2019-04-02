<?php

// print_r($_POST);
if($_POST['nam']!='gosavi' || $_POST['passwrd']!='gosavi'){
	$dt = array("result"=>"inaccess");
	echo json_encode($dt);
}
else{
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "alumni";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM ssscops";
$res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
$arrayDataset = array();
// while( $row = mysqli_fetch_array($res) ) {
    // $dataArray[] = $row["id"];
    // $dataArray[] = $row["firstname"];
    // $dataArray[] = $row["surname"];
	// $dataArray[] = $row["email"];
	

// }
  while($row_set =mysqli_fetch_row($res))
		  {
			array_push($arrayDataset, array( 
				"ID" =>$row_set[0],
				"Name" =>$row_set[1].' '.$row_set[2],
				"Contact" => $row_set[9],
				"email" =>$row_set[3],
				"batchyear" =>$row_set[4],
				"address" =>$row_set[5],
				"pharmacist_registration_no" =>$row_set[6],
				"profession" =>$row_set[7],
				"after_ssscop" =>$row_set[8],
				"achievements" => $row_set[10]
			));
		} 
echo json_encode($arrayDataset);
}
?>