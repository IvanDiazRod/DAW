<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices</title>
</head>
<body>

    <?php
    
        $matriz = [

            [0, 0, 0, 0],

            [0, 0, 0, 0],

            [0, 0, 0, 0],

            [0, 0, 0, 0],

            [0, 0, 0, 0],

        ];

        inicializarMatriz($matriz);

        mostrarMatriz($matriz);

        function inicializarMatriz(&$matriz) {

            for ($i = 0; $i < count($matriz); $i++) {

                for ($j = 0; $j < count($matriz[$i]); $j++) {

                    $matriz[$i][$j] = rand(1, 9);

                }

            }

        }

        function mostrarMatriz(&$matriz) {

            for ($i = 0; $i < count($matriz); $i++) {

                for ($j = 0; $j < count($matriz[$i]); $j++) {

                    echo $matriz[$i][$j] . " | ";

                }

                echo "<br>";

            }

        }
    
    ?>
    
</body>
</html>