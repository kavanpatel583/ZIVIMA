<?php
	include"connect.php";
	$id=$_POST['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$qry='UPDATE admin SET name="'.$name.'",email="'.$email.'",password="'.$password.'" WHERE id="'.$id.'"';
	mysql_query($qry);
	echo $qry;
	header('Location:adminselect.php');
?>