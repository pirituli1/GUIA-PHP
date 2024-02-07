<html>
<head>
    <title>pagina 2-practica 33</title>
</head>
<body>
<?php
// Directorio donde se guardarán los archivos subidos
$directorio_subida = "C:\/xampp/htdocs/img/";

// Contador para llevar el control del número de archivos subidos
$num_archivos_subidos = 0;

// Verificar si se han enviado archivos
if(isset($_FILES['archivos'])) {
    // Recorrer cada archivo enviado
    foreach($_FILES['archivos']['tmp_name'] as $key => $tmp_name) {
        // Obtener el nombre y tipo del archivo
        $nombre_archivo = $_FILES['archivos']['name'][$key];
        $tipo_archivo = $_FILES['archivos']['type'][$key];

        // Verificar si el archivo se subió correctamente
        if($_FILES['archivos']['error'][$key] === UPLOAD_ERR_OK) {
            // Construir la ruta de destino del archivo
            $ruta_destino = $directorio_subida . $nombre_archivo;

            // Mover el archivo temporal al directorio de destino
            if(move_uploaded_file($tmp_name, $ruta_destino)) {
                echo "Archivo subido con éxito: $nombre_archivo<br>";
                $num_archivos_subidos++;
            } else {
                echo "Error al mover el archivo: $nombre_archivo<br>";
            }
        } else {
            echo "Error al subir el archivo: $nombre_archivo<br>";
        }
    }
}
echo "Total de archivos subidos: $num_archivos_subidos";
?>
</body>
</html>