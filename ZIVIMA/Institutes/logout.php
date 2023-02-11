<?php 
session_start();
if(isset($_SESSION["iname"]))
{
    unset($_SESSION["iname"]);
    echo "<script>window.location='index.php';</script>";
}

?>