<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio21</title>
</head>
<body>

    <?php
    
        $n = 4;

        if ($n < 0 && $n % 2 === 0) {

            echo "El número $n es negativo y par";

        } else if ($n < 0 && $n % 2 != 0) {

            echo "El número $n es negativo e impar";

        } else if ($n > 0 && $n % 2 === 0) {

            echo "El número $n es positivo y par";

        } else if ($n > 0 && $n % 2 != 0) {

            echo "El número $n es positivo e impar";

        } else if ($n === 0) {

            echo "Cero";

        }
    
    ?>
    
</body>
</html>