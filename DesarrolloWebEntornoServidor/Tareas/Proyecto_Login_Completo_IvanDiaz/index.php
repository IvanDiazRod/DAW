<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script defer type="module" src="js/bootstrap.js"></script>
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

    <footer class="bg-dark text-white py-5">

    <div class="container">
        <div class="row text-center text-md-start">

            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <h5 class="mb-3">Sobre nosotros</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white text-decoration-none">¿Quiénes somos?</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Emprender con nosotros</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Entrar a nuestra comunidad</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-6">
                <h5 class="mb-3">Oficinas globales</h5>
                <ul class="list-unstyled">
                    <li>New York, USA <small class="text-secondary">(North America HQ)</small></li>
                    <li>Berlin, Germany <small class="text-secondary">(EMEA HQ)</small></li>
                </ul>
            </div>

        </div>

        <hr class="border-secondary my-4">

        <div class="text-center small text-secondary">
            © 2026 Proyecto Login Completo · Todos los derechos reservados
        </div>
    </div>

</footer>

    
</body>
</html>