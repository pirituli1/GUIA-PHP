<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
    // Verificar si se ha proporcionado el parámetro 'tabla' en la URL
    if (isset($_GET['tabla'])) {
        // Obtener y validar el valor del parámetro 'tabla'
        $tabla = filter_var($_GET['tabla'], FILTER_VALIDATE_INT);

        if ($tabla !== false && $tabla > 0 && $tabla <= 10) {
            echo "Listado de la tabla del $tabla <br>";

            for ($f = 1; $f <= 10; $f++) {
                $valor = $f * $tabla;
                echo "$valor - ";
            }
        } else {
            echo "El parámetro 'tabla' no es válido.";
        }
    } else {
        echo "No se proporcionó el parámetro 'tabla'.";
    }
    ?>
</body>
</html>