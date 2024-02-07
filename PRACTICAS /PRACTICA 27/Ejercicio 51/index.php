<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contar Alumnos</title>
</head>
<body>
    <?php
    // Datos de conexión
    $host = "localhost";
    $user = "root";
    $password = "carlos3011";
    $database = "agenda";

    // Conexión a la base de datos
    $conexion = new mysqli($host, $user, $password, $database);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }

    // Consulta para contar la cantidad de alumnos
    $consulta = "SELECT COUNT(*) as cantidad FROM alumnos";

    // Ejecutar la consulta
    $resultado = $conexion->query($consulta);

    // Verificar si hay resultados
    if ($resultado) {
        $reg = $resultado->fetch_assoc();
        echo "La cantidad de alumnos inscritos es: " . $reg['cantidad'];
    } else {
        echo "Problemas en la consulta: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>