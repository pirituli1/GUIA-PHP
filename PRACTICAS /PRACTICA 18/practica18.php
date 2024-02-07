<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 18</title>
</head>
<body>
    <h1>Vectores Asociativos</h1>

<?php
    // Creamos un vector asosiativo 
    $usuarios = array(
        "usuario1" => "contraseña1",
        "usuario2" => "123456789",
        "usuario3" => "31052000",
        "usuario4" => "pelusa_1",
        "usuario5" => "cuchurrumin_20"
    );

    echo "El usuario 1 tiene de contraseña: " . $usuarios["usuario1"] . "<br>";
    echo "El usuario 2 tiene de contraseña: " . $usuarios["usuario2"] . "<br>";
    echo "El usuario 3 tiene de contraseña: " . $usuarios["usuario3"] . "<br>";
    echo "El usuario 4 tiene de contraseña: " . $usuarios["usuario4"] . "<br>";
    echo "El usuario 5 tiene de contraseña: " . $usuarios["usuario5"] . "<br>";
?>
</body>
</html>