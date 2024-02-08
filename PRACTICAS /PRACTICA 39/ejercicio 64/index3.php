<?php
session_start();
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
if (isset($_SESSION['numeroaleatorio']) && $_SESSION['numeroaleatorio'] == $_REQUEST['numero']) {
    echo "Ingresó el valor correcto";
} else {
    echo "Incorrecto";
}
?>
</body>
</html>
