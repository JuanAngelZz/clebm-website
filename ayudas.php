<?php include("./cabecera.php");?>

<div class="jumbotron mt-4">
  <h1 class="display-4">Ayudas</h1>
  <hr class="my-4">
</div>
<a href="index.php" class="btn btn-dark">Ir atras</a>
<br>
<br>
<div class="container">
    <div class="row gap-4">
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="img/help2.png" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Añadir Ayudas</h5>
                    <a href="add_help.php" class="btn btn-primary btn-block">Entrar</a>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="img/help3.png" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Consultar Ayudas</h5>
                    <a href="view_help.php" class="btn btn-primary btn-block">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>

<?php include("./footer.php");?>