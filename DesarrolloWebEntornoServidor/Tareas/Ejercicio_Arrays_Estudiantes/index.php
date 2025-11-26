<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio arrays estudiantes</title>
</head>
<body>

    <?php
    
        $arrayEstudiantes = ["Pedro", "Juan", "Marcelo", "Alvaro", "Gerónimo"];

        array_push($arrayEstudiantes, "Francisco", "Carla");

        // $arrayEstudiantes = [];

        /*$valor = "";

        do {

            echo "Introduce el nombre de un alumno, introduce 0 para parar \n";

            $valor = trim(fgets(STDIN));

            array_push($arrayEstudiantes, $valor);

        } while ($valor != 0);*/

        sort($arrayEstudiantes, SORT_ASC);

        array_shift($arrayEstudiantes);

        if (array_search("Carla", $arrayEstudiantes) !== false) {

            echo "<p>Carla está en la lista</p>";

        } else {

            echo "<p>Carla no está en la lista</p>";

        }

        for ($i = 0; $i < count($arrayEstudiantes); $i++) {

            echo "<p>La posición del estudiante es " . ($i + 1) . ": Y el nombre es: $arrayEstudiantes[$i]</p>";

        }

        echo "<p>Cantidad total de estudiantes: " .count($arrayEstudiantes) . "</p>";
    
    ?>
    
</body>
</html>