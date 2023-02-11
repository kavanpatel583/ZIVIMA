<?php
	include"connect.php";
	$mp_id=$_GET['mp_id'];
	$qry='DELETE FROM mpinfo WHERE mp_id="'.$mp_id.'"';
	mysql_query($qry);
	header('Location:addp.php');
	?>