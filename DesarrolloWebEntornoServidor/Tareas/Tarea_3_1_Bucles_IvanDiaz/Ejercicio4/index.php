<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>

    <?php

        $total = 0;
    
        do {

            echo "Menú de tipo de vehiculo Iván Díaz \n";

            echo "1) Moto (1€ / h) \n";

            echo "2) Coche (2€ / h) \n";

            echo "3) Furgón (3€ / h) \n";

            echo "4) Salir \n";

            echo "Elige una opción \n";

            $decision = trim(fgets(STDIN));

    switch ($decision) {

        case 1:

            echo "¿Cuántas horas estuvo la moto? ";

            $horas = (int) trim(fgets(STDIN));

            $total += $horas * 1;

            echo "Añadido: " . ($horas * 1) . " €\n";

            break;

        case 2:

            echo "¿Cuántas horas estuvo el coche? ";

            $horas = (int) trim(fgets(STDIN));

            $total += $horas * 2;

            echo "Añadido: " . ($horas * 2) . " €\n";

            break;

        case 3:

            echo "¿Cuántas horas estuvo el furgón? ";

            $horas = (int) trim(fgets(STDIN));

            $total += $horas * 3;

            echo "Añadido: " . ($horas * 3) . " €\n";

            break;

        case 4:

            echo "Saliendo...\n";

            break;

        default:

            echo "Opción no válida.\n";

    }

        } while ($decision != 4);
    
    ?>
    
</body>
</html>