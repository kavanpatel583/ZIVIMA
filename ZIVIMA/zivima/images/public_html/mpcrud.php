<?php
ob_start();
include "header.php";
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('mps');
echo $xcrud->render();
$xcrud->relation('village_id', 'village', 'village_id', 'name');

include "footer.php";
?>
