<?php
	
include"connect.php";
$name=$_POST['name'];

$email=$_POST['email'];
$password=$_POST['password'];
$qry='insert into admin(name,email,password)values("'.$name.'","'.$email.'","'.$password.'")';
$result=mysql_query($qry);
 echo $qry;	 
	 
header('Location:insert.html');
?>