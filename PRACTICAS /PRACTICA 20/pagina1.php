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

// Evitar el uso de funciones de MySQL obsoletas
$registros = $dp->query("SELECT id, nombre, mail, codigocurso FROM alumnos");

// Verificar el resultado de la consulta
if (!$registros) {
    die("Problemas en el select: " . $dp->error);
}

while ($reg = $registros->fetch_assoc()) {
    echo "Id:" . $reg['id'] . "<br>"; 
    echo "Nombre:" . $reg['nombre'] . "<br>"; 
    echo "Mail:" . $reg['mail'] . "<br>"; 
    echo "Curso:";

    switch ($reg['codigocurso']) { 
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

    echo "<br>"; 
    echo "<hr>"; 
}

// Cerrar la conexión
$dp->close();
?> 
</body> 
</html>