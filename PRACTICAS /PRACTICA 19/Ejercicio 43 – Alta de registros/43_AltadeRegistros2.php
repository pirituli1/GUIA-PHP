<html> 
<head> 
<title>Problema</title> 
</head> 
<body> 
<?php 
$dp = new mysqli("localhost", "root", "carlos3011", "agenda");

// Verificar la conexión
if ($dp->connect_error) {
    die("La conexión a la base de datos falló: " . $dp->connect_error);
}

// Evitar la inyección de SQL utilizando declaraciones preparadas
$sql = "INSERT INTO alumnos (nombre, mail, codigocurso) VALUES (?, ?, ?)";
$stmt = $dp->prepare($sql);

// Verificar la preparación de la consulta
if (!$stmt) {
    die("Error en la consulta: " . $dp->error);
}

// Vincular parámetros
$stmt->bind_param("ssi", $_REQUEST['nombre'], $_REQUEST['mail'], $_REQUEST['codigocurso']);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "El alumno fue dado de alta.";
} else {
    die("Problemas en la consulta: " . $stmt->error);
}

// Cerrar la conexión
$stmt->close();
$dp->close();
?> 
</body> 
</html>
