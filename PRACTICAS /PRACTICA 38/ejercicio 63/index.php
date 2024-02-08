<?php
// Se asigna un ancho y un alto a la altura de la imagen  
$ancho=100; 
$alto=30; 
// la función imageCreateTrueColor se usa para crear una imagén en memoria. Esta contiene hasta 16M de colores. 
$imagen=imageCreateTrueColor($ancho,$alto); 
// Define un color para ser usado en la imagen (amarillo)
$amarillo=ImageColorAllocate($imagen,255,255,0); 
// Se rellena toda la imagen de amarillo
ImageFill($imagen,0,0,$amarillo); 
// Se asigna un color rojo a la imagen 
$rojo=ImageColorAllocate($imagen,255,0,0); 
// Genera un valor aleatorio
$valoraleatorio=rand(100000,999999); 
// Le asigna ese valor aleatorio a la imagen
ImageString($imagen,5,25,5,$valoraleatorio,$rojo); 
// Crea un ciclo para dibujar líneas en la imagen 
for($c=0;$c<=5;$c++) 
{ 
 $x1=rand(0,$ancho); 
 $y1=rand(0,$alto); 
 $x2=rand(0,$ancho); 
 $y2=rand(0,$alto); 
 ImageLine($imagen,$x1,$y1,$x2,$y2,$rojo); 
} 
// Se establece el tipo de contenido de la imagen 
Header ("Content-type: image/jpeg"); 
// Se genera la imagen y se manda
ImageJPEG ($imagen); 
// Se libera la memoria usada por creación de img 
ImageDestroy($imagen); 
?> 