<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio17</title>
</head>
<body>

    <?php
    
        $edad = 18;

        if ($edad < 5) {

            echo "Gratis";

        } else if ($edad >= 5 && $edad <= 17) {

            echo "50%";

        } else if ($edad >= 18 && $edad <= 64) {

            echo "Precio normal";

        } else if ($edad >= 65) {

            echo "30%";

        }
    
    ?>
    
</body>
</html>