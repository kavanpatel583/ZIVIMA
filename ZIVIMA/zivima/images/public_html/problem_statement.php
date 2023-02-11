<?php
ob_start();
error_reporting(0);

include('xcrud/xcrud.php');
$xcrud = Xcrud::get_instance();
$xcrud->table('problem_statement_village');

echo $xcrud->render();

?>