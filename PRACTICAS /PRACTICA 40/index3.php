<?php
header("Content-type: image/jpeg");

$puntos = $_REQUEST['puntos']; // Obtener el número de puntos

// Crear una imagen de 200x200 píxeles
$imagen = imageCreate(200, 200);

// Asignar colores
$color_fondo = imageColorAllocate($imagen, 255, 255, 255); // Blanco
$color_circulo = imageColorAllocate($imagen, 255, 0, 0); // Rojo

// Dibujar círculos según el puntaje
for ($i = 0; $i < $puntos; $i++) {
    $x = rand(20, 180); // Coordenada x aleatoria dentro del rango
    $y = rand(20, 180); // Coordenada y aleatoria dentro del rango
    $radio = 10; // Radio del círculo
    // Dibujar un círculo relleno en la imagen
    imageFilledEllipse($imagen, $x, $y, $radio, $radio, $color_circulo);
}

// Mostrar la imagen
imageJPEG($imagen);

// Liberar recursos
imageDestroy($imagen);
?>
