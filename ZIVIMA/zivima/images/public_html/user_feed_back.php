<?php
ob_start();
include "header.php";
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('user_feed_back');
$xcrud->relation('aadhar_number', 'aadhar_master', 'aadhar_number', 'name');
$xcrud->relation('scheme_id', 'scheme', 'scheme_id', 'name');
$xcrud->relation('mp_id', 'mps', 'mp_id', 'name');
$xcrud->relation('village_id', 'village', 'village_id', 'name');




echo $xcrud->render();
include "footer.php";
?>
