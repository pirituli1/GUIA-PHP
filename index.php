<html> 
<head> 
 <title>MySQL 01 - Consulta a BD (Agenda)</title> 
</head> 
<body> 
<h1>Mostrar Nombres de la Agenda. BD </h1> 
<?php 
 $dp = new mysqli("localhost", "root", "carlos3011", "agenda"); 

 if ($dp->connect_error) {
    die("La conexión a la base de datos falló: " . $dp->connect_error);
 }

 $sql = "SELECT * FROM direcciones" ; 
 $resultado = $dp->query($sql); 

 if (!$resultado) {
    die("Error en la consulta: " . $dp->error);
 }

 while ($row = $resultado->fetch_assoc()) { 
    echo "{$row['Nombre']} {$row['Apellido']}<br>\n"; 
 } 

 $dp->close(); 
?> 
</body> 
</html>
