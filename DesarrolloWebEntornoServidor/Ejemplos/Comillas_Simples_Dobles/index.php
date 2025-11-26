<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comillas simples y dobles</title>
</head>
<body>

    <?php
    
        $varible_original = "contenido";

        echo $varible_original;

        echo "<br>";

        echo "Hola $varible_original";

        echo "<br>";

        $booleano = true;

        echo $booleano;

        echo "<br>";

        $booleano = false;
    
        echo $booleano;

        echo "<br>";

        $arrayzote = [true, false, true, false];

        for ($i = 0; $i < count($arrayzote); $i++) {

            echo $arrayzote[$i];

        }

        echo "<br>";

        $producto = "Coca cola";

        echo $producto;

        echo "<br>";

        $producto = "";

        echo $producto;

        echo "<br>";

        $producto = null;

        echo $producto;

        unset($producto);

        $nuevaVariable = "wjdwjejdieid";

        var_dump($nuevaVariable);

        $nuevaVariable = null;

        var_dump($nuevaVariable);

        unset($nuevaVariable);

        echo "<br>";

        $matrizPocha = [

            [0, 0, 0],

            [0, 0, 0],

            [0, 0, 0],

        ];

        echo "<br>";

        mostrarMatriz($matrizPocha);

        function inicializarMatriz($matrizPocha) {

            $numeroRand = rand($numeroRand);

        }

        function mostrarMatriz($matrizPocha) {

        for ($i = 0; $i < count($matrizPocha); $i++) {

            for ($j = 0; $j < count($matrizPocha[$i]); $j++) {

                echo $matrizPocha[$i][$j] . " | ";

            }

            echo "<br>";

        }

    }

    ?>

</body>
</html>