<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de modena</title>
</head>
<body>

    <?php

        /*echo potencia(2);
        function potencia($x, $base = 2) {

            return $x ** $base;

        }*/

            echo parseDolar(2);

            function parseDolar($euro, $factorDolar = 1.15) {

                return "<p>$euro euros son " . ($euro * $factorDolar) . " dolares</p>";

            }
    
    ?>
    
</body>
</html>