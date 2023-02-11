<?php
include 'connection.php';

$email=$_REQUEST["mail"];
$password=$_REQUEST["password"];

$result=mysqli_query($con,"select * from tbl_user where user_email='".$email."' and user_password='".$password."'");

if(mysqli_num_rows($result)>0)
{
    echo "yes";
}
else
{
    echo "no";
}


?>