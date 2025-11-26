<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <script defer src="js/script.js"></script>

    <title>Ejercicio agenda completa</title>

</head>

<body>

    <header>

        <h1>Agenda de Contactos iván Díaz</h1>

    </header>

    <?php

    echo "<main>";

    echo "<article>";

    echo "<section class='seccionProcesarDatos'>";

    $agenda = [];

        if (isset($_POST['agenda'])) {

            $agenda = unserialize($_POST['agenda']);

        }

        $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';

        $telefono = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

        if (empty($nombre)) {
    
            echo "<p>El nombre no puede estar vacío.</p>";
    
        } else {
    
            if (!isset($agenda[$nombre]) && !empty($telefono)) {

                $agenda[$nombre] = $telefono;
    
                echo "<p>Contacto añadido correctamente.</p>";

            } elseif (isset($agenda[$nombre]) && !empty($telefono)) {

                $agenda[$nombre] = $telefono;
    
                echo "<p>Teléfono actualizado.</p>";

            } elseif (isset($agenda[$nombre]) && empty($telefono)) {

                unset($agenda[$nombre]);
    
                echo "<p>'>Contacto eliminado.</p>";

            } else {
    
                echo "<p>'>No se realizaron cambios.</p>";
    
            }
    
        }

    }

    if (!empty($agenda)) {

        echo "<h2>Lista actual de contactos:</h2>";

        echo "<ul>";

        foreach ($agenda as $nombre => $telefono) {

            echo "<li><strong>$nombre</strong>: $telefono</li>";

        }

        echo "</ul>";

    } else {

        echo "<p><em>La agenda está vacía.</em></p>";

    }

    echo "</section>";

    echo "</article>";

    echo "</main>";

    ?>

    <main>

        <article>

            <section>

                <div class="formcont">

                    <form action="" method="post" enctype="multipart/form-data">

                        <h2>Agregar / Modificar / Eliminar contacto</h2>
    
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" maxlength="24">
    
                        <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" maxlength="9">

                        <input type="hidden" name="agenda" value="<?php echo htmlspecialchars(serialize($agenda)); ?>">

                        <input type="submit" value="Enviar datos">

                    </form>

                </div>

            </section>

        </article>

    </main>
    
</body>
</html>