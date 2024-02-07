<?php
if (isset($_POST['borrar_cookies'])) {
    // Borrar la cookie estableciendo su expiración a un momento en el pasado
    setcookie("color", "", time() - 3600, "/");
    echo "Cookies borradas correctamente.";
    echo "<br><a href=\"index.php\">Ir a la otra página</a>";
} else {
    echo "No se ha enviado la solicitud para borrar las cookies.";
}
?>
