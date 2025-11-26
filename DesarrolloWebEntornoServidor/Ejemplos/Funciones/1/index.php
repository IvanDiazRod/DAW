<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Funcion con php</title>

</head>

<body>

    <?php

        mostrarMenu();

        // Funciones

        function mostrarMenu() {

        $decision = 0;

        $n1 = 0;

        $n2 = 0;

        do {

            echo "1. Suma \n";

            echo "2. Resta \n";

            echo "3. Multiplicar \n";

            echo "4. Dividir \n";

            echo "5. Salir";

            $decision = trim(fgets(STDIN));

            switch ($decision) {

                case 1:

                    sumar($n1, $n2);

                break;

                case 2:

                    restar($n1, $n2);

                break;

                case 3:

                    multiplicar($n1, $n2);

                break;

                case 4:

                    dividir($n1, $n2);

                break;

                case 5:

                    return;

                break;

                default:

                    casoNoConocido();

                break;

            }

        } while ($decision != 5);

        }

        function sumar($n1, $n2) {

            echo "Introduce el primer número \n";

            $n1 = trim(fgets(STDIN));

            echo "Introduce el segundo número \n";

            $n2 = trim(fgets(STDIN));

            echo "El resultado es " . ($n1 + $n2) . "\n";

        }

        function restar($n1, $n2) {

            echo "Introduce el primer número \n";

            $n1 = trim(fgets(STDIN));

            echo "Introduce el segundo número \n";

            $n2 = trim(fgets(STDIN));

            echo "El resultado es " . ($n1 - $n2) . "\n";

        }

        function multiplicar($n1, $n2) {

            echo "Introduce el primer número \n";

            $n1 = trim(fgets(STDIN));

            echo "Introduce el segundo número \n";

            $n2 = trim(fgets(STDIN));

            echo "El resultado es " . ($n1 * $n2) . "\n";

        }

        function dividir($n1, $n2) {

            echo "Introduce el primer número \n";

            $n1 = trim(fgets(STDIN));

            echo "Introduce el segundo número \n";

            $n2 = trim(fgets(STDIN));

            echo "El resultado es " . ($n1 / $n2) . "\n";

        }

        function casoNoConocido() {

            echo "No conozco ese caso \n";
            
        }
    
    ?>
    
</body>

</html>