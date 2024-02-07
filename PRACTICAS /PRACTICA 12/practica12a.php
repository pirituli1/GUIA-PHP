<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "Nombre no escrito";
        $deportes = isset($_POST['deporte']) ? $_POST['deporte'] : null;
        
        if ($deportes !== null)
        {
            echo "Hola $nombre, los deportes que practicas son: " . implode(", ", $deportes);
        }
        else 
        {
            echo "Hola $nombre, no practicas ningun deporte";
        }
    }
?>