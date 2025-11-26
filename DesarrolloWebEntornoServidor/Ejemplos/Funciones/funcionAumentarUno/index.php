<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    $funcion = aumentarUno(9);

        echo "<p>$funcion</p>";
        function aumentarUno($numero) {

            return ++$numero;

        }
    
    ?>

</body>
</html>