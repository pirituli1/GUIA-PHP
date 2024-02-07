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
    <title>Lista de Alumnos</title>
</head>
<body>
<?php
// Establecer la conexión con la base de datos
$conexion = mysqli_connect("localhost", "root", "carlos3011", "Agenda");
// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Problemas en la conexión: " . mysqli_connect_error());
}

// Consulta para obtener los registros de la tabla alumnos con un límite de 2 registros por página
$registros = mysqli_query($conexion, "SELECT alu.id AS codigo, alu.nombre, alu.mail, alu.codigocurso, 
                                      cur.nombre_curso AS nombrecur
                                      FROM alumnos AS alu
                                      INNER JOIN cursos AS cur ON cur.codigo_curso = alu.codigocurso
                                      LIMIT $inicio, 2") or die("Problemas en el select:" . mysqli_error($conexion));

// Variable para contar la cantidad de registros impresos
$impresos = 0;

// Iterar sobre los registros obtenidos y mostrarlos en pantalla
while ($reg = mysqli_fetch_array($registros)) {
    $impresos++;
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['mail'] . "<br>";
    echo "Curso:" . $reg['nombrecur'] . "<br>";
    echo "<hr>";
}

// Cerrar la conexión con la base de datos
mysqli_close($conexion);

// Mostrar enlaces para navegar entre las páginas de resultados
if ($inicio == 0) {
    echo "anteriores ";
} else {
    $anterior = $inicio - 2;
    echo "<a href=\"index.php?pos=$anterior\">Anteriores </a>";
}

if ($impresos == 2) {
    $proximo = $inicio + 2;
    echo "<a href=\"index.php?pos=$proximo\">Siguientes</a>";
} else {
    echo "siguientes";
}
?>
</body>
</html>

