<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>

    <?php

    $total = 35;
    $tam = 5;
    $paginaActual = 3;

    $totalPaginas = $total / $tam;

    for ($i = 1; $i <= $totalPaginas; $i++) {

    if ($i === $paginaActual) {

        echo " [$i] ";

    } else {

        echo " $i ";

    }

}

    
    ?>
    
</body>
</html>