<?php 

function login($usuario, $password, &$mensaje){ 
    // Hash de la contraseña usando MD5 (aunque es recomendable usar un método más seguro)
    $password_md5 = md5($password);

    // Conectar a la base de datos
    $conexion = conectar();
    
    // Consulta SQL preparada para prevenir inyecciones SQL
    $sql = "SELECT `id`,`admin` FROM `usuarios` WHERE `usuario` = :usuario AND password = :password";
    
    // Preparar la consulta
    $consulta = $conexion->prepare($sql);

    // Vínculo de parámetros a la consulta preparada
    $consulta->bindParam(':usuario', $usuario, PDO::PARAM_STR);
    $consulta->bindParam(':password', $password_md5, PDO::PARAM_STR);

    // Ejecutar la consulta
    $consulta->execute();
    
    // Contar las filas devueltas
    $filas = $consulta->rowCount();   
    
    if ($filas == 1) {
        // Si se encuentra el usuario
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        // Guardar datos de sesión
        $_SESSION['sello'] = true;
        $_SESSION['usuario_id'] = $resultado['id'];
        $_SESSION['usuario'] = $usuario;
        $_SESSION['es_admin'] = $resultado['admin'];
        // Redirigir a la página de inicio
        header('Location: inicio.php');
        exit;        
    } 
    else
    {
        // Manejo de errores si no se encuentra el usuario
        if ($filas == 0) {
            $mensaje = "Usuario o contraseña incorrectos.";
        } 
        else 
        {
            $mensaje = "Código de Error: 00001. <br>Contacte al administrador e indíquele el código de error.";
        }
    }
   
}
?>