<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Cursos</title>
</head>
<body>
    <?php
    // Configuración de la conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }

    // Consultar todos los cursos
    $queryCursos = "SELECT * FROM cursos";
    $resultCursos = $conexion->query($queryCursos);

    // Mostrar los nombres de los cursos como hipervínculos
    if ($resultCursos->num_rows > 0) {
        while ($row = $resultCursos->fetch_assoc()) {
            $codigoCurso = $row['codigo_curso'];
            $nombreCurso = $row['nombre_curso'];

            echo "<a href='index2.php?codigo_curso=$codigoCurso'>$nombreCurso</a><br>";
        }
    } else {
        echo "No hay cursos disponibles.";
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>
