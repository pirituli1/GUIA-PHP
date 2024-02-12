<!DOCTYPE html>
<html>
<head>
    <title>Procesar Fecha</title>
</head>
<body>
    <?php
    $dia = intval($_POST['dia']); // Convertir a entero
    $mes = intval($_POST['mes']); // Convertir a entero
    $anio = intval($_POST['anio']); // Convertir a entero

    if (checkdate($mes, $dia, $anio)) {
        echo "La fecha ingresada ($dia/$mes/$anio) es válida.";
    } else {
        echo "La fecha ingresada ($dia/$mes/$anio) no es válida.";
    }
    ?>
    <br>
    <a href="index.php">Volver al Formulario</a>
</body>
</html>
