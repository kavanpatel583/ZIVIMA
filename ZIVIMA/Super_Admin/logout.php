<?php 
session_start();
if(isset($_SESSION["aname"]))
{
    unset($_SESSION["aname"]);
    echo "<script>window.location='index.php';</script>";
}

?>