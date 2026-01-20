<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Proyecto login completo</title>
</head>
<body>

    <header class="d-flex align-items-center justify-content-between p-4 bg-dark flex-wrap gap-3">

        <div class="d-flex flex-column">

            <h1 class="text-white mb-1 fs-3">Proyecto login completo</h1>

            <p class="text-secondary mb-0">Iván Díaz Rodríguez</p>

        </div>

        <nav>

            <ul class="d-flex align-items-center gap-3 p-0 m-0 list-unstyled flex-wrap">

                <li><a class="nav-btn nav-link-custom" href="#">Resource</a></li>

                <li><a class="nav-btn nav-link-custom" href="#">Resource</a></li>

                <li><a class="nav-btn nav-link-custom" href="#">Resource</a></li>

                <li><a class="nav-btn nav-link-custom" href="index.php">Login</a></li>

            </ul>

        </nav>

    </header>

    <main>

        <article>

            <section class="d-flex align-items-center justify-content-center min-vh-100">

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-12 col-sm-10 col-md-6 col-lg-4">

                            <form  class="border border-2 border-primary p-4 rounded-3 shadow-sm" action="procesar.php" method="post">

                                <h2 class="text-center mb-4">Iniciar sesión</h2>

                                <div class="mb-3">

                                    <label for="usuario" class="form-label">Usuario</label>

                                    <input type="text" class="form-control border border-2 border-secondary" name="usuario" id="usuario" placeholder="Introduce tu usuario">
                            
                                </div>

                                <div class="mb-4">
                                
                                    <label for="contrasena" class="form-label">Contraseña</label>
                                
                                    <input type="password" class="form-control border border-2 border-secondary" name="contrasena" id="contrasena" placeholder="Introduce tu contraseña">
                            
                                </div>

                                <div class="d-grid">
                                
                                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                            
                                </div>

                            </form>

                        </div>
                
                    </div>
            
                </div>

            </section>

        </article>

    </main>
    
</body>
</html>