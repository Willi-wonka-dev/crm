<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GesTurn</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="js/scripts.js"></script>
</head>
<body>
    
    <div id="contenedor">

        
        <form action="" method="POST" id="login" >
            <h1>GesEmpresa &copy;</h1>
            <p>by wILLIAM</p>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario">
            <label for="password">Password:</label>
            <input type="text" name="password" id="password">
            <?php if($mensaje!="") {echo $mensaje;} ?>
            <input type="submit" value="iniciar sesión">
        </form>
    </div>

</body>
</html>