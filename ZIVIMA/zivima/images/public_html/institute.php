<?php
ob_start();
include "header.php";
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('institute');
//$xcrud->label('village_name', 'village name');
//$xcrud->label('village_pincode', 'village pincode');
//$xcrud->label('aadhar_no', 'aadhar no');

echo $xcrud->render();
include "footer.php";
?>
