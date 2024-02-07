<?php 
// Inicia una sesión con el metodo REQUEST
session_start(); 
$_SESSION['usuario']=$_REQUEST['campousuario']; 
$_SESSION['clave']=$_REQUEST['campoclave']; 
?> 
<html> 
<head> 
<title>Problema</title> 
</head> 
<body> 
Se almacenaron dos variables de sesión.<br><br> 
<!-- Redireccióna a la tercera página  -->
<a href="index3.php">Ir a la tercer página donde se recuperarán 
las variables de sesión</a> 
</body> 
</html>