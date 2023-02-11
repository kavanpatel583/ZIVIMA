<?php 
session_start();
if(isset($_SESSION["dcname"]))
{
    unset($_SESSION["dcname"]);
    echo "<script>window.location='index.php';</script>";
}

?>