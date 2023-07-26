
<?php



class Crud extends Conexion
{

    public function mostrarDatos()
    {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->personas;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }




    public function validarcedula()
    {

        $cedula = $_POST['cedula'];
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->personas;
            $contador = $coleccion->count(array('cedula' => $cedula));



            if ($contador == 1) {
                echo "<script> alert ('Bienvenido'); window.location='./actualizar.php?cedula=$cedula'</script>";
            } else {
                echo "<script> alert ('Revisar usuario o contraseña'); window.location='./buscar.php'</script>";
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }


    public function validarcedula2()
    {

        $cedula = $_POST['cedula'];
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->personas;
            $contador = $coleccion->count(array('cedula' => $cedula));



            if ($contador == 1) {
                echo "<script> alert ('Bienvenido'); window.location='./votar.php?cedula=$cedula'</script>";
            } else {
                echo "<script> alert ('Revisar usuario o contraseña'); window.location='./buscar.php'</script>";
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }



    public function buscarcedula($cedula)
    {

        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->personas;
            $datos = $coleccion->find(array('cedula' => $cedula));
            //echo $datos;
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }



    }


    public function obtenerDocumento ($id) {
        try {
        $conexion = Conexion::conectar();
        $coleccion = $conexion->personas;
        $datos = $coleccion->findOne (
        array(
        '_id' => new MongoDB\BSON\ObjectId($id)
        )
        );
        return $datos;
        } catch (\Throwable $th) {
        return $th->getMessage();
        }
    }
    

    public function actualizar($id,$datos)
    {
            try {
            $conexion = Conexion:: conectar();
            $coleccion = $conexion->personas;
            $respuesta = $coleccion->updateOne (
                                        ['_id' => new MongoDB\BSON\ObjectId($id)],
                                          [
                                         '$set' => $datos
                                           ]
            );
            return $respuesta;
            } catch (\Throwable $th) {
            return $th->getMessage();

    }
}






    public function paises()
    {

        $conexion = parent::conectar();
        $coleccion = $conexion->pais;
        $paises = $coleccion->find();
        $contador = $coleccion->count();
        if ($contador == 0) {
            $paises = 0;
        } elseif ($contador > 0) {
        }
        return $paises;
    }
}

?>




