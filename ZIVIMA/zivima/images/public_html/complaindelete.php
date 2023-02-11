<?php
	include"connect.php";
	$complain_id=$_GET['complain_id'];
	$qry='DELETE FROM complain WHERE complain_id="'.$complain_id.'"';
	mysql_query($qry);
	
     //  header('Location:selectmp.php');
	
?>
	