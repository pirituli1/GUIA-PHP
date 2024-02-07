<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 16</title>
</head>
<body>
    <h2>Bienvenido a la pizzeria</h2> <h1 color="red">"Pablo la pizza feliz"</h1>
    <br>
    <i>Porfavor rellene lo siguiente:</i> <br>
    <form action="index2.php" method="post">
    <label>
        <b>Nombre: </b> <input type="text" name="nombrePedido" placeholder="Escriba su nombre.." maxlength="40"> <br>
        <b>Dirección: </b> <input type="text" name="adresPedido" placeholder="Escriba su dirección.." maxlength="100"> <br> <br>

        <b>Jamon y queso </b> <input type="checkbox" name="jamonQ" value="queso"> <br>
        <b>Cantidad: </b> <input type="text" name="cantidadJamQ" placeholder="Escribe la cantidad que deseas.." maxlength="2"> <br><br>

        <b>Napolitana </b> <input type="checkbox" name="napolTrue" value="napolitano"> <br>
        <b>Cantidad: </b> <input type="text" name="cantidadNap" placeholder="Escribe la cantidad que deseas.." maxlength="2"> <br><br>

        <b>Mozarella</b> <input type="checkbox" name="mozarella" value="mozarella"> <br>
        <b>Cantidad</b> <input type="text" name="cantidadMoz" placeholder="Escribe la cantidad que deseas.." maxlength="2"> <br> 
        
        <input type="submit" name="submit">
    </label>
    </form>
</body>
</html>