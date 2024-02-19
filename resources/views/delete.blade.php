<?php

include_once("Classes/Crud.php");


$id = $crud->escape_string($_GET['id']);

$result = $crud->delete($id, 'products_table');

if ($result) {
	
	header("Location:index.php");
}
?>
