<!DOCTYPE html>
<html>
<head>
    <title>Validar Fecha</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="dia">Día:</label>
        <select name="dia" id="dia">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>
        <label for="mes">Mes:</label>
        <select name="mes" id="mes">
            <?php
            $meses = array(
                1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril",
                5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto",
                9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
            );
            foreach ($meses as $numero => $nombre) {
                echo "<option value=\"$numero\">$nombre</option>";
            }
            ?>
        </select>
        <label for="anio">Año:</label>
        <select name="anio" id="anio">
            <?php
            $anioActual = date("Y");
            for ($i = $anioActual; $i >= $anioActual - 100; $i--) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>
        <input type="submit" value="Validar Fecha">
    </form>
</body>
</html>