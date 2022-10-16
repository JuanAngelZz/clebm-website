<?php include("./cabecera.php");?>

<div class="jumbotron mt-4">
  <h1 class="display-4">Usuarios</h1>
  <hr class="my-4">
</div>
<a href="usuarios.php" class="btn btn-dark">Ir atras</a>
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
      <th scope="col">CI</th>
      <th scope="col">Nombre</th>
      <th scope="col">Edad</th>
      <th scope="col">Descripción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">22555991</th>
      <td>Luis López</td>
      <td>21</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">22555992</th>
      <td>Juan Pérez</td>
      <td>44</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">22555993</th>
      <td>Martín Enrique</td>
      <td>36</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
<br>
<br>

<?php include("./footer.php");?>