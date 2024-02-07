<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 19</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Ingresa porfavor tu contraseña: <input type="password" name="contraseña"> 
    <input type="submit" name="submit">
    </form>
<?php
// session_destroy();
session_start();
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 2;
}


$contraseña = "12345";
$contador = 2;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Guardamos el intento de contraseña del usuario 
    $intentoContraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : null;
    // creamos una estructura de control 
    if ($_SESSION['contador'] > 0 && $intentoContraseña != null)
    {
       // Revisa si la contraseña es correcta 
        if ($intentoContraseña == $contraseña){
            echo "Felicidades, logro entrar";
        }
        else
        {
            echo "vuelva a intentarlo. Intentos restantes " . $_SESSION['contador'];
            // 
            $_SESSION['contador']--;
        }
    }
}
// revisa si la cantidad de intentos terminaron
if ($_SESSION['contador'] === 0){
    echo "Se le acabaron los intentos";
}
?>
 <!-- agregamos un botón de reset  -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"><input type="submit" name="resetIntentos" value="Reset intentos"> </form>

<?php
// revisamos si el reset request fue recibido y si es así resetea los intentos 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["resetIntentos"])) {
    session_destroy();
}
?> 
</body>
</html>