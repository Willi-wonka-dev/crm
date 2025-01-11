<?php
session_start(); // Inicia la sesión o reanuda la sesión actual

require_once ("includes/funciones.php"); // Incluye un archivo con funciones auxiliares
comprobarSiHaIniciadoSesion(); // Llama a una función que verifica si el usuario ha iniciado sesión

require_once ("controllers/clientes.php"); // Incluye el controlador que maneja la lógica relacionada con los clientes
?>