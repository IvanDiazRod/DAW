<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio loteria Iván y David</title>
</head>
<body>

    <?php

    $bola = 0;

    $arregloLoteria = [0, 0, 0, 0, 0];

    inicializarArray($arregloLoteria);

    eliminarDuplicados($arregloLoteria);

    ordenarArray($arregloLoteria);

    mostrarArray($arregloLoteria);

    echo "\n";

    mostrarNuevoNumero($arregloLoteria);

    function inicializarArray(&$arregloLoteria) {

        for ($i = 0; $i < count($arregloLoteria); $i++) {

            $arregloLoteria[$i] = rand(1, 49);

        }

    }

    function mostrarArray(&$arregloLoteria) {

        for ($i = 0; $i < count($arregloLoteria); $i++) {

            echo $arregloLoteria[$i] . " | ";

        }

    }

    function ordenarArray(&$arregloLoteria){

        sort($arregloLoteria, SORT_REGULAR);

    }

    function eliminarDuplicados(&$arregloLoteria) {

        for ($i = 0; $i < count($arregloLoteria); $i++) {

            $arregloLoteria = array_values(array_unique($arregloLoteria));

        }

    }

    function mostrarNuevoNumero($arregloLoteria) {

        $numeroAleatorio = 0;

        do {

            $numeroAleatorio = rand(0, 9);

        } while (in_array($numeroAleatorio, $arregloLoteria));

        echo $numeroAleatorio;

    }

    ?>
    
</body>
</html>