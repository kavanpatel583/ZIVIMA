<?php
	include"connect.php";
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$qry='insert into admin (Name,email,Password) values ("'.$name.'","'.$email.'","'.$password.'")';
	$result=mysql_query($qry);
	echo $qry;	 
	header('Location:registeration.php');
?>