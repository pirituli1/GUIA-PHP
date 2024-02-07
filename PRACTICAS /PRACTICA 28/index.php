<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Cursos</title>
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

    // Consulta para obtener los nombres de todos los cursos
    $consulta = "SELECT nombre_curso FROM cursos";

    // Ejecutar la consulta
    $resultado = $conexion->query($consulta);

    // Verificar si hay resultados
    if ($resultado) {
        // Mostrar los nombres de los cursos
        while ($fila = $resultado->fetch_assoc()) {
            echo "Curso: " . $fila['nombre_curso'] . "<br>";
        }

        // Consulta para obtener la cantidad total de cursos
        $consulta_total = "SELECT COUNT(*) as cantidad FROM cursos";
        $resultado_total = $conexion->query($consulta_total);

        // Verificar si hay resultados para la cantidad total
        if ($resultado_total) {
            $reg_total = $resultado_total->fetch_assoc();
            echo "<br>Cantidad total de cursos: " . $reg_total['cantidad'];
        } else {
            echo "<br>Problemas en la consulta para la cantidad total: " . $conexion->error;
        }
    } else {
        echo "Problemas en la consulta: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>

