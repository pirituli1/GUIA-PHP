<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Alumno - Paso 2</title>
</head>
<body>
    <?php
    $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }

    $codigo = $_POST['codigo'];
    $query = "SELECT * FROM alumnos WHERE id = ?";

    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $codigo);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($regAlumno = $result->fetch_assoc()) {
    ?>
        <form action="index3.php" method="post">
            <input type="hidden" name="codigo" value="<?php echo $regAlumno['id']; ?>">
            <label for="mail">Nuevo mail:</label>
            <input type="text" name="mail" value="<?php echo $regAlumno['mail']; ?>" required><br>
            <label for="nombre">Nuevo nombre:</label>
            <input type="text" name="nombre" value="<?php echo $regAlumno['nombre']; ?>" required><br>
            <label for="codigoCurso">Nuevo curso:</label>
            <select name="codigoCurso">
                <?php
                $queryCursos = "SELECT * FROM cursos";
                $resultCursos = $conexion->query($queryCursos);

                while ($regCurso = $resultCursos->fetch_assoc()) {
                    $selected = ($regAlumno['codigocurso'] == $regCurso['codigo_curso']) ? "selected" : "";
                    echo "<option value=\"{$regCurso['codigo_curso']}\" $selected>{$regCurso['nombre_curso']}</option>";
                }
                ?>
            </select><br>
            <input type="submit" value="Modificar">
        </form>
    <?php
    } else {
        echo "No existe alumno con dicho código";
    }

    $stmt->close();
    $conexion->close();
    ?>
</body>
</html>
