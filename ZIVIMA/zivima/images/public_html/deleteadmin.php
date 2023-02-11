<?php
	include"connect.php";
	$id=$_GET['id'];
	$qry='DELETE FROM admin WHERE id="'.$id.'"';
	mysql_query($qry);
	header('Location:adminselect.php');
	?>