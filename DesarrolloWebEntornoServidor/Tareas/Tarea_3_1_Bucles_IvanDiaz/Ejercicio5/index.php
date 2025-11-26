<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>

    <?php
    
        do {

            echo "Ingresa los consumos diarios en litros \n";

            $decision = trim(fgets(STDIN));

            if ($decision < 100) {

                echo "Bajo \n";

            } else if ($decision >= 100 && $decision <= 199) {

                echo "Medio \n";

            } else if ($decision >= 200) {

                echo "Alto \n";

            } else if ($decision === -1) {

                echo "Bye";

            } else {

                echo "Error";

            }

        } while ($decision != -1);
    
    ?>
    
</body>
</html>