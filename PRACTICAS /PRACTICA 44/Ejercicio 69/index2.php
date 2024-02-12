<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $importe = $_POST["importe"];
    $importeFormateado = sprintf("$ %09.2f", $importe); // Formato: $ 0000170.00 dólares

    echo "<h2>¡Gracias por tu donación!</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Importe a Donar: $importeFormateado</p>";
} else {
    echo "<h2>Error: Acceso incorrecto</h2>";
}
?>
