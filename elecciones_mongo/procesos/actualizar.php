<?php 
include "../clases/Conexion.php";
include "../clases/Crud.php";



$Crud = new Crud();
$id = $_POST['id'];

$datos = array(


  
    "cedula" => $_POST['cedula'],
    "telefono" => $_POST['telefono'],
    "correo" => $_POST['correo']
    );


    $respuesta = $Crud->actualizar($id,$datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        echo "<script> alert ('Se ha actualizado correctamente'); window.location='../index.php'</script>";
        } else {
    print_r($respuesta);
    }

?>