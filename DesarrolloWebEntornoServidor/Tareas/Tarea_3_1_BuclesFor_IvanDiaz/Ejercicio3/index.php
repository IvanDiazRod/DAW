<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>

    <?php

    $usuario = "admin";

    $contrasena = "12345678";

    $exito = false;
    
        for ($i = 1; $i <= 3; $i++) {

            echo "Intento $i de 3 \n";

            echo "Introduce el nombre \n";

            $campoNombre = trim(fgets(STDIN));

            echo "Intrduce la contraseña";

            $campoContra = trim(fgets(STDIN));

            if ($campoNombre != $usuario && $campoContra != $contrasena) {

                echo "Usuario o contraseña incorrecto, intenta de nuevo \n";

            } else {

                $exito = true;

                echo "Correcto! Acceso garantizado \n";

                break;

            }

            if ($i >= 3) {

                echo "Has llegado al máximo de intentos, bloqueando...";

            }

        }
    
    ?>
    
</body>
</html>