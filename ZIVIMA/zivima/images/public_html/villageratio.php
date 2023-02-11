<?php
//include "header.php";
include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('village_ratio');
$xcrud->relation('village_id', 'village', 'village_id', 'name');
$xcrud->label('village_id', 'Village Name');
$xcrud->label('health_rate', 'Health Rate');
$xcrud->label('education_rate', 'Literacy Rate (%)');
$xcrud->label('poverty_ratio', 'Poverty Rate (%)');
$xcrud->label('access_to_cleanwater', 'Access To Cleanwater(%)');
$xcrud->label('access_to_electricity', 'Access To Electricity(%)');

$xcrud->unset_add();
$xcrud->unset_remove();

$xcrud->unset_edit();
//$xcrud->label('aadhar_no', 'aadhar no');

$xcrud->columns('village_id,health_rate,education_rate,access_to_cleanwater,access_to_electricity,population,poverty_ratio');
echo $xcrud->render();
//include "footer.php";
?>
