<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 22</title>
</head>
<body>
    <h2>Buscador de alumno por nombre</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Nombre del alumno <input type="text" name="nombre">
        <input type ="submit">
    </form>

<?php 
    $dp = new mysqli("localhost","root","carlos3011","agenda");

    // verificar conexion
    if ($dp ->connect_error){
        die("La conexion de datos falló " . $dp->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];

        // evitar las inyecciones utilizando declaraciones preparadas 
        $sql = "SELECT * FROM alumnos WHERE nombre=?";
        $stmt = $dp ->prepare($sql);

        // verificar la preparacion de la consulta 
        if (!$stmt) {
            die ("Error en la consulta ". $dp ->error);
        }

        // Vincula parametro 
        $stmt->bind_param("s", $nombre);
        // Ejecuta la consulta
        $stmt->execute();
        // Obtiene resultados
        $result = $stmt->get_result();

        // mostrar los resultados 
        if ($result->num_rows > 0) {
            echo "<h3>Datos de Alumnos con el Nombre '$nombre':</h3>";
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>{$row['nombre']} - Mail: {$row['mail']} - Curso: {$row['codigocurso']}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No se encontraron alumnos con el nombre '$nombre'.</p>";
        }

        // cerrar conexion 
        $stmt->close();
    }

    $dp->close();
?>
</body>
</html>
