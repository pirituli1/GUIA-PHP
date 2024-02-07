<?php
// Verificar si se proporcionó un valor para la posición inicial de los registros a mostrar
if (isset($_REQUEST['pos'])) {
    $inicio = $_REQUEST['pos'];
} else {
    $inicio = 0;
}
?>
<html>
<head>
    <title>Lista de Cursos</title>
</head>
<body>
<?php
// Establecer la conexión con la base de datos
$conexion = mysqli_connect("localhost", "root", "carlos3011", "agenda");
// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Problemas en la conexión: " . mysqli_connect_error());
}

// Definir la cantidad de registros por página
$registrosPorPagina = 3;

// Consulta para obtener los registros de la tabla cursos con un límite de 3 registros por página
$consulta = "SELECT * FROM cursos LIMIT $inicio, $registrosPorPagina";
$registros = mysqli_query($conexion, $consulta) or die("Problemas en el select: " . mysqli_error($conexion));

// Variable para contar la cantidad de registros impresos
$impresos = 0;

// Iterar sobre los registros obtenidos y mostrarlos en pantalla
while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
    echo "Código de Curso: " . $reg['codigo_curso'] . "<br>";
    echo "Nombre del Curso: " . $reg['nombre_curso'] . "<br>";
    echo "<hr>";
}

// Cerrar la conexión con la base de datos
mysqli_close($conexion);

// Mostrar enlaces para navegar entre las páginas de resultados
if ($inicio == 0) {
    echo "Anteriores ";
} else {
    $anterior = $inicio - $registrosPorPagina;
    echo "<a href=\"index.php?pos=$anterior\">Anteriores</a> ";
}

if ($impresos == $registrosPorPagina) {
    $proximo = $inicio + $registrosPorPagina;
    echo "<a href=\"index.php?pos=$proximo\">Siguientes</a>";
} else {
    echo "Siguientes";
}
?>
</body>
</html>
