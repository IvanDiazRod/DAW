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

</body>
</html>