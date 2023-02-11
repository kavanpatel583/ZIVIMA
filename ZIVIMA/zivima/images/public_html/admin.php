<?php
ob_start();
include "header.php";
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('admin');
echo $xcrud->render();
include "footer.php";
?>
