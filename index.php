<?php include("./cabecera.php");?>

<div class="container jumbotron mt-4">
    <div class="row">
        <div class="col-9 mt-4 pt-2">
            <h1 class="display-4">Consejo Legislativo del Estado Miranda</h1>
            <p class="lead">Página administrativa.</p>
        </div>
        <div class="col-3">
            <img src="img/logo.jpg" alt="Logo del Consejo Legislativo del Estado Miranda">
        </div>
    </div>
  <hr class="my-4">
</div>
<br>
<br>
<div class="container">
    <div class="row gap-4">
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="img/user.png" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Administrar Usuarios</h5>
                    <p class="card-text">Gestiona los usuarios registrados en el sistema.</p>
                    <a href="./usuarios.php" class="btn btn-primary btn-block">Entrar</a>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="img/product.png" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Administrar Productos</h5>
                    <p class="card-text">Añade y consulta productos en el inventario.</p>
                    <a href="./productos.php" class="btn btn-primary btn-block">Entrar</a>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="img/help.png" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Administrar Ayudas</h5>
                    <p class="card-text">Agrega y consulta las ayudas prestadas.</p>
                    <a href="./ayudas.php" class="btn btn-primary btn-block">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>

<?php include("./footer.php");?>