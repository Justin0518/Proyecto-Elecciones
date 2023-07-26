<?php

require_once "./clases/conexion.php";
require_once "./clases/crud.php";

$crud = new Crud();
$datos = $crud->mostrarDatos();

	
?>



<table class="table table-sm table-hover table-bordered" >
<thead>
<th>Nombre</th>
<th>cedula</th>
</thead>

        <tbody>
        
      
        <?php
        foreach($datos as $item) {
            ?>
        <tr>

        <td> <?php echo $item->nombre;?></td>
        <td> <?php echo $item->cedula;?></td>
        
        </tr>

        <?php } ?>

        </tbody>
        </table>
  

    