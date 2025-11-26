<?php

    $decision = 0;

    $nombres = [];

    $apellidos = [];

    $direcciones = [];

    do {

        echo "1) Agregar usuario \n";
        
        echo "2) Buscar una persona \n";

        echo "3) Editar usuario \n";

        echo "4) Eliminar usuario \n";
        
        echo "5) Mostrar usuarios de la agenda \n";

        echo "6) Salir de la agenda \n";

        $decision = intval(trim(fgets(STDIN)));

        switch ($decision) {

            case 1:

                agregarUsuario($nombres, $apellidos, $direcciones);

            break;

            case 2:

                buscarUsuario($nombres, $apellidos, $direcciones);

            break;
            
            case 3:
                // editarUsuario();
            break;

            case 4:
                // eliminarUsuario();
            break;

            case 5:
                
                mostrarUsuarios($nombres, $apellidos, $direcciones);

            break;

            case 6:

                echo "Saliendo del programa... \n";

            break;

            default:
            
                echo "No conozco esa opción \n";
            
            break;
            
        }

    } while ($decision !=6);

    function agregarUsuario(&$nombres, &$apellidos, &$direcciones) {

        echo "Introduce el nombre \n";

        $nombreUsuario = trim(fgets(STDIN));

        echo "Introduce los apellidos \n";

        $apellidosUsuario = trim(fgets(STDIN));

        echo "Introduce la dirección \n";

        $direccionUsuario = trim(fgets(STDIN));

        array_push($nombres, $nombreUsuario);

        array_push($apellidos, $apellidosUsuario);

        array_push($direcciones, $direccionUsuario);

    }

    function mostrarUsuarios(&$nombres, &$apellidos, &$direcciones) {

        for ($i = 0; $i < count($nombres); $i++) {

            echo $nombres[$i] . "\n";

        }

        for ($i = 0; $i < count($apellidos); $i++) {

            echo $apellidos[$i] . "\n";

        }

        for ($i = 0; $i < count($direcciones); $i++) {

            echo $direcciones[$i] . "\n";

        }

    }

    function buscarUsuario(&$nombres, &$apellidos, &$direcciones){

        echo "Introduce el apellidos del usuario que quieres buscar";

        $apellido_buscar = trim(fgets(STDIN));

        for ($i = 0; $i < count($apellidos); $i++) {

            switch ($apellido_buscar) {

                case $apellidos[$i]:

                    echo "El nombre del usuario es $nombres[$i] \n";

                    echo "La dirección del usuario es $direcciones[$i] \n";

                break;

                default:

                    echo "Usuario no encontrado";

                break;

            }
        
        }

    }