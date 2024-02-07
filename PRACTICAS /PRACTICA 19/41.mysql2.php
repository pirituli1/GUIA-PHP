<!DOCTYPE html>
<html>
<head>
    <title>MySQL 02 - Consulta BD con tabla (Agenda)</title>
</head>
<body>
    <h1>MySQL 02 - Consulta BD con tabla (Agenda)</h1>
    <?php
    // Conexion a base de datos
    $dp = new mysqli("localhost", "root", "carlos3011", "agenda");

    // Verificar la conexión
    if ($dp->connect_error) {
        die("La conexión a la base de datos falló: " . $dp->connect_error);
    }
    // Guarda una consulta SQL en una variable 
    $sql = "SELECT * FROM direcciones";
    // Hace la consulta a la base de datos guardado en $dp, y usa la función query() para hacer una consulta la cual guardamos en la variable $sql 
    $resultado = $dp->query($sql);

    // Verificar el resultado de la consulta
    if (!$resultado) {
        die("Error en la consulta: " . $dp->error);
    }

    $campos = $resultado->field_count;
    $filas = $resultado->num_rows;

    echo "<p>Cantidad de filas: $filas</p>\n";
    echo "<table border='1' cellspacing='0'>\n";
    echo "<tr>";

    // Obtener nombres de los campos
    while ($info_campo = $resultado->fetch_field()) {
        echo "<th>{$info_campo->name}</th>";
    }

    echo "</tr>\n";

    // Mostrar los datos
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value&nbsp;</td>";
        }
        echo "</tr>\n";
    }

    echo "</table>\n";

    // Cerrar la conexión
    $dp->close();
    ?>
</body>
</html>
