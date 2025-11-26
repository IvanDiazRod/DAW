<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>

    <?php

    $stock = 12;

    for ($i = 1; $i <= $stock; $i++) {

        echo "Agregar $i\n";

    }

    echo "Introduce cantidad a comprar:";
    
    $qty = (int)trim(fgets(STDIN));

    if ($qty >= 1 && $qty <= $stock) {

        echo "Cantidad válida\n";

    } else {

        echo "Sin stock\n";

    }

?>

    
</body>
</html>