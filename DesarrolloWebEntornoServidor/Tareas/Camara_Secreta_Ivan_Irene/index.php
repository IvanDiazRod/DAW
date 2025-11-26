

    <?php
    
        $vidas = 3;

        $decision = 0;

        $arreglo = [];

            echo "REGLAS: \n";

            echo "1. Seleccione una longitud para la combinación \n";

            echo "2. Introduzca su combinación \n";

            echo "3. El programa avisará si acierta, si se pasa o si se queda corto \n";

            echo "4. Cuando acierte toda la combinación, el juego finaliza \n";

            seleccionarLongitud($arreglo);

        function seleccionarLongitud(&$arreglo) {

            echo "Seleccione una longitud para la combinación (1 - 5): \n";

            $decision = trim(fgets(STDIN));

            switch ($decision) {

                case 1:

                    for ($i = 1; $i <= 1; $i++) {

                        array_push($arreglo, $i);

                    }

                    for ($i = 0; $i < count($arreglo); $i++) {

                        $arreglo[$i] = rand(0, 9);

                    }

                    /*

                    Trampa táctica

                    for ($i = 0; $i < count($arreglo); $i++) {

                        echo $arreglo[$i];

                    }

                    */

                    for ($i = 0; $i < count($arreglo); $i++) {

                        echo "Valor de la posición $i \n";

                        $decision = trim(fgets(STDIN));

                        if ($decision > $arreglo[$i]) {

                            echo "El número $decision es mayor que $arreglo[$i] \n";

                        } else if ($decision < $arreglo[$i]) {

                            echo "El número $decision es menor que $arreglo[$i] \n";

                        } else {

                            echo "El número $decision es igual a $arreglo[$i] \n";

                        }

                    }

                break;

                case 2:

                    for ($i = 1; $i <= 2; $i++) {

                        array_push($arreglo, $i);

                    }

                    for ($i = 0; $i < count($arreglo); $i++) {

                        $arreglo[$i] = rand(0, 9);

                    }

                    /*

                    Trampa táctica

                    for ($i = 0; $i < count($arreglo); $i++) {

                        echo $arreglo[$i];

                    }

                    */

                    for ($i = 0; $i < count($arreglo); $i++) {

                        echo "Valor de la posición $i \n";

                        $decision = trim(fgets(STDIN));

                        if ($decision > $arreglo[$i]) {

                            echo "El número $decision es mayor que $arreglo[$i] \n";

                        } else if ($decision < $arreglo[$i]) {

                            echo "El número $decision es menor que $arreglo[$i] \n";

                        } else {

                            echo "El número $decision es igual a $arreglo[$i] \n";

                        }

                    }

                break;

                case 3:

                    for ($i = 1; $i <= 3; $i++) {

                        array_push($arreglo, $i);

                    }

                    for ($i = 0; $i < count($arreglo); $i++) {

                        $arreglo[$i] = rand(0, 9);

                    }

                    /*

                    Trampa táctica

                    for ($i = 0; $i < count($arreglo); $i++) {

                        echo $arreglo[$i];

                    }

                    */

                    for ($i = 0; $i < count($arreglo); $i++) {

                        echo "Valor de la posición $i \n";

                        $decision = trim(fgets(STDIN));

                        if ($decision > $arreglo[$i]) {

                            echo "El número $decision es mayor que $arreglo[$i] \n";

                        } else if ($decision < $arreglo[$i]) {

                            echo "El número $decision es menor que $arreglo[$i] \n";

                        } else {

                            echo "El número $decision es igual a $arreglo[$i] \n";

                        }

                    }

                break;

                case 4:

                    for ($i = 1; $i <= 4; $i++) {

                        array_push($arreglo, $i);

                    }

                    for ($i = 0; $i < count($arreglo); $i++) {

                        $arreglo[$i] = rand(0, 9);

                    }

                    /*

                    Trampa táctica

                    for ($i = 0; $i < count($arreglo); $i++) {

                        echo $arreglo[$i];

                    }

                    */

                    for ($i = 0; $i < count($arreglo); $i++) {

                        echo "Valor de la posición $i \n";

                        $decision = trim(fgets(STDIN));

                        if ($decision > $arreglo[$i]) {

                            echo "El número $decision es mayor que $arreglo[$i] \n";

                        } else if ($decision < $arreglo[$i]) {

                            echo "El número $decision es menor que $arreglo[$i] \n";

                        } else {

                            echo "El número $decision es igual a $arreglo[$i] \n";

                        }

                    }

                break;

                case 5:

                    for ($i = 1; $i <= 5; $i++) {

                        array_push($arreglo, $i);

                    }

                    for ($i = 0; $i < count($arreglo); $i++) {

                        $arreglo[$i] = rand(0, 9);

                    }

                    /*

                    Trampa táctica

                    for ($i = 0; $i < count($arreglo); $i++) {

                        echo $arreglo[$i];

                    }

                    */

                    for ($i = 0; $i < count($arreglo); $i++) {

                        echo "Valor de la posición $i \n";

                        $decision = trim(fgets(STDIN));

                        if ($decision > $arreglo[$i]) {

                            echo "El número $decision es mayor que $arreglo[$i] \n";

                        } else if ($decision < $arreglo[$i]) {

                            echo "El número $decision es menor que $arreglo[$i] \n";

                        } else {

                            echo "El número $decision es igual a $arreglo[$i] \n";

                        }

                    }

                break;

            }

        }
    
    ?>