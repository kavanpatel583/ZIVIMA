<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sagy');

//get connection

$mysqli = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

//query to get data from the table
$query = "SELECT village.name, access_to_electricity  FROM village_ratio,village where village.village_id = village_ratio.village_id";

//execute query
$result = mysqli_query($mysqli,$query);

//loop through the returned data
$data = array();
while($row =mysqli_fetch_assoc($result))
{
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);
?>