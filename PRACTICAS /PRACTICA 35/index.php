<?php
// Definir los titulares ficticios
$titulares = array(
    "Noticia política: Juan Pérez elegido nuevo presidente",
    "Noticia económica: Aumenta el valor de la bolsa de valores",
    "Noticia deportiva: Equipo local gana el campeonato nacional"
);

// Verificar si se ha enviado el formulario y se ha seleccionado un titular
if (isset($_POST['titular'])) {
    $titular_seleccionado = $titulares[$_POST['titular']];
    // Establecer la cookie con el titular seleccionado
    setcookie('titular', $titular_seleccionado, time() + (86400 * 30), "/");
} else {
    // Verificar si existe la cookie y obtener el titular seleccionado
    $titular_seleccionado = isset($_COOKIE['titular']) ? $_COOKIE['titular'] : '';
}

// Verificar si se ha enviado el formulario para borrar cookies
if (isset($_POST['borrar_cookies'])) {
    // Eliminar la cookie del titular seleccionado
    setcookie('titular', '', time() - 3600, '/');
    // Redireccionar para recargar la página y mostrar los tres titulares
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}
?>

<html>
<head>
    <title>Selección de titular</title>
</head>
<body>

<h2>Últimos titulares</h2>
<?php
// Mostrar los primeros tres titulares con identificadores únicos
foreach ($titulares as $key => $titular) {
    if ($titular == $titular_seleccionado) {
        echo "<p>$titular</p>";
    } else {
        echo "<p style='display:none;'>$titular</p>";
    }
}
?>

<hr>

<h2>Seleccione el titular que desea ver al ingresar</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <?php
    // Mostrar los botones de radio para seleccionar el titular
    foreach ($titulares as $key => $titular) {
        $checked = ($titular == $titular_seleccionado) ? 'checked' : '';
        echo "<input type='radio' name='titular' value='$key' $checked> $titular<br>";
    }
    ?>
    <br>
    <input type="submit" value="Guardar selección">
</form>

<hr>

<!-- Botón para borrar las cookies -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="hidden" name="borrar_cookies" value="1">
    <input type="submit" value="Borrar cookies">
</form>

</body>
</html>
