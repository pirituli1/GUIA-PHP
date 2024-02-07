<?php
if (isset($_COOKIE['color'])) {
    $backgroundColor = $_COOKIE['color'];
} else {
    $backgroundColor = "white"; // Color por defecto si no hay cookie
}
?>
<html> 
<head> 
<title>Problema</title> 
</head> 
<body <?php echo "style=\"background-color: $backgroundColor;\"" ?>> 
<form action="index2.php" method="post"> 
Seleccione de qué color desea que sea la página de ahora en adelante:<br> 
<input type="radio" value="rojo" name="radio">Rojo<br> 
<input type="radio" value="verde" name="radio">Verde<br> 
<input type="radio" value="azul" name="radio">Azul<br> 
<input type="submit" value="Crear cookie"> 
</form> 

<!-- Agregar formulario para borrar cookies -->
<form action="index3.php" method="post">
    <input type="hidden" name="borrar_cookies" value="1">
    <input type="submit" value="Borrar cookies">
</form>

</body> 
</html> 
