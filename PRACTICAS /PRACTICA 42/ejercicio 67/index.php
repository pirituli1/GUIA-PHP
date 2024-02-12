<?php
$conexion = mysqli_connect("localhost", "root", "tu_contraseña", "tu_base_de_datos");
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $codigocurso = $_POST["codigocurso"];
    $dia = $_POST["dia"];
    $mes = $_POST["mes"];
    $anio = $_POST["anio"];

    // Validar la fecha
    if (!checkdate($mes, $dia, $anio)) {
        echo "La fecha de nacimiento ingresada no es válida.";
    } else {
        $fechanac = "$anio-$mes-$dia";
        
        $consulta = "INSERT INTO alumnos (nombre, mail, codigocurso, fechanac) VALUES ('$nombre', '$mail', $codigocurso, '$fechanac')";
        if (mysqli_query($conexion, $consulta)) {
            echo "El alumno fue registrado correctamente.";
        } else {
            echo "Error al registrar el alumno: " . mysqli_error($conexion);
        }
    }
}

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
</head>
<body>
    <h1>Registro de Alumnos</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Nombre: <input type="text" name="nombre" required><br><br>
        Correo electrónico: <input type="email" name="mail" required><br><br>
        Curso:
        <select name="codigocurso" required>
            <option value="1">Curso 1</option>
            <option value="2">Curso 2</option>
            <option value="3">Curso 3</option>
        </select><br><br>
        Fecha de nacimiento:<br>
        Día:
        <select name="dia" required>
            <?php for ($i = 1; $i <= 31; $i++) {
                echo "<option value=\"$i\">$i</option>";
            } ?>
        </select>
        Mes:
        <select name="mes" required>
            <?php for ($i = 1; $i <= 12; $i++) {
                echo "<option value=\"$i\">$i</option>";
            } ?>
        </select>
        Año:
        <select name="anio" required>
            <?php for ($i = 1900; $i <= date("Y"); $i++) {
                echo "<option value=\"$i\">$i</option>";
            } ?>
        </select><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
