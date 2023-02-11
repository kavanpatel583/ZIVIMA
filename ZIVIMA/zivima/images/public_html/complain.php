<?php
ob_start();
include "header.php";
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('complain');	 
// $xcrud->relation('officer_id', 'officer', 'officer_id', 'name');
$xcrud->label('complain_desc', 'Description');
$xcrud->label('complain_time', 'complain Time');
$xcrud->label('complain_image', 'complain Image');
$xcrud->label('complain_status', 'complain size');
// $xcrud->label('officer_id', 'complain id');



echo $xcrud->render();
include "footer.php";
?>
