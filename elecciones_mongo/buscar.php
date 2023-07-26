<?php include "./header.php"; ?>


<?php

require_once "./clases/conexion.php";
require_once "./clases/crud.php";




?>





<?php





?>


<form name="formulario" method="post" action="validarcedu.php">

  Nombre: <input type="text" name="cedula" value="">

  <input type="submit" name="btnbuscar" />

</form>

<?php include "./scripts.php"; ?>