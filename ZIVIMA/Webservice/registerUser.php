<?php
include 'connection.php';

$name=$_REQUEST["name"];
$contact=$_REQUEST["contact"];
$password=$_REQUEST["password"];
$email=$_REQUEST["email"];


$result=mysqli_query($con,"insert into tbl_user (user_name,user_password,user_contact,user_email) values ('".$name."','".$password."','".$contact."','".$email."')");

if($result)
{
    echo "yes";
}
else
{
    echo "no";
}


?>