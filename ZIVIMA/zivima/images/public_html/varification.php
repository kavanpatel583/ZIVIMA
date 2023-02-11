<?php 

include("api/db_connect.php");

$aadhar = $_REQUEST['aadhar_number'];
$qry="select phone_no from aadhar_master where aadhar_number=$aadhar";


if($res=mysql_query($conn,$qry))
{
	

	$row = mysql_fetch_assoc($res);
		$arr = array('phone_no' => $row['phone_no']);
}    
echo json_encode($arr);  
?>