<?php
$con=mysqli_connect("localhost","root","") or die(mysqli_error("mysql not connect")); 
mysqli_select_db($con,"zivima") or die(mysqli_error()); 
?>
