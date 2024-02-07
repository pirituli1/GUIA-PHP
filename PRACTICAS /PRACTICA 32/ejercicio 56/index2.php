<html>
<head>
<title>Subir Foto</title>
</head>
<body>
<?php
// Datos de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "carlos3011";
$base_de_datos = "Agenda";

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

// Verificar si se recibió un archivo
if (isset($_FILES['foto'])) {
    // Copiar la foto al servidor
    copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
    echo "La foto se ha registrado en el servidor.<br>";

    // Mostrar la foto
    $nom = $_FILES['foto']['name'];
    echo "<img src=\"$nom\">";
} else {
    echo "No se ha recibido ningún archivo.";
}

// Cerrar la conexión
$conexion->close();
?>
</body>
</html>