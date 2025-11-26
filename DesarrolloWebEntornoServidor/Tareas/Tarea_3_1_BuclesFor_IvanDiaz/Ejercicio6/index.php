<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>
<body>

    <?php

    for ($i = 0; $i < 7; $i++) {

        $fecha = strtotime("+$i day");

        $dia = date("l", $fecha);

        $formato = date("Y-m-d", $fecha);

        if ($dia == "Saturday" || $dia == "Sunday") {

            echo "$formato (Finde)\n";

        } else {

            echo "$formato\n";

        }

    }
?>

    
</body>
</html>