

    <?php
    
        $matriz = [
        
            [0, 0, 0],

            [0, 0, 0],

            [0, 0, 0],
            
        ];

        $decision = 0;

        do {

            echo "1. Inicializar matriz \n";

            echo "2. Mostrar matriz \n";

            echo "3. Cambiar valor \n";

            echo "4. Salir \n";

            $decision = trim(fgets(STDIN));

                switch ($decision) {

                case 1:

                    inicializarMatriz($matriz);

                break;

                case 2:

                    mostrarMatriz($matriz);

                break;

                case 3:

                    cambiarValor($matriz);

                break;

            }

        } while ($decision != 4);

        function inicializarMatriz(&$matriz) {

            for ($i = 0; $i < count($matriz); $i++) {

                for ($j = 0; $j < count($matriz[$i]); $j++) {

                    $matriz[$i][$j] = rand(0, 1);

                }

            }

        }

        function mostrarMatriz(&$matriz) {

            for ($i = 0; $i < count($matriz); $i++) {

                for ($j = 0; $j < count($matriz[$i]); $j++) {

                    echo $matriz[$i][$j] . " | ";

                }

                echo "\n";

            }

        }

        function cambiarValor(&$matriz) {

            echo "Introduce la posicion X";

            $posX = trim(fgets(STDIN));

            echo "Introduce la posición Y";

            $posY = trim(fgets(STDIN));

            $matriz[$posX][$posY] = ($matriz[$posX][$posY] === 0) ? $matriz[$posX][$posY] = 1 : $matriz[$posX][$posY] = 0;

        }

    ?>