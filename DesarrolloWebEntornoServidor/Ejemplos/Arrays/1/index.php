<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejemplo de array</title>
</head>
<body>

    <?php
    
        $arreglo = [];

        // inicializar($arreglo);

        // mostrar($arreglo);

        /*foreach ($arreglo as $recorro) {
            
            for ($i = 1; $i <= 9; $i++) {

                array_push($recorro, $i);

            }
            
        }

        foreach ($arreglo as $recorro) {

            $recorro = rand(0, 1);

            echo $recorro;

        }*/

            /*$ordenarArray = [0, 7, 12, 98, 43, 12, 45];

            for ($i = 0; $i < count($ordenarArray); $i++) {
                
                sort($ordenarArray, SORT_ASC);

                echo $ordenarArray[$i] . " | ";

            }*/
                
                /*

                echo "<header>";

                echo "<nav>";

                echo "<ul>";

                $pushearArray = [];

                for ($i = 1; $i <= 100; $i++) {

                    array_push($pushearArray, $i);

                }

                for ($i = 0; $i < count($pushearArray); $i++) {

                    $pushearArray[$i] = rand(1, 9);

                }

                for ($i = 0; $i < count($pushearArray); $i++) {

                    echo "<li><a href='#'>$pushearArray[$i]</a></li>";

                }

                echo "</ul>";

                echo "</nav>";

                echo "</header>";*/

                /*$letras = ["a", "b", "c", "d", "e"];

                $buscar = "c";

                if (in_array($buscar, $letras)) {

                    echo "<p>El valor '$buscar' se encuentra en el array.</p>";

                    $posicion = array_search($buscar, $letras);

                    echo "<p>La posición del valor es: $posicion</p>";

                } else {

                    echo "<p>Ese valor '$buscar' no está en el array.</p>";

                }*/

            /*$frutas = ["Manzana", "Pera", "Platano"];

            foreach($frutas as $fruta) {

                echo $fruta . " | ";

            }*/

                $fechas = ["Y", "M", "D"];

                

    ?>
    
</body>
</html>