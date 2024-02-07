<!DOCTYPE html>
<html>
<head>
    <title>Borrar Alumnos por Curso</title>
</head>
<body>
    <h2>Borrar Alumnos por Curso</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Código del curso: <input type="text" name="codigocurso">
        <input type="submit" value="Borrar Alumnos">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $codigo_curso = $_POST['codigocurso'];

        $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Problemas en la conexión: " . $conexion->connect_error);
        }

        // Verificar si existe el curso
        $existeCurso = $conexion->query("SELECT * FROM alumnos WHERE codigocurso=$codigo_curso");

        if ($existeCurso->num_rows > 0) {
            // Borrar alumnos asociados al curso
            $conexion->query("DELETE FROM alumnos WHERE codigocurso = $codigo_curso");
            echo "Se han borrado todos los alumnos del curso con código '$codigo_curso'.";
        } else {
            echo "No existe el curso con código '$codigo_curso'.";
        }

        // Cerrar la conexión
        $conexion->close();
    }
    ?>
</body>
</html>
