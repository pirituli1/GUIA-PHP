<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 17</title>
</head>
<body>
    <h1>Revision de pedidos</h1>
    <i>Programa destinado para revisar los datos datos.txt</i><br>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Para revisar los datos pica aquí <input type=submit name="submit" value="Revisar"> <br>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"]== "POST")
{
    $archivotxt="datos.txt";
    echo file_get_contents($archivotxt);
}
?>
</body>
</html>