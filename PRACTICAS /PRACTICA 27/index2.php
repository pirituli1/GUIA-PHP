<?php
// Verificar si se ha enviado un código de alumno
if (isset($_POST['codigo_alumno'])) {
    // Datos de conexión
    $host = "localhost";
    $user = "root";
    $password = "carlos3011";
    $database = "agenda";

    // Conexión a la base de datos
    $conexion = new mysqli($host, $user, $password, $database);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }

    // Obtener el código del alumno enviado desde el formulario
    $codigo_alumno = $_POST['codigo_alumno'];

    // Consulta para obtener los datos del alumno y el nombre del curso mediante INNER JOIN
    $consulta = "SELECT alu.id AS codigo, nombre, mail, nombre_curso
                 FROM alumnos AS alu
                 INNER JOIN cursos AS cur ON cur.codigo_curso = alu.codigocurso
                 WHERE alu.id = $codigo_alumno";

    // Ejecutar la consulta
    $resultado = $conexion->query($consulta);

    // Verificar si hay resultados
    if ($resultado->num_rows > 0) {
        // Mostrar los datos del alumno y el curso
        $alumno = $resultado->fetch_assoc();
        echo "<h3>Datos del Alumno</h3>";
        echo "Código: " . $alumno['codigo'] . "<br>";
        echo "Nombre: " . $alumno['nombre'] . "<br>";
        echo "Mail: " . $alumno['mail'] . "<br>";
        echo "Curso: " . $alumno['nombre_curso'] . "<br>";
    } else {
        echo "<p>No existe un alumno con el código $codigo_alumno.</p>";
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    // Si no se envió un código de alumno, mostrar un mensaje
    echo "<p>Por favor, ingrese un código de alumno.</p>";
}
?>
