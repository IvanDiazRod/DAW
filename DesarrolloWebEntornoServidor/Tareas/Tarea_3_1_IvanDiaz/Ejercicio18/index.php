<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio18</title>
</head>
<body>

    <?php
    
        $hora = 6;

        if ($hora >= 6 && $hora <= 11) {

            echo "Mañana";

        } else if ($hora >= 12 && $hora <= 18) {

            echo "Tarde";

        } else if ($hora >= 19 && $hora <= 23 || $hora >= 0 && $hora <= 5) {

            echo "Noche";

        }
    
    ?>
    
</body>
</html>