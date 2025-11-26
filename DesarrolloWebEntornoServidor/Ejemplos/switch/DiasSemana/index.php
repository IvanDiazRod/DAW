<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch and case</title>
</head>
<body>

    <?php
    
        $dia = date("N");

        switch ($dia) {

            case 1:

                $dia = "Lunes";

            break;

            case 2:

                $dia = "Martes";

            break;

            case 3:

                $dia = "Miércoles";

            break;

            case 4:

                $dia = "Jueves";
            
            break;

            case 5:

                $dia = "Viernes";

            break;

            case 6:

                $dia = "Sabado";

            break;

            case 7:

                $dia = "Domingo";

            break;

            default:

                $dia = "Ese dia no existe";

            break;

        }

        echo "Hoy estamos a día $dia";

        echo "<br>";

        $n = 0;

        while ($n <= 5) {

            echo "$n <br>";

            $n++;

        }
    
    ?>
    
</body>
</html>