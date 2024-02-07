<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumno</title>
</head>
<body>
    <h2>Registrar Alumno</h2>
    <form action="index2.php" method="post">
        <label for="nombre">Ingrese nombre:</label>
        <input type="text" name="nombre" required><br>
        
        <label for="mail">Ingrese mail:</label>
        <input type="text" name="mail" required><br>
        
        <label for="codigocurso">Seleccione el curso:</label>
        <select name="codigocurso" required>
            <?php
            $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

            // Verificar la conexión
            if ($conexion->connect_error) {
                die("Problemas en la conexión: " . $conexion->connect_error);
            }

            $registros = $conexion->query("SELECT codigo_curso, nombre_curso FROM cursos");

            while ($reg = $registros->fetch_assoc()) {
                echo "<option value=\"" . $reg['codigo_curso'] . "\">" . $reg['nombre_curso'] . "</option>";
            }

            // Cerrar la conexión
            $conexion->close();
            ?>
        </select>
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
