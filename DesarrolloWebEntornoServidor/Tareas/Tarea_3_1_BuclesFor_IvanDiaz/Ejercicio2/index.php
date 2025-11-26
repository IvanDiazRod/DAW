<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>

    <?php

        echo "Introduce un número del 1 al 10";

        $dato = trim(fgets(STDIN));

        for ($i = 1; $i <= $dato; $i++) {

            echo "Campo: $i \n";

        }
    
    ?>

</body>
</html>