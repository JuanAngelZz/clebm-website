<?php include("./cabecera.php");?>

<div class="jumbotron mt-4">
  <h1 class="display-4">Productos</h1>
  <hr class="my-4">
</div>
<a href="productos.php" class="btn btn-dark">Ir atras</a>
<br>
<br>
<p>Buscar</p>
<form action="view_user.php" method="get">
    <input type="text" name="" id="" class="form-control">
</form>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Descripción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">0001</th>
      <td>Material 1</td>
      <td>100</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">0002</th>
      <td>Material 2</td>
      <td>40</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">0202</th>
      <td>Material 3</td>
      <td>85</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
<br>
<br>

<?php include("./footer.php");?>