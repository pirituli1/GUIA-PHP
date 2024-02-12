<?php
// Obtiene la información del anterior formulario
$nombre = $_POST['nombre'];
$queja = $_POST['queja'];
// Obtiene la fecha y hora actual
$fecha_hora = date("Y-m-d H:i:s");
// Crea un registro con las variables creadas anteiormente (de la linea 3 al 6)
$registro = "Fecha y hora: $fecha_hora - Nombre: $nombre - Queja: $queja\n";
// Agrega el contenido de nuestro $registro a nuestro documento .txt (datos.txt)
file_put_contents("datos.txt", $registro, FILE_APPEND | LOCK_EX);
echo "La queja ha sido registrada exitosamente.<br>";
echo "<a href='index.php'>Volver al formulario</a>";
?>
