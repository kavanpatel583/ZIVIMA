<?php
	include"connect.php";
	$id=$_POST['id'];
	$name=$_POST['name'];;
	$village_name=$_POST['village'];
	$village_pincode=$_POST['village_pincode'];
	$addhar_no=$_POST['addhar_no'];
	$qry='UPDATE nodal_info SET name="'.$name.'",village_name="'.$village_name.'",village_pincode="'.$village_pincode.'",addhar_no="'.$addhar_no.'" WHERE nodal_id="'.$id.'"';
	mysql_query($qry);
	echo $qry;
	header('Location:nodalcrud.php');
	?>