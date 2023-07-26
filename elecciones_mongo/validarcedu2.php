<?php
require_once "./clases/conexion.php";
require_once "./clases/crud.php";

$crud = new Crud();
$datos = $crud->validarcedula2();

?>