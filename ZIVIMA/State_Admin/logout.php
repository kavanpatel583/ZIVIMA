<?php 
session_start();
if(isset($_SESSION["saname"]))
{
    unset($_SESSION["saname"]);
    echo "<script>window.location='index.php';</script>";
}

?>