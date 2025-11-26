<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>

    <?php

        echo "Introduce una contraseña: ";

        $contrasena = trim(fgets(STDIN));

        $reglas = [

        fn($c) => strlen($c) >= 8,

        fn($c) => preg_match('/[A-Z]/', $c),

        fn($c) => preg_match('/[0-9]/', $c),

        fn($c) => preg_match('/[^A-Za-z0-9]/', $c),

    ];

$puntos = 0;

for ($i = 0; $i < count($reglas); $i++) {

    if ($reglas[$i]($contrasena)) {

        $puntos++;

    }

}

echo "Fuerza: $puntos/4\n";

?>

    
</body>
</html>