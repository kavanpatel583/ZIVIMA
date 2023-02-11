<?php
	include"connect.php";
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$qry='insert into admin (Name,email,Password) values ("'.$name.'","'.$email.'","'.$password.'")';
	$result=mysql_query($qry);
	 echo $qry;
	header('Location:login.php?id=0');
?>