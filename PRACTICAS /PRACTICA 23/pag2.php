<!DOCTYPE html>
<html>
<head>
    <title>Problema</title>
</head>
<body>
<?php 
$conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

$registros = $conexion->query("SELECT id FROM alumnos WHERE mail='" . $_REQUEST['mail'] . "'");

// Verificar si hay resultados
if ($registros->num_rows > 0) {
    // Realizar la eliminación del alumno
    $conexion->query("DELETE FROM alumnos WHERE mail='" . $_REQUEST['mail'] . "'");

    echo "Se efectuó el borrado del alumno con dicho mail.";
} else {
    echo "No existe un alumno con ese mail.";
}

// Cerrar la conexión
$conexion->close();
?>
</body>
</html>
