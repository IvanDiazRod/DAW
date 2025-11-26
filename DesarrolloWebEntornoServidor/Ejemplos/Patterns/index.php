<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patrones</title>
</head>
<body>

    <?php
    
        echo "Introduce tu número de teléfono";

        $numeroTelefono = trim(fgets(STDIN));

        if (preg_match('/^[0-9]{9}$/', $numeroTelefono)) {

            echo "El número de teléfono $numeroTelefono es válido";

        } else {

            echo "El número de teléfono $numeroTelefono no es válido";

        }

    ?>
    
</body>
</html>