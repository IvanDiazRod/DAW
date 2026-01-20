<?php

    session_start();

    if (!isset($_SESSION["usuario"])) {
    
    header("Location: index.php");
    
    exit;
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script defer type="module" src="js/bootstrap.js"></script>
    <title>Bienvenid@, <?=htmlspecialchars($_SESSION["usuario"])?></title>
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

                <li><a class="nav-btn nav-link-custom" href="#">Hola, <?=htmlspecialchars($_SESSION["usuario"])?>!</a></li>

                <li><a class="nav-btn nav-link-custom" href="logout.php">Cerrar sesión</a></li>

            </ul>

        </nav>

    </header>

    <main>

        <article>

            <section class="d-flex align-items-center justify-content-center">

                <div class="container-fluid p-4">

                    <div id="carouselLanding" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <img src="img/oficina.jpg" class="d-block w-100" alt="Imagen 1">

                            </div>

                            <div class="carousel-item">

                                <img src="img/profesional.avif" class="d-block w-100" alt="Imagen 2">

                            </div>

                            <div class="carousel-item">

                                <img src="img/team.jpg" class="d-block w-100" alt="Imagen 3">

                            </div>

                            <div class="carousel-item">

                                <img src="img/hombres_de_negocio.jpg" class="d-block w-100" alt="Imagen 4">

                            </div>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselLanding" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Anterior</span></button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselLanding" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Siguiente</span></button>

                    </div>

                </div>

            </section>

            <section class="py-5">

                <div class="container">
        
                    <div class="row align-items-center justify-content-between">

                        <div class="col-12 col-md-4 text-center text-md-start mb-4 mb-md-0">
                
                            <h2>Somos <span class="text-decoration-underline">profesionales</span></h2>
                
                            <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam odit illo animi assumenda sapiente eligendi sed cum earum magnam.</p>
            
                        </div>

                        <div class="col-12 col-md-7 text-center">
                
                            <figure class="mb-3">
                
                                <img class="img-fluid rounded" src="img/profe.jpg" alt="Profesor">
                
                            </figure>
                
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis inventore necessitatibus eum quo distinctio voluptatum.</p>
            
                        </div>

                    </div>
                </div>

            </section>

            <section class="py-5 bg-light">

                <div class="container">
        
                    <div class="row text-center mb-5">
            
                        <div class="col">
                    
                            <h2 class="fw-bold">Nuestros planes</h2>
                
                            <p class="text-muted">Elige el plan que mejor se adapte a ti</p>
            
                        </div>
        
                    </div>

                    <div class="row g-4 justify-content-center">

                        <div class="col-12 col-md-6 col-lg-4">
                
                            <div class="card h-100 shadow-sm">
                    
                                <img src="img/plan-basico.jpg" class="card-img-top" alt="Plan básico">
                    
                                    <div class="card-body">
                        
                                        <h5 class="card-title">Plan básico</h5>
                        
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                                    </div>
                
                                </div>
            
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                
                                <div class="card h-100 border-primary shadow">
                    
                                    <img src="img/plan-medio.jpg" class="card-img-top" alt="Plan medio">
                    
                                    <div class="card-body">
                        
                                    <h5 class="card-title">Plan medio (recomendado)</h5>
                        
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                                </div>
                
                            </div>
            
                        </div>


            
                        <div class="col-12 col-md-6 col-lg-4">
            
                            <div class="card h-100 shadow-sm">
                
                                <img src="img/plan-pro.jpg" class="card-img-top" alt="Plan pro">
                    
                                    <div class="card-body">
                        
                                        <h5 class="card-title">Plan pro</h5>
                        
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    
                                    </div>
                
                                </div>
            
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

        <div class="text-center small text-secondary">© 2026 Proyecto Login Completo · Todos los derechos reservados</div>

        </div>

    </footer>

</body>
</html>