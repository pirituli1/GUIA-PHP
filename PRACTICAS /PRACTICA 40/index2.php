<html>
<head>
<title>Puntaje del Sitio</title>
</head>
<body>
<?php
echo "La dirección: $_REQUEST[direccion] tiene puntaje $_REQUEST[puntos]";
?>
<br>
<img src="index3.php?puntos=<?php echo $_REQUEST['puntos']; ?>">
</body>
</html>
