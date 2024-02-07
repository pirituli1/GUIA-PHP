<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Curso - Paso 2</title>
</head>
<body>
    <?php
    $conexion = new mysqli("localhost", "root", "carlos3011", "agenda");

    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }

    $mail = $_POST['mail'];
    $query = "SELECT * FROM alumnos WHERE mail = ?";
    
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("s", $mail);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($regAlumno = $result->fetch_assoc()) {
    ?>
        <form action="index3.php" method="post">
            <input type="hidden" name="mailViejo" value="<?php echo $regAlumno['mail']; ?>">
            <label for="codigoCurso">Seleccione nuevo curso:</label>
            <select name="codigoCurso">
                <?php
                $queryCursos = "SELECT * FROM cursos";
                $resultCursos = $conexion->query($queryCursos);

                while ($regCurso = $resultCursos->fetch_assoc()) {
                    $selected = ($regAlumno['codigoCurso'] == $regCurso['codigo_curso']) ? "selected" : "";
                    echo "<option value=\"{$regCurso['codigo_curso']}\" $selected>{$regCurso['nombre_curso']}</option>";
                }
                ?>
            </select>
            <br>
            <input type="submit" value="Modificar">
        </form>
    <?php
    } else {
        echo "No existe alumno con dicho mail";
    }

    $stmt->close();
    $conexion->close();
    ?>
</body>
</html>
