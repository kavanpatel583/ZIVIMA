<?php
	echo"ffdfs";
	include"connect.php";
echo"ffdfs";
$name=$_POST['name'];
echo"ffdfs";
$village_name=$_POST['village_name'];
$village_pincode=$_POST['village_pincode'];
$addhar_no=$_POST['addhar_no'];
$qry='insert into nodal_info(name,village_name,village_pincode,addhar_no)values("'.$name.'","'.$village_name.'","'.$village_pincode.'","'.$addhar_no.'")';
$result=mysql_query($qry);
 echo $qry;	 
	 
	header('Location:nodalcrud.php');
?>