<?php include("./cabecera.php");?>

<div class="jumbotron mt-4">
  <h1 class="display-4">Ayudas</h1>
  <hr class="my-4">
</div>
<a href="ayudas.php" class="btn btn-dark">Ir atras</a>
<br>
<br>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingrese la información de la Ayuda</h5>
        <form action="add_user.php" method="post">
            <div class="form-group">
                <label for="ci" class="py-2">Título de la ayuda:</label>
                <input type="text" class="form-control" name="ci" id="ci">
            </div>
            <div class="form-group">
                <label for="edad" class="py-2">Ciudadano beneficiado:</label>
                <input type="text" class="form-control" name="edad" id="edad">
            </div>
            <div class="form-group">
                <label for="edad" class="py-2">Productos a donar:</label>
                <input type="text" class="form-control" name="edad" id="edad">
            </div>
            <div class="form-group">
                <label for="desc" class="py-2">Cantidad:</label>
                <input type="number" class="form-control" name="edad" id="edad">
            </div>
            <div class="form-group">
                <label for="desc" class="py-2">Descripción:</label>
                <textarea class="form-control min-vh-25 mh-50" id="desc" name="desc" cols="30" rows="10"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </form>
    </div>
</div>
<br>
<br>

<?php include("./footer.php");?>