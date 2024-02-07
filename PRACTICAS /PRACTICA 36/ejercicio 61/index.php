<html>
<head>
    <title>Problema</title>
</head>
<body>
<?php
require_once("index2.php");

// Llamando a la función cabeceraPagina desde el archivo externo
cabeceraPagina("Titulo principal de la página");

echo "<br><br><center>Este es el cuerpo de la página<br><br></center>";

// Llamando a la función piePagina desde el archivo externo
piePagina("Pie de la página");
?>
</body>
</html>
