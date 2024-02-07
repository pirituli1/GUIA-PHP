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
$sql = "SELECT id, nombre, codigocurso FROM alumnos WHERE mail=?";
$stmt = $dp->prepare($sql);

// Verificar la preparación de la consulta
if (!$stmt) {
    die("Error en la consulta: " . $dp->error);
}

// Vincular parámetro
$stmt->bind_param("s", $_REQUEST['mail']);

// Ejecutar la consulta
$stmt->execute();

// Obtener resultados
$stmt->bind_result($codigo, $nombre, $codigocurso);

if ($stmt->fetch()) {
    echo "Nombre: $nombre<br>"; 
    echo "Curso: "; 
    switch ($codigocurso) { 
        case 1:
            echo "PHP"; 
            break; 
        case 2:
            echo "ASP"; 
            break; 
        case 3:
            echo "JSP"; 
            break; 
    }
} else { 
    echo "No existe un alumno con ese mail."; 
}

// Cerrar la conexión
$stmt->close();
$dp->close();
?> 
</body> 
</html>
