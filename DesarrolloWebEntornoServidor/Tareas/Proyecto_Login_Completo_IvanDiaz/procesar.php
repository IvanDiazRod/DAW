<?php

    session_start();

    $usuario = $_POST["usuario"] ?? "";

    $contrasena = $_POST["contrasena"] ?? "";

    if ($usuario === "ivan" && $contrasena === "1234" || $usuario === "laura" && $contrasena === "1234") {

        $_SESSION["usuario"] = $usuario;

        header("Location: privada.php");
    
        exit;

    } else {

        header("Location: index.php");
    
        exit;

    }

?>