<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <?php
    if (isset($_GET['error'])) {
        echo "<p>Error: Clave incorrecta.</p>";
    }
    ?>
    <form action="index2.php" method="post">
        Ingrese su clave: <input type="password" name="clave">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
