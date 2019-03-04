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

while( $row = mysqli_fetch_array($res) ) {
    $dataArray = array();

    $dataArray[] = $row["id"];
    $dataArray[] = $row["firstname"];
    $dataArray[] = $row["surname"];
	$dataArray[] = $row["email"];
	

}

echo json_encode($dataArray);

?>