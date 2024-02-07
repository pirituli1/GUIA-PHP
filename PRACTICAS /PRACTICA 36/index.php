<?php
session_start();
?>

<html>
<head>
    <title>Formulario de Ingreso</title>
</head>
<body>
    <!-- Formulario que se manda a la segunda página para su revisón -->
    <form action="index2.php" method="post">
        Ingrese su correo electrónico:
        <input type="text" name="mail">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
