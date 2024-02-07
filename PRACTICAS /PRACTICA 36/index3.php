<?php
session_start();

// Verificar si la variable de sesión 'nombre' está definida
if (isset($_SESSION['nombre'])) {
    echo "¡Bienvenido, " . $_SESSION['nombre'] . "!";
} else {
    echo "No puede visitar esta página. Por favor, ingrese su correo electrónico primero.";
}

// Eliminar la variable de sesión para evitar que el usuario vuelva atrás y acceda sin correo
unset($_SESSION['nombre']);
?>
