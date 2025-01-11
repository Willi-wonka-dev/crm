<?php 

function comprobarSiHaIniciadoSesion() {
    // Verifica si el usuario ha iniciado sesión
    if (!isset($_SESSION['sello']) || $_SESSION['sello'] != true) {
        // Si la variable de sesión 'sello' no está configurada o no es verdadera,
        // redirige al usuario a la página 'index.php'.
        header('Location: index.php');
        exit; // Detiene la ejecución del script para asegurar la redirección.
    }

    // Define una constante llamada 'BloqueoIncludes' con el valor 'true'.
    // Esto puede usarse en otras partes del código para bloquear o condicionar
    // ciertos accesos cuando esta constante esté definida.
    define('BloqueoIncludes', true);
}
$host = 'localhost';  
$dbname = 'gestion_empresa';   
$user = 'root';       
$pass = '';     

function conectar() {
    // Declaramos variables globales que contienen los datos de conexión
    global $host, $user, $pass, $dbname;

    try {
        // Intentamos crear una nueva instancia de PDO para conectarnos a la base de datos
        // "mysql:host=$host;dbname=$dbname" define la cadena de conexión
        $conexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        
        // Establecemos el modo de error de PDO a excepción
        // Esto permite que los errores generen excepciones que puedan ser atrapadas
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Si la conexión es exitosa, retornamos el objeto de conexión
        return $conexion;

    } catch (PDOException $e) {
        // En caso de que ocurra un error al intentar conectar, capturamos la excepción
        // y mostramos un mensaje con la descripción del error
        echo "Error de conexión: " . $e->getMessage();
    }
}

function menu() {
    // Se inicia la función 'menu' que genera un menú HTML como salida
    echo "
            <ul>
                <li><a href='inicio.php'>Inicio</a></li>
                <li><a href='clientes.php'>Clientes</a></li>";
    
    // Se verifica si la sesión contiene la clave 'es_admin' y si su valor es verdadero
    if ($_SESSION['es_admin']) {
        // Si 'es_admin' es verdadero, se agrega un enlace adicional para 'usuarios'
        echo "<li><a href='usuarios.php'>Usuarios</a></li>";
    }   
    // Se añaden más elementos al menú
    echo        "<li><a href='trabajadores.php'>Trabajadores</a></li>
                <li><a href='salir.php'>Salir</a></li>
            </ul>   
    ";
}
?>