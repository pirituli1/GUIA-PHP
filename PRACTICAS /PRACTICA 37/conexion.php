<?php
// Definición de la función retornarConexion
function retornarConexion()
{
    // Datos de conexión
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "carlos3011";
    $base_datos = "Agenda";

    // Establecer la conexión con la base de datos
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

    // Verificar si la conexión fue exitosa
    if (!$conexion) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    // Retornar la conexión
    return $conexion;
}
?>
