<?php
// Incluir el archivo de conexión
include("conexion.php");

// Verificar si la solicitud es mediante POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $codigocurso = $_POST['codigocurso'];

    // Preparar la consulta SQL para insertar un nuevo alumno
    $sql = "INSERT INTO alumnos (nombre, mail, codigocurso) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);

    // Verificar la preparación de la consulta
    if (!$stmt) {
        die("Error en la consulta: " . $conexion->error);
    }

    // Vincular parámetros
    $stmt->bind_param("ssi", $nombre, $mail, $codigocurso);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "El alumno fue dado de alta.";
    } else {
        echo "Problemas en la consulta: " . $stmt->error;
    }

    // Cerrar la declaración preparada
    $stmt->close();
}

// Cerrar la conexión
$conexion->close();
?>
