<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Donación</title>
</head>
<body>
    <h2>Formulario de Donación</h2>
    <form action="index2.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="importe">Importe a Donar:</label>
        <input type="number" id="importe" name="importe" min="0" step="0.01" required><br><br>
        <button type="submit">Donar</button>
    </form>
</body>
</html>
