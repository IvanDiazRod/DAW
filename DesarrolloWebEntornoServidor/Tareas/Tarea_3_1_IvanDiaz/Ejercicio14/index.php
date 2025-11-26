<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio14</title>
</head>
<body>

    <?php
    
        $anio = 2035;

        if ($anio % 4 === 0 && $anio % 100 !== 0 || $anio % 400 === 0) {

            echo "El año $anio es bisiesto";

        } else {

            echo "El año $anio no es bisiesto";

        }
    
    ?>
    
</body>
</html>