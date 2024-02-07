<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 10</title>
</head>
<body>
    <h1>Practica 10</h1>
    <h2>Formulario</h2>
    <br>
    <form action="practica11a.php" method="post">
    Porfavor ingresa tu nombre: <input type="text" name ="nombre" placeholder="escribe tu nombre" maxlength="50"> <br>
    Selecciona tu nivel de estudios: 
        <input type="radio" name="replyEstudios" value=1>
            No tiene estudios
        <input type="radio" name="replyEstudios" value=2>   
            Estudios primarios 
        <input type="radio" name="replyEstudios" value=3>
            Estudios secundarios
    <br>
    <input type="submit" name="submit" value="Enviar">

    </form>
</body>
</html>