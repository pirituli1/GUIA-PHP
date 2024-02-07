<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Alumno - Paso 3</title>
</head>
<body>
    <?php
    $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }

    $codigo = $_POST['codigo'];
    $mail = $_POST['mail'];
    $nombre = $_POST['nombre'];
    $codigoCurso = $_POST['codigoCurso'];

    $query = "UPDATE alumnos SET mail = ?, nombre = ?, codigocurso = ? WHERE id = ?";

    $stmt = $conexion->prepare($query);
    $stmt->bind_param("ssii", $mail, $nombre, $codigoCurso, $codigo);
    $stmt->execute();

    echo "Los datos del alumno fueron modificados con éxito";

    $stmt->close();
    $conexion->close();
    ?>
</body>
</html>
