<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú con contador estático</title>
</head>
<body>

    <?php

        funcion();
    
        function funcion() {

            $opcion = 0;

            do {

                echo "1. Mostrar hola \n";

                echo "2. Salir \n";

                $opcion = (int) trim(fgets(STDIN));

                switch ($opcion) {

                    case 1:

                        mostrarHola();
                        
                    break;

                    case 2:

                        mostrarOpcionInvalida();

                    break;

                }

            } while ($opcion !== 2);

        }

        function mostrarHola() {

            echo "Hola! \n";

        }

        function mostrarOpcionInvalida() {

            echo "Opción inválida \n";

        }

    ?>
    
</body>
</html>