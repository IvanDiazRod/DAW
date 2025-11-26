<?php

// Crea un programa  en PHP que permita almacenar información de personas usando arrays(Varios arrays). El programa debe:
// Mostrar un menú repetidamente:
// 1. Introducir nueva persona
// 2. Buscar por apellido
// 3. Salir

// Al elegir 1, pedirá nombre, apellido y dirección y los guardará en tres arrays paralelos ($nombres, $apellidos, $direcciones)
// Capacidad máxima: 100 personas.
// Al elegir 2, pedirá un apellido y hará una búsqueda (no sensible a mayúsculas/minúsculas)
// Si encuentra una coincidencia, mostrará Nombre y Dirección de la primera persona que coincida
// Si no existe, mostrará “Persona no encontrada.”
// Al elegir 3, terminará el programa con el mensaje “Saliendo del programa.”

// Iván Díaz y Esther Gonzalez

$nombres = [];
$apellidos = [];
$direcciones = [];

do {
    echo "Menú de almacenamiento de información:\n";
    echo "1) Introducir nueva persona\n";
    echo "2) Buscar por apellido\n";
    echo "3) Salir\n";

    echo "Elige una opción (1-3): ";
    $opcion = (int)trim(fgets(STDIN));

    if (count($nombres) >= 100 && $opcion == 1) {
        echo "Capacidad máxima alcanzada. No se pueden añadir más personas.\n";
        continue;
    }

    switch ($opcion) {
        case 1:
            for ($i = 0; $i < 1; $i++) {
                echo "Introduce el nombre: ";
                $nombres[$i] = trim(fgets(STDIN));

                while (empty($nombres[$i]) || !preg_match('/^[A-ZÁÉÍÓÚÑ]/', $nombres[$i])) {
                    echo "Nombre no válido. Debe empezar por una letra mayúscula y no puede estar vacío. Introduce el nombre: ";
                    $nombres[$i] = trim(fgets(STDIN));
                }
                

                echo "Introduce el apellido: ";
                $apellidos[$i] = trim(fgets(STDIN));

                while (empty($apellidos[$i]) || !preg_match('/^[A-ZÁÉÍÓÚÑ]/', $apellidos[$i])) {
                    echo "Apellido no válido. Debe empezar por una letra mayúscula y no puede estar vacío. Introduce el apellido: ";
                    $apellidos[$i] = trim(fgets(STDIN));
                }


                echo "Introduce la dirección: ";
                $direcciones[$i] = trim(fgets(STDIN));

                while (empty($direcciones[$i]) || !preg_match('/^C\/[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+/', $direcciones[$i])) {
                    echo "Dirección no válida. Debe empezar por 'C/' seguido del nombre de la calle y no puede estar vacía. Introduce la dirección: ";
                    $direcciones[$i] = trim(fgets(STDIN));
                }


                echo "Persona almacenada correctamente.\n";
            }
            break;
        case 2:
            echo "Introduce el apellido a buscar: ";
            $apellidoBuscado = trim(fgets(STDIN));

            $encontrado = false;
            for ($i = 0; $i < count($apellidos); $i++) {
                if (strcasecmp($apellidos[$i], $apellidoBuscado) == 0) {
                    echo "Persona encontrada: Nombre: ".$nombres[$i].", Dirección: " .$direcciones[$i]."\n";
                    $encontrado = true;
                    break;
                }
            }
            break;  
        case 3:
            echo "Saliendo del programa.\n";
            break;
        default:
            echo "Opción no válida. Por favor, elige entre 1 y 3.\n";
            break;
    }
} while ($opcion != 3);

 ?>