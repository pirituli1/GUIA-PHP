<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Alumno</title>
</head>
<body>
    <h2>Alta de Alumno</h2>
    <form action="index2.php" method="post">
        <!-- Campos para ingresar datos del alumno -->
        <label for="nombre">Ingrese nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="mail">Ingrese mail:</label>
        <input type="text" name="mail" required><br>

        <!-- Controles de tipo radio para seleccionar el curso -->
        <label>Seleccione el curso:</label><br>
        <?php
        // Incluir el archivo de conexión
        include("conexion.php");

        // Consultar cursos disponibles
        $registros = $conexion->query("SELECT codigo_curso, nombre_curso FROM cursos");

        // Mostrar controles de radio para cada curso // Hace uso del escape de caracteres por eso la \ y las comillas 
        while ($reg = $registros->fetch_assoc()) {
            echo "<input type=\"radio\" name=\"codigocurso\" value=\"" . $reg['codigo_curso'] . "\">" . $reg['nombre_curso'] . "<br>"; 
        }

        // Cerrar la conexión
        $conexion->close();
        ?>
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
