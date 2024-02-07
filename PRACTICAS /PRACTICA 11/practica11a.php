<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // definicion de variables obtenidas del html
        $nombre = $_POST['nombre'];
        $nivelEstudios= isset($_POST['replyEstudios']) ? $_POST['replyEstudios'] : null;

        switch ($nivelEstudios) {
            case 1:
                echo "$nombre no tiene estudios";
                break;
            case 2:
                echo "$nombre tiene estudios primarios";
                break;
            case 3:
                echo "$nombre tiene estudios secundarios";
                break;
            default:
                echo "Ocurrio un error con los niveles de estudios";
                break;
            }
    }
    else 
    {
        // redireccionar si se entra a la fuerza. 
        header("location:index.php");
        exit();
    }