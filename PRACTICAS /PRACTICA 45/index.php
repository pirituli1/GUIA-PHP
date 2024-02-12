<?php
// Función para obtener el carácter ASCII correspondiente a un entero
function intToChar($numero) {
    return chr($numero);
}

// Imprimir la tabla de caracteres ASCII
echo "<h2>Tabla de caracteres ASCII</h2>";
echo "<table border='1'>";
echo "<tr><th>Decimal</th><th>Carácter</th></tr>";

// Bucle para imprimir una tabla que muestra los valores decimales y los caracteres correspondientes para los códigos ASCII del 0 al 127
for ($i = 0; $i < 128; $i++) {
    echo "<tr>";
    echo "<td>" . sprintf("%d", $i) . "</td>";
    echo "<td>" . intToChar($i) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>  
