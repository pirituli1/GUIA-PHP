<?php
// Este archivo realiza la conexión a la base de datos y se reutiliza en otros scripts.

// Crear una instancia de mysqli para la conexión
$conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}
?>
