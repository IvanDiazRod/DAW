<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Función de un solo parámetro</title>
</head>
<body>

    <?php
    
        $funcion = multiplicar(8);

        echo "<p>$funcion</p>";
        function multiplicar($n1, $n2 = 1) {

            return $n1 * $n2;
            
        }
    
    ?>
    
</body>
</html>