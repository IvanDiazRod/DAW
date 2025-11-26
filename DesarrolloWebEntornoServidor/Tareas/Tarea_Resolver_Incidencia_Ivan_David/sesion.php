<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="js/script.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar sesión</title>

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
                <div class="form">
                    <h1 class="sesion">Iniciar sesión</h1><br>
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <label>Usuario</label><br>
                        <input type="text" id="name" name="usuario" placeholder="Introduce tu usuario"><br><br>
                        <label>Contraseña</label><br>
                        <input type="text" id="name" name="contraseña" placeholder="Introduce tu contraseña"><br><br>
                        <input type="submit" id="button" value="Iniciar sesión">
                    </form>
                </div>
            </section>
        </article>
    </main>

</body>

