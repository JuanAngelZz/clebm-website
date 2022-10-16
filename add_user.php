<?php include("./cabecera.php");?>

<div class="jumbotron mt-4">
  <h1 class="display-4">Usuarios</h1>
  <hr class="my-4">
</div>
<a href="usuarios.php" class="btn btn-dark">Ir atras</a>
<br>
<br>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingrese los datos del Usuario</h5>
        <form action="add_user.php" method="post">
            <div class="form-group">
                <label for="ci" class="py-2">Cédula de Identidad:</label>
                <input type="text" class="form-control" name="ci" id="ci">
            </div>
            <div class="form-group">
                <label for="nombre" class="py-2">Nombre Completo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="edad" class="py-2">Edad:</label>
                <input type="number" class="form-control" name="edad" id="edad">
            </div>
            <div class="form-group">
                <label for="desc" class="py-2">Descripción del problema:</label>
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