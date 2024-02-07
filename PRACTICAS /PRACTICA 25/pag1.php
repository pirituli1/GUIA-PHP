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
    <form action="registrar_alumno.php" method="post">
        Ingrese nombre: <input type="text" name="nombre"><br>
        Ingrese mail: <input type="text" name="mail"><br>
        Seleccione el curso:
        <select name="codigocurso">
            <?php
            $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

            // Verificar la conexión
            if ($conexion->connect_error) {
                die("Problemas en la conexión: " . $conexion->connect_error);
            }

            $registros = $conexion->query("SELECT codigo, nombre_curso FROM cursos");

            while ($reg = $registros->fetch_assoc()) {
                echo "<option value=\"" . $reg['codigo'] . "\">" . $reg['nombre_curso'] . "</option>";
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
