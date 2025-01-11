<?php 
// Se incluye el archivo 'index.php', que probablemente contenga la lógica de acceso o una función importante para la autenticación
require_once('models/index.php');

$mensaje = '';  // Inicializamos la variable $mensaje como una cadena vacía

// Comprobamos si la solicitud HTTP es del tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificamos si las variables 'usuario' y 'password' están definidas
    if (!isset($_POST['usuario']) || !isset($_POST['password'])) {
        // Si alguna de las variables no está definida, se asigna un mensaje de error
        $mensaje = "Error: Debe introducir un usuario y una contraseña.";
    } else {
        // Limpiamos y procesamos el input del usuario
        $usuario = htmlspecialchars(trim($_POST['usuario']), ENT_QUOTES);  // Se eliminan espacios y se escapan caracteres especiales
        $password = htmlspecialchars(trim($_POST['password']), ENT_QUOTES);  // Lo mismo para la contraseña

        // Se llama a la función 'login' para manejar la autenticación
        login($usuario, $password, $mensaje);
    }
}

// Se incluye el archivo de vista 'index.php', que generalmente contendrá el HTML y el formulario de inicio de sesión
include_once('views/index.php');
?>