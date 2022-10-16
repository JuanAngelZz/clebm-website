<?php

    session_start();

    if (isset($_SESSION['usuario'])=="luffy12") {
        header("location:index.php");
    }

    if ($_POST) {

        if ( ($_POST['usuario']=="luffy12") && ($_POST['contrasenia']=="orange") ){

            $_SESSION['usuario']="luffy12";

            header("location:index.php");

        }
        else{
            echo "<script> alert('Usuario o Contraseña incorrectos. Introdúzcalos nuevamente') </script>"; 
        }

    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col"></div>
            <div class="col-sm-10 col-lg-4">
                <div class="card">
                    <div class="card-header">Iniciar Sesión</div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <label for="usuario">Nombre:</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" required>
                            <br>
                            <label for="contrasenia">Contraseña:</label>
                            <input type="password" name="contrasenia" id="contrasenia" class="form-control" required>
                            <br>
                            <button type="submit" class="btn btn-success form-control">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>