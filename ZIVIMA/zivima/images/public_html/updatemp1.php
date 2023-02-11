<?php
	include"connect.php";
	$mp_id=$_POST['mp_id'];
	$mp_name=$_POST['mp_name'];
	
	$village=$_POST['village'];
	$consituency=$_POST['constitiency'];
	$scheme_id_string=$_POST['scheme_id_string'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$score=$_POST['score'];
	$addhar_no=$_POST['addhar_no'];
	$qry='UPDATE mpinfo SET mp_name="'.$mp_name.'",village="'.$village.'",consituency="'.$consituency.'",scheme_id_string="'.$scheme_id_string.'",age='.$age.',gender="'.$gender.'",score='.$score.',addhar_no='.$addhar_no.' WHERE mp_id="'.$mp_id.'"';
	mysql_query($qry);
	echo $qry;
	header('Location:addp.php');
?>