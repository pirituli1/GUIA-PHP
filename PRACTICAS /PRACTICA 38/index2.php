<?php
if ($_POST['clave'] !== 'z80') {
    header("Location: index.php?error=1");
    exit; // Terminamos el script para evitar que se procese más código innecesario
}
?>
<html>
<head>
    <title>Bienvenida</title>
</head>
<body>
    <h2>Bienvenido</h2>
    <p>Ha ingresado correctamente su clave.</p>
</body>
</html>
