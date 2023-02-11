<?php

	 include("header.php");
	 include('xcrud/xcrud.php');
	 $xcrud = Xcrud::get_instance();

	 $xcrud->table('officer');
/*
$xcrud->change_type('image','image');
$documents = $xcrud->nested_table('products', 'id', 'products_images', 'proid');
	 
 	$documents->relation('proid', 'products', 'id', 'title');

$documents->change_type('image','image');
*/
$xcrud->table_name('officer');
	 echo $xcrud->render();
	 include("footer.php");
	 $xcrud->relation('village_id', 'village', 'village_id', 'name');

 
	 ?>
	