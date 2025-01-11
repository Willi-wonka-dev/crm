<?php 
// Comprobamos que la constante 'BloqueoIncludes' está definida
if (!defined('BloqueoIncludes')) {
    exit;  // Si no está definida, se interrumpe la ejecución del script
}

// Se incluye el modelo 'inicio.php', que probablemente contiene lógica relevante para la funcionalidad de la página
require_once('models/inicio.php');

// Se incluye la vista 'inicio.php', que probablemente contiene el HTML y la interfaz de usuario
require_once('views/inicio.php');
?>