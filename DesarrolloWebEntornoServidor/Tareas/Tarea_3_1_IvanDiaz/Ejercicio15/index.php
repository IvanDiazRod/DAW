<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio15</title>
</head>
<body>

    <?php
    
        $a = "caDenON";

        $b = "cAdeNon";

        if (strtolower($a) != strtolower($b)) {

            echo "Las cadenas no coinciden";

        } else {

            echo "Las cadenas coinciden";

        }
    
    ?>
    
</body>
</html>