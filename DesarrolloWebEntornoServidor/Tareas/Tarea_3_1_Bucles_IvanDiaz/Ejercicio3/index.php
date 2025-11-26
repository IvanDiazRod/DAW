<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>

    <?php
    
        $pin = 1256;

        $intentos = 0;

        echo "Introduce el PIN de acceso \n";
    
        do {

            if ($intentos >= 3) {

                echo "Se te acabaron los intentos! \n";

                break;

            }

            $pin = trim(fgets(STDIN));

            if ($pin != 1256) {

                echo "Has fallado! Intentalo de nuevo \n";

            } else {

                echo "Correcto! Puedes entrar \n";

                break;

            }

            $intentos++;

        } while ($pin != 1256);

    ?>
    
</body>
</html>