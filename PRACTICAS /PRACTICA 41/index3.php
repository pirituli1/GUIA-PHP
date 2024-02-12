<html>
<head>
<title>Quejas Registradas</title>
</head>
<body>
<?php
// Revisa que existan datos en el .txt datos 
if (file_exists("datos.txt")) {
// Guarda el contenido del txt en una variable $quejas = file_get_contents("datos.txt") tambien revisa que si ésta vacía o no existe se avise al usuario 
if (!empty($quejas)) {
        echo "<pre>$quejas</pre>";
    } else {
        echo "No hay quejas registradas.";
    }
} else {
    echo "No existe el documento de quejas.";
}
?>
</body>
</html>
