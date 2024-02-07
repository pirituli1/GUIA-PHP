<!-- registrar_alumno.php -->
<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Problemas en la conexión: " . $conexion->connect_error);
        }

        $nombre = $_POST['nombre'];
        $mail = $_POST['mail'];
        $codigocurso = $_POST['codigocurso'];

        $query = "INSERT INTO alumnos(nombre, mail, codigocurso) VALUES (?, ?, ?)";
        $stmt = $conexion->prepare($query);

        // Verificar la preparación de la consulta
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $conexion->error);
        }

        // Vincular parámetros
        $stmt->bind_param("ssi", $nombre, $mail, $codigocurso);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "El alumno fue dado de alta.";
        } else {
            die("Problemas en la ejecución de la consulta: " . $stmt->error);
        }

        // Cerrar la conexión
        $stmt->close();
        $conexion->close();
    }
    ?>
</body>
</html>
