<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Curso - Paso 3</title>
</head>
<body>
    <?php
    $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }

    $codigoCurso = $_POST['codigoCurso'];
    $mailViejo = $_POST['mailViejo'];

    $query = "UPDATE alumnos SET codigoCurso = ? WHERE mail = ?";

    $stmt = $conexion->prepare($query);
    $stmt->bind_param("ss", $codigoCurso, $mailViejo);
    $stmt->execute();

    echo "El curso fue modificado con éxito";

    $stmt->close();
    $conexion->close();
    ?>
</body>
</html>
