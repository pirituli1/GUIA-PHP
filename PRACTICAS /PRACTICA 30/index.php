<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estadísticas de Alumnos por Curso</title>
</head>
<body>
    <?php
    $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }

    $query = "SELECT cur.nombre_curso, COUNT(alu.id) as cantidad, GROUP_CONCAT(alu.nombre) as nombres
              FROM alumnos as alu
              INNER JOIN cursos as cur ON cur.codigo_curso = alu.codigocurso
              GROUP BY alu.codigocurso";

    $result = $conexion->query($query);

    while ($reg = $result->fetch_assoc()) {
        echo "Nombre del curso: " . $reg['nombre_curso'] . "<br>";
        echo "Cantidad de inscripciones: " . $reg['cantidad'] . "<br>";
        echo "Nombres: " . $reg['nombres'] . "<br>";
        echo "<hr>";
    }

    $conexion->close();
    ?>
</body>
</html>
    