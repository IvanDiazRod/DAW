<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio11</title>
</head>
<body>

    <?php
    
        $celsius = 30;

        if ($celsius >= 30) {

            echo "Calor";

        } else if ($celsius >= 15 && $celsius <= 29) {

            echo "Agradable";

        } else if ($celsius < 15) {

            echo "Frío";

        }
    
    ?>
    
</body>
</html>