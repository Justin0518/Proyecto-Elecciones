
<?php

include "./clases/conexion.php";
include "./clases/crud.php";

$crud = new Crud();

$datos = $crud->buscarcedula($_GET['cedula']);




$paises = $crud->paises();

?>



<form action="./procesos/actualizar.php" method="POST">



     
        <?php
        foreach($datos as $item) {
            ?>
       
     
       <input type="text" hidden value="<?php echo $item->_id?>" name="id">
   
        <br>  <br>
        <label for="cedula">Cedula</label>
        
        <input type="text" id ="cedula" name="cedula" value="<?php echo $item->cedula;?>" readonly>
        <br>  <br>
        <label for="nombre">Nombre</label>
        <input type="text" id ="nombre" name="nombre" value="<?php echo $item->nombre;?>" readonly>
        <br>  <br>
        <label for="apellido">Apellido</label>
        <input type="text" id ="apellido" name="apellido" value="<?php echo $item->apellido;?>" readonly>
        <br>  <br>
        <label for="municipio_nacimiento">Municipo de nacimiento</label>
        <input type="text" id ="municipio_nacimiento" name="municipio_nacimiento" value="<?php echo $item->municipio_nacimiento;?>" readonly>
        <br>  <br>
        <label for="fecha_nacimiento">Fecha de nacimiento</label>
        <input type="text" id ="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $item->fecha_nacimiento;?>" readonly>
        <br>  <br>
        <label for="municipio_residencia">Municipio de residencia</label>
        <input type="text" id ="municipio_residencia" name="municipio_residencia" value="<?php echo $item->municipio_residencia;?>" readonly>
        <br>  <br>
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id ="telefono" name="telefono" value="<?php echo $item->telefono;?>">
        <br>  <br>
        <label for="correo">Correo</label>
        <input type="text" class="form-control" id ="correo" name="correo" value="<?php echo $item->correo?>">
        <br>  <br>
        <button class= "btn btn-warning mt-3">
            <i class="fa-solid fa-floppy-disk"></i>Actualizar
        </button>
    

        <?php } ?> 

       
        </form>





<!-- combo paises  
        <select name="" id="">
            <?php 
            if($paises==0){
                ?>
                <option value="">
                Ningun resultado
                </option>
                <?php

             

            }
            
            else {
                foreach($paises as $pais) {
                    ?> 
                <option value="<?php echo $pais->nombre;?>">
                <?php echo $pais->nombre;?>    
                
             

                </option>

              <?php
                }

            }
            ?>  -->

            
            
                
            
        </select>