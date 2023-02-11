<?php
	include"connect.php";
	$nodal_id=$_GET['nodal_id'];
	$qry='DELETE FROM nodal_info WHERE nodal_id="'.$nodal_id.'"';
	mysql_query($qry);
	header('Location:nodalcrud.php');
	?>