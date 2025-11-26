<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>

    <?php
    
    $aforo = 0;

    $capacidad = 10;

    while (true) {

        echo "Acción (entra/sale/cerrar): ";

        $accion = strtolower(trim(fgets(STDIN)));

        if ($accion === "cerrar") break;

        if ($accion === "entra") {

            if ($aforo < $capacidad) {

            $aforo++;

            echo "Aforo actual: $aforo\n";

            } else {

            echo "Aforo completo, no se puede entrar \n";

            }

        } elseif ($accion === "sale") {

            if ($aforo > 0) {

            $aforo--;

            echo "Aforo actual: $aforo\n";

            } else {

            echo "No hay nadie dentro, no se puede salir \n";

            }

        } else {

        echo "Acción no válida\n";

        }

    }

?>

    
</body>
</html>