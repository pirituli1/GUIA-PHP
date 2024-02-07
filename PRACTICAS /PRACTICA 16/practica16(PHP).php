<?php
    $archivotxt = "datos.txt"; // referencia al archivo 
   $pedido = "";
   if ($_SERVER['REQUEST_METHOD'] == "POST"){
        // Datos usuario
        $nameUsuario = $_POST['nombrePedido'];
        $direccionUsuario = $_POST['adresPedido'];
        // Quiere queso? Cuanto.
        $queso = isset($_POST['jamonQ']) ? $_POST['jamonQ'] : null;
        $cantidadJamQ =isset($_POST['cantidadJamQ']) ? $_POST['cantidadJamQ'] : null;;
      
        // Quiere napolitano? Cuanto.
        $napolitano = isset($_POST['napolTrue']) ? $_POST['napolTrue'] : null;
        $cantidadNap = isset($_POST['cantidadNap']) ? $_POST['cantidadNap'] : null;
        //  Quiere mozarella? Caunto.
        $mozarella = isset($_POST['mozarella']) ? $_POST['mozarella'] : null;;
        $cantidadMoz = isset($_POST['cantidadMoz']) ? $_POST['cantidadMoz'] : null;
    }
    else 
    {
        header("location:index.php");
        exit();
    }
// Muestra en HTML
    $pedido = fopen($archivotxt,"a"); // abrimos el archivo
    /*if (file_exists($archivotxt)){
        file_put_contents($archivotxt,"");
    } */ 

    // echo "Estimado " . $nameUsuario . " su pedido fue hecho con éxito:<br>";
    fwrite($pedido,"Estimado " . $nameUsuario . " su pedido fue hecho con éxito:<br>");
    
    // echo "Su pedido fue: <br>";
    fwrite($pedido,"Su pedido fue: <br>");
    // Hay pedido de queso?
    if ($queso != null){
        // echo "Pizza de Queso. <b>Cantidad: </b>" . $cantidadJamQ . "........<br>";
        fwrite($pedido,"Pizza de Queso. Cantidad: $cantidadJamQ........<br>");
    }
    else
    {
        echo "";
    }
    // Hay pedido de napolitano?
    if ($napolitano != null) {
        // echo "Pizza de Napolitano <b>Cantidad: </b>" . $cantidadNap . "........<br>";
        fwrite($pedido,"Pizza de Napolitano. Cantidad: $cantidadNap.......<br>");
    }
    else
    {
        echo "";
    }

    if ($mozarella != null){
        // echo "Pizza de Mozarella <b>Cantidad: </b>" . $cantidadMoz . "........<br>";
        fwrite($pedido,"Pizza de Mozarella Cantidad: $cantidadMoz........<br>");
    }
    else {
        echo "";
    }

    echo "<br>Su pedido será mandado a $direccionUsuario <br>";
    fwrite($pedido,"Su pedido sera mandado a $direccionUsuario <br> . <br>");
    fclose($pedido);

    echo file_get_contents($archivotxt);