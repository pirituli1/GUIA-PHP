<?php 
if (isset($_POST['radio'])) {
    $color = "";
    switch ($_POST['radio']) {
        case "rojo":
            $color = "#ff0000";
            break;
        case "verde":
            $color = "#00ff00";
            break;
        case "azul":
            $color = "#0000ff";
            break;
    }
    // formato de una cookie setcookie(nombre, valor, expire, path, domain, secure, httponly);
    setcookie("color", $color, time() + 60 * 60 * 24 * 365, "/");
} else {
    echo "No se ha seleccionado ningún color.";
}
?> 
<html> 
<head> 
<title>Problema</title> 
</head> 
<body> 
Se creó la cookie. 
<br> 
<a href="index.php">Ir a la otra página</a> 
</body> 