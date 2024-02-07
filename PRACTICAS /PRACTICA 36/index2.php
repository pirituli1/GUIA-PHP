<?php
session_start();

// Establecer la conexión con la base de datos
$conexion = mysqli_connect("localhost", "root", "carlos3011", "Agenda");

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Problemas en la conexión: " . mysqli_connect_error());
}

// Obtener el correo electrónico ingresado por el usuario
$mail = $_POST['mail'];

// Consulta para verificar si el correo existe en la tabla ALUMNOS
$consulta = "SELECT nombre FROM alumnos WHERE mail = '$mail'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    // Si el correo existe, rescatar el nombre y almacenarlo en una variable de sesión
    $fila = mysqli_fetch_assoc($resultado);
    $_SESSION['nombre'] = $fila['nombre'];
    
    // Redirigir a la tercera página de bienvenida
    header("Location: index3.php");
    exit();
} else {
    // Si el correo no existe, mostrar un mensaje y redirigir a la página de formulario
    echo "El correo electrónico ingresado no existe en nuestra base de datos.";
    echo "<br>";
    echo "<a href='36_formulario.php'>Volver al formulario</a>";
}

// Cerrar la conexión con la base de datos
mysqli_close($conexion);
?>
