<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>
<body>

    <?php
    
        $numero = 15;

        if ($numero % 3 === 0 && $numero % 5 === 0) {

            echo "FizzBuzz";

        } else if ($numero % 3 === 0) {

            echo "Fizz";

        } else if ($numero % 5 === 0) {

            echo "Buzz";

        } else {

            echo $numero;

        }
    
    ?>
    
</body>
</html>