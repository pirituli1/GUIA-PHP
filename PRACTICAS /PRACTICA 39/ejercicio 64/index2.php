<?php
$ancho = 100;
$alto = 30;
$imagen = imageCreateTrueColor($ancho, $alto); // Usar imageCreateTrueColor para mejor calidad
$amarillo = imageColorAllocate($imagen, 255, 255, 0);
imageFill($imagen, 0, 0, $amarillo);
$rojo = imageColorAllocate($imagen, 255, 0, 0);
$valoraleatorio = rand(100000, 999999);
session_start();
$_SESSION['numeroaleatorio'] = $valoraleatorio;
imageString($imagen, 5, 25, 5, $valoraleatorio, $rojo);
for ($c = 0; $c <= 5; $c++) {
    $x1 = rand(0, $ancho);
    $y1 = rand(0, $alto);
    $x2 = rand(0, $ancho);
    $y2 = rand(0, $alto);
    imageLine($imagen, $x1, $y1, $x2, $y2, $rojo);
}
header("Content-type: image/jpeg");
imageJPEG($imagen);
imageDestroy($imagen);
?>
