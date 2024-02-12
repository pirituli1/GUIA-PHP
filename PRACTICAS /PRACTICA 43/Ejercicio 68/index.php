<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$entero=255;
printf("Valor entero en formato decimal %d <br>",$entero); // Decimal
printf("Valor entero en formato hexadecimal con letras minúsculas %x<br>", $entero); // Hexadecimal minúsculo
printf("Valor entero en formato hexadecimal con letras mayúsculas %X<br>", $entero); // Hexadecimal mayúsculo
printf("Valor entero en formato binario %b<br>", $entero); // Binario
printf("Valor entero en formato octal %o<br>", $entero); // Octal
$letra=65;
printf("Valor entero como caracter ascii %c<br>", $letra); // Carácter ASCII
echo "<br>";
$real=10.776;
printf("Impresion de un valor de tipo double %f <br>",$real); // Double
printf("Impresion de un valor de tipo double indicando la cantidad de decimales a imprimir %0.2f <br>",$real); // Double con decimales limitados a dos
?>
<br>
<A href="index2.php">Algunas utilidades de estas conversiones</A>
</body>
</html>
