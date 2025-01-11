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
    <title>Gesturn</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/scripts.js"></script>
</head>
<body>
    <div id="web" class="sombra h100">
       <header>

            <?php 
                menu();
            echo "Bienvenido a GestEmpresa: ".$_SESSION['usuario'];
            ?>

       </header>
       <main>
            <h1>Bienvenido a Gesturn</h1>           
            
            <div class="flex-nowrap sombra ">
                Esta es la pagina de inicio

            </div>






       </main>
    </div>
</body>
</html>