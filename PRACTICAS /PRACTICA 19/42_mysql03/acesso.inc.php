<?php
$dp = new mysqli("localhost", "root", "carlos3011", "agenda");

// Verificar la conexión
if ($dp->connect_error) {
    die("La conexión a la base de datos falló: " . $dp->connect_error);
}
?>