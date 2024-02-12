<?php
$conexion = new mysqli("localhost", "root", "carlos3011", "phpfacil");
if ($conexion->connect_errno) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

$fechanacimiento = $_POST['anio'] . "-" . $_POST['mes'] . "-" . $_POST['dia'];
$query = "INSERT INTO alumnos (nombre, mail, codigocurso, fechanac) VALUES (?, ?, ?, ?)";
$stmt = $conexion->prepare($query);
$stmt->bind_param("ssis", $_POST['nombre'], $_POST['mail'], $_POST['codigocurso'], $fechanacimiento);

if ($stmt->execute()) {
    echo "El alumno fue dado de alta.";
} else {
    echo "Problemas en el insert: " . $stmt->error;
}

$stmt->close();
$conexion->close();
?>
<br>
<a href="index3.php">Ver listado de alumnos</a>
