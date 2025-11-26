<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio19</title>
</head>
<body>

    <?php
    
        $zone = "miejercicio.com";

        if (str_ends_with($zone, ".com")) {

            echo "Dominio comercial";

        } else if (str_ends_with($zone, ".es")) {

            echo "Dominio España";

        } else {

            echo "Otro";

        }
    
    ?>
    
</body>
</html>