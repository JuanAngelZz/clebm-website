<?php include("./cabecera.php");?>

<div class="jumbotron mt-4">
  <h1 class="display-4">Ayudas</h1>
  <hr class="my-4">
</div>
<a href="ayudas.php" class="btn btn-dark">Ir atras</a>
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
      <th scope="col">Título</th>
      <th scope="col">Ciudadano Benef.</th>
      <th scope="col">Productos Don.</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ayuda a Luis López</td>
      <td>Luis López</td>
      <td>0001</td>
      <td>10</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ayuda a Juan Pérez</td>
      <td>Juan Pérez</td>
      <td>0202</td>
      <td>5</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ayuda a Martín Enrique</td>
      <td>Martín Enrique</td>
      <td>0002</td>
      <td>7</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
<br>
<br>

<?php include("./footer.php");?>