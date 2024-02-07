<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos y Cursos</title>
</head>
<body>
<?php
// Datos de conexión
$host = "localhost";
$user = "root";
$password = "carlos3011";
$database = "agenda";

// Conexión a la base de datos
$conexion = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

// Consulta para obtener la lista de alumnos y cursos
$consulta = "SELECT alu.id AS codigo, nombre, mail, codigocurso, nombre_curso
             FROM alumnos AS alu
             INNER JOIN cursos AS cur ON cur.codigo_curso = alu.codigocurso";

// Ejecutar la consulta
$registros = $conexion->query($consulta);

// Verificar si hay resultados
if ($registros->num_rows > 0) {
    // Recorrer los resultados y mostrar la información
    foreach ($registros as $reg) {
        echo "Codigo: " . $reg['codigo'] . "<br>";
        echo "Nombre: " . $reg['nombre'] . "<br>";
        echo "Mail: " . $reg['mail'] . "<br>";
        echo "Curso: " . $reg['nombre_curso'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No hay alumnos inscritos en cursos.";
}

// Cerrar la conexión
$conexion->close();
?>
</body>
</html>
