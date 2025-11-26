<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>
<body>

    <?php

    do {

        echo "Maquina expendedora:\n";

        echo "A1 = Patatas\n";

        echo "B2 = Barrita\n";

        echo "C3 = Galletas\n";

        echo "D4 = Salir\n";

        echo "Introduce un código: \n";
    
        $codigo = trim(fgets(STDIN));
    
        switch (strtoupper($codigo)) {

            case "A1":

                echo "Has elegido Patatas \n";

                break;

            case "B2":

                echo "Has elegido Barrita \n";

                break;

            case "C3":

                echo "Has elegido Galletas \n";

                break;

            case "D4":

                echo "Bye\n";

                break;

            default:

                echo "Código no válido \n";

    }

} while (strtoupper($codigo) != "D4");

?>
    
</body>
</html>