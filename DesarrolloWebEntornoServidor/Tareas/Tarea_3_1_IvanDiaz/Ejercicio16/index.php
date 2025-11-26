<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio16</title>
</head>
<body>

    <?php
    
        $imc = 18.5;

        if ($imc < 18.5) {

            echo "Bajo peso";

        } else if ($imc >= 18.5 && $imc <= 24.9) {

            echo "Normal";

        } else if ($imc >= 25 && $imc <= 29.9) {

            echo "Sobrepeso";

        } else if ($imc >= 30) {

            echo "Obesidad";

        }
    
    ?>
    
</body>
</html>