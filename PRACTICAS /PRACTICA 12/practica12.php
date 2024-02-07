<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 12</title>
</head>
<body>
    <form action="practica12a.php" method="post">
        Ingresa tu nombre: <input type="text" name="nombre" placeholder="Escribe tu nombre.." maxlength="50"><br>
        ¿Qué deportes practicas? 
        <br>
        <label>
            <input type="checkbox" name="deporte[]" value="futbol">
            Practico <b>futbol</b>
        </label>
        <br>
        <label>
            <input type="checkbox" name="deporte[]" value="basket">
            Practico <b>basket</b>
        </label>
        <br>
        <label>
            <input type=checkbox name="deporte[]" value="tenis">
            Practico <b>tenis</b>
        </label>
        <br>
        <label>
            <input type="checkbox" name="deporte[]" value="voley">
            Practico <b>voley</b>
        </label>

        <input type="submit" name="submitDeportes"value="Enviar">
    </form>
</body>
</html>