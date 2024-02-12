<!DOCTYPE html>
<html>
<head>
    <title>Listado de Alumnos</title>
</head>
<body>
<?php
$conexion = new mysqli("localhost", "root", "carlos3011", "phpfacil");
if ($conexion->connect_errno) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

$query = "SELECT alu.codigo as codigo, nombre, mail, codigocurso, fechanac, nombrecur
          FROM alumnos AS alu
          INNER JOIN cursos AS cur ON cur.codigo = alu.codigocurso";
$result = $conexion->query($query);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Código: {$row['codigo']}<br>";
        echo "Nombre: {$row['nombre']}<br>";
        echo "Mail: {$row['mail']}<br>";
        echo "Fecha de Nacimiento: {$row['fechanac']}<br>";
        echo "Curso: {$row['nombrecur']}<br>";
        echo "<hr>";
    }
} else {
    echo "Problemas en la consulta: " . $conexion->error;
}

$conexion->close();
?>
</body>
</html>

