<?php

    session_start();

    if (isset($_SESSION['usuario'])!="luffy12") {
        header("location:login.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consejo Legislativo del Estado Miranda</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark navbar-expand-lg px-4 py-3" style="background-color: #9c0000">
            <a class="navbar-brand" href="./index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Ayuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
                </ul>
            </div>
            <a href="./cerrar.php" class="btn btn-light my-2 my-lg-0">Cerrar Sesión</a>
        </nav>
    </header>
    <div class="container">