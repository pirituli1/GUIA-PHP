<?php
// Incluir la librería que contiene la función retornarConexion
require_once("conexion.php");

// Obtener la conexión
$conexion = retornarConexion();

// Consultar todos los registros de la tabla ALUMNOS
$consulta = mysqli_query($conexion, "SELECT * FROM alumnos");

// Verificar si hay registros
if (mysqli_num_rows($consulta) > 0) {
    // Mostrar los registros
    while ($fila = mysqli_fetch_assoc($consulta)) {
        echo "ID: " . $fila['id'] . "<br>";
        echo "Nombre: " . $fila['nombre'] . "<br>";
        echo "Mail: " . $fila['mail'] . "<br>";
        echo "Código de curso: " . $fila['codigocurso'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No se encontraron registros en la tabla ALUMNOS.";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
