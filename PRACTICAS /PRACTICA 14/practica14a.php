<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $contrato = $_POST['contrato'];
        echo $contrato;
    }
    else
    {
        header("location:index.php");
    }
?>