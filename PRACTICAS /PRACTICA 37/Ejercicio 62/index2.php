<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $direccion = $_POST["direccion"];
    
    // Validar la URL ingresada
    if (filter_var($direccion, FILTER_VALIDATE_URL)) {
        // Escapar la dirección para evitar ataques de inyección de código
        $direccion = htmlspecialchars($direccion);
        
        // Redirigir a la dirección proporcionada
        header("Location: $direccion");
        exit; // Asegura que se detenga la ejecución del script después de la redirección
    } else {
        // Verificar si se proporcionó un prefijo de protocolo
        if (!preg_match("~^(?:f|ht)tps?://~i", $direccion)) {
            // Si no se proporciona, agregar el prefijo http://
            $direccion = "http://$direccion";
        }
        
        // Redirigir a la dirección proporcionada
        header("Location: $direccion");
        exit; // Asegura que se detenga la ejecución del script después de la redirección
    }
}
?>
