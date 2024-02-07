<!-- pagina_alumnos.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alumnos Inscritos</title>
</head>
<body>
    <?php
    // Verificar si se proporcionó el parámetro 'codigo_curso'
    if (isset($_GET['codigo_curso'])) {
        // Obtener y validar el valor del parámetro 'codigo_curso'
        $codigoCurso = filter_var($_GET['codigo_curso'], FILTER_VALIDATE_INT);

        if ($codigoCurso !== false && $codigoCurso > 0) {
            // Configuración de la conexión a la base de datos
            $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

            // Verificar la conexión
            if ($conexion->connect_error) {
                die("Problemas en la conexión: " . $conexion->connect_error);
            }

            // Consultar alumnos inscritos al curso dado
            $queryAlumnos = "SELECT * FROM alumnos WHERE codigocurso = $codigoCurso";
            $resultAlumnos = $conexion->query($queryAlumnos);

            // Mostrar la lista de alumnos
            if ($resultAlumnos->num_rows > 0) {
                echo "<h2>Alumnos Inscritos al Curso</h2>";
                while ($rowAlumno = $resultAlumnos->fetch_assoc()) {
                    echo "Nombre: " . $rowAlumno['nombre'] . "<br>";
                    echo "Mail: " . $rowAlumno['mail'] . "<br>";
                    echo "--------------------------<br>";
                }
            } else {
                echo "No hay alumnos inscritos en este curso.";
            }

            // Cerrar la conexión
            $conexion->close();
        } else {
            echo "El parámetro 'codigo_curso' no es válido.";
        }
    } else {
        echo "No se proporcionó el parámetro 'codigo_curso'.";
    }
    ?>
</body>
</html>
