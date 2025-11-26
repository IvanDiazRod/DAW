<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>

    <?php

        echo "Introduce tu meta de pasos diarios:";

        $meta = (int) fgets(STDIN);
        
        $pasosAcumulados = 0;

        $entradas = 0;

        while ($pasosAcumulados < $meta) {
        
            echo "Introduce los pasos del siguiente lote:";
        
            $lote = (int) fgets(STDIN);
    
            $pasosAcumulados += $lote;
        
            $entradas++;
        
        }

        echo "Meta alcanzada! El total pasos ha sido de: $pasosAcumulados\n";
        
        echo "El número de entradas necesarias han sido de: $entradas\n";
    
    ?>

    
</body>
</html>