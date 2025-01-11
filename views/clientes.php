<?php
if (!defined('BloqueoIncludes')) {
    echo "Acceso directo - No permitido";
    exit;
}

?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GestEmpresa</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    
    <script src="js/scripts.js"></script>
</head>
<body>
    <div id="web" class="sombra h100">
       <header>

            <?php 
                menu();
            ?>
       </header>
       <main>
            <h1>Clientes <a href="?accion=anadir"><i class="bi bi-plus-circle"></i></a></h1>           
            <?php if($accion == 'editar' or $accion == 'anadir'){ ?>

            
            <div id="editar">
                <form action="" class="flex-wrap sombra">
                    <div class="ancho50">
                    <label for="nombre">Cliente:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Introduce el nombre">
                    <input type="text" name="apellido1" id="apellido1" placeholder="Introduce el primer apellido">
                    <input type="text" name="apellido2" id="apellido2" placeholder="Introduce el segundo apellido">

                    <label for="dni">DNI/NIF</label>
                    <input type="text" name="dni" id="dni" placeholder="Introduce el dni">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Introduce el email">

                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" placeholder="Introduce el telefono">

                    
                    </div>
                    <div class="ancho50">
                    <fieldset style="padding:30px;margin-top:10px;">
                        <legend ><b>Dirección Postal</b></legend>

                    
                    <label for="direccion">Direccion</label>
                    <input type="text" name="direccion" id="direccion" placeholder="Introduce la direccion">
                    <label for="poblacion">Poblacion</label>
                    <input type="text" name="poblacion" id="poblacion" placeholder="Introduce la poblacion">
                    <label for="provincia">Provincia</label>
                    <input type="text" name="provincia" id="provincia" placeholder="Introduce la provincia">
                    <label for="pais">Pais</label>
                    <input type="text" name="pais" id="pais" placeholder="Introduce el pais">
                    
                    </fieldset> 
                    </div>
                    <input type="submit" value="Buscar" style="width:100%;">

                </form>
            </div>

            <?php } ?>


       </main>
    </div>
</body>
</html>