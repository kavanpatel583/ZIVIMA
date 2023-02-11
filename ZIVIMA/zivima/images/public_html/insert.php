<?php
	include"connect.php";
	$name=$_POST['mp_name'];
	$village=$_POST['village'];
	$consituency=$_POST['constitiency'];
	$scheme_id_string=$_POST['scheme_id_string'];
	$age=$_POST['age'];

	$gender=$_POST['gender'];
	$score=$_POST['score'];
		
	$addhar_no=$_POST['addhar_no'];
	$qry='insert into mpinfo (mp_name,village,consituency,scheme_id_string,age,gender,score,addhar_no)
	values("'.$name.'","'.$village.'","'.$consituency.'",'.$scheme_id_string.','.$age.',"'.$gender.'",'.$score.','.$addhar_no.')';
	$result=mysql_query($qry);
	 echo $qry;	 
	 
	header('Location:addp.php');
?>