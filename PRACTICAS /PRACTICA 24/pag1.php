<?php
$conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

// Borrar todos los registros de la tabla cursos
$conexion->query("DELETE FROM cursos");

echo "Se efectuó el borrado de todos los cursos.";

// Cerrar la conexión
$conexion->close();
?>
