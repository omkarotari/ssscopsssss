<?php

$columns = array( 
// datatable column index  => database column name
    0 => 'id',
    1 => 'name',
    2 => 'email',
);
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
				"firstname" =>$row_set[1],
				"surname" =>$row_set[2],
				"email" =>$row_set[3],
				"batchyear" =>$row_set[4],
				"address" =>$row_set[5],
				"marital_status" =>$row_set[6],
				"profession" =>$row_set[7],
				"after_ssscop" =>$row_set[8]
			));
		} 
echo json_encode($arrayDataset);

?>