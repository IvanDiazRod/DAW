<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle"/>
    <script defer src="js/confirmarContrasenas.js"></script>
    <title>Crea tu cuenta!</title>
</head>
<body>

    <header class="cabeceraform">

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

            <section class="seccionFormularioCrearCuenta">

                <div class="formcont">

                    <form action="index.php" method="post" enctype="multipart/form-data">
                        
                        <h1>Crea tu cuenta!</h1>
                    
                        <input type="text" id="nombre" name="nombre" placeholder="Introduce tu nombre">

                        <input type="email" id="correo" name="correo" placeholder="Introduce tu correo electrónico">

                        <label for="fechanacimiento">Introduce tu fecha de nacimiento</label>

                        <input type="date" id="fechanacimiento" name="fechanacimiento">

                        <input type="password" id="contrasena" name="contrasena" placeholder="Introduce tu contraseña">
                    
                        <input type="password" id="repitecontrasena" name="contrasena" placeholder="Repite tu contraseña">

                        <div class="input-cont">

                            <label for="terminosCondiciones">Acepto los <a href="">terminos</a> y <a href="">condiciones</a></label>

                            <input type="checkbox" id="terminosCondiciones" name="terminosCondiciones">

                        </div>

                        <input type="submit" value="Crear cuenta">

                        <p></p>

                    </form>

                </div>

            </section>

        </article>

    </main>
    
</body>
</html>