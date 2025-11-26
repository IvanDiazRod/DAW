<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>

    <?php

        do {

            echo "Ejercicio cafetería Iván Díaz \n";

            echo "1) Espresso \n";
    
            echo "2) Americano \n";

            echo "3) Capuchino \n";

            echo "4) Salir \n";

            echo "Elige una opción \n";

            $decision = trim(fgets(STDIN));

            switch ($decision) {

                case 1:

                    echo "Has pedido un espresso! \n";

                break;

                case 2:

                    echo "Has pedido un Americano! \n";

                break;

                case 3:

                    echo "Has pedido un Capuchino! \n";

                break;

                case 4:

                    echo "Bye. \n";

                break;

                default:

                    echo "No conozco esa opción! \n";

                break;

            }

        } while ($decision != 4);

    ?>
    
</body>
</html>