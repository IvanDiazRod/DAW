<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>
</head>
<body>

    <?php
    
        $rol = "admin";

            if ($rol === "admin") {

                echo "Acceso total";

            } else if ($rol === "user") {

                echo "Acceso limitado";

            } else if ($rol === "invitado") {

                echo "Solo lectura";

            } else if ($rol === "otro") {

                echo "Rol no válido";

            } else {

                echo "Este eol no existe";

            }
    
    ?>
    
</body>
</html>