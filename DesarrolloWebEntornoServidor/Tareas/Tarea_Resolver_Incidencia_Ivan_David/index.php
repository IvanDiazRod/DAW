<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle"/>
    <script defer src="js/script.js"></script>
    <title>Resolver incidencia Iván y David</title>
</head>
<body>

    <header>

        <div class="logo">

            <h1>Aplicación que detecta videojuegos y los cierra</h1>

        </div>

        <nav>

            <ul>

                <li><a href="cuenta.php">Crea tu cuenta</a></li>

                <li><a href="sesion.php">Inicia sesión</a></li>

            </ul>

            <ul>

                <li><a href="#"><span class="material-symbols-outlined">account_circle</span></a></li>

            </ul>

        </nav>
        
    </header>

    <main>

        <article>

            <section>

                <div class="usuariosvideojuegostext">

                    <h1>Los siguientes usuarios están jugando videojuegos:</h1>

                </div>

                <div class="seccionPanel">

                <?php

                $usuarios = ["Iván", "David", "Laura", "Sara", "Victor", "Jose Ángel"];

                $videojuego=["Fortnite","Zelda","Minecraft","Fall Guys","Roblox","POU"];

                $usuario_videojuego = [
    
                    ["Iván", "Zelda"],
    
                    ["David", "Fortnite"],
    
                    ["Laura", "Minecraft"],
    
                    ["Juan", "Among Us"],
    
                    ["Sara", "Valorant"],
    
                    ["Luis", "League of Legends"],
    
                    ["Pablo", "Overwatch"],

                ];

                $contador = 0;

    foreach ($usuario_videojuego as $fila) {

    if ($contador % 3 === 0) {

        echo "<div class='row'>";

    }

    $usuario = $fila[0];

    $videojuego = $fila[1];

    echo "<div class='usuario'>";

    echo "<h3>$usuario</h3>";

    echo "<p>$videojuego</p>";

    echo "<button>Cerrar videojuego</button>";

    echo "</div>";

    $contador++;

    if ($contador % 3 === 0) {

        echo "</div>";

    }

}

    if ($contador % 3 != 0) {

        echo "</div>";

    }

                    ?>

                </div>

            </section>

        </article>
        
    </main>

</body>
</html>