<!DOCTYPE html>
<html>
<head>
    <title>Borrar Todos los Alumnos</title>
</head>
<body>
    <h2>Borrar Todos los Alumnos</h2>

    <?php
    $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }

    // Borrar todos los alumnos
    $borrarAlumnos = $conexion->query("DELETE FROM alumnos");

    if ($borrarAlumnos) {
        echo "Se ha borrado a todos los alumnos.";
    } else {
        echo "Problemas al borrar los alumnos: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>
