<?php
// Crear una nueva imagen con fondo blanco
$ancho = 200; // Ancho de la imagen
$alto = 50; // Alto de la imagen
$imagen = imageCreateTrueColor($ancho, $alto);

// Definir colores
$fondo = imageColorAllocate($imagen, 220, 220, 220); // Color de fondo del botón
$rectangulo = imageColorAllocate($imagen, 0, 0, 255); // Color del rectángulo (azul)
$texto = imageColorAllocate($imagen, 0, 0, 0); // Color del texto

// Rellenar el fondo del botón
imageFilledRectangle($imagen, 0, 0, $ancho - 1, $alto - 1, $fondo);

// Definir la posición y tamaño aleatorios del rectángulo azul
$x1 = rand(0, $ancho * 0.6); // Posición X inicial del rectángulo
$y1 = rand(0, $alto * 0.6); // Posición Y inicial del rectángulo
$x2 = rand($ancho * 0.4, $ancho - 1); // Posición X final del rectángulo
$y2 = rand($alto * 0.4, $alto - 1); // Posición Y final del rectángulo

// Rellenar el rectángulo azul
imageFilledRectangle($imagen, $x1, $y1, $x2, $y2, $rectangulo);

// Escribir el texto del botón en el centro del área del botón
$textoBoton = "Boton";
$fuente = 5; // Tamaño de la fuente
$anchoTexto = imageFontWidth($fuente) * strlen($textoBoton); // Ancho del texto
$altoTexto = imageFontHeight($fuente); // Alto del texto
$xTexto = ($ancho - $anchoTexto) / 2; // Posición X del texto (centrado horizontalmente)
$yTexto = ($alto - $altoTexto) / 2; // Posición Y del texto (centrado verticalmente)
imageString($imagen, $fuente, $xTexto, $yTexto, $textoBoton, $texto);

// Mostrar la imagen
Header("Content-type: image/png");
ImagePNG($imagen);

// Liberar la memoria utilizada por la imagen
ImageDestroy($imagen);
?>
