<?php
ob_start();
// include "header.php";
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('scheme_village_relation');
echo $xcrud->render();
// include "footer.php";
?>