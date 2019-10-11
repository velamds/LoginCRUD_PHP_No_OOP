<?php
$title = "Registrar usuario";
require "../modulos/encabezado.php";

?>
<form method="POST" action="insertar_usuario.php">
      <h2 class="h3 mb-3 font-weight-normal">Registrar Usuario</h2>
      <label for="inputName" class="sr-only">Nombre</label>
      <input type="text" name="inputName" id="inputName" class="form-control" placeholder="Nombre" required autofocus>
      <label for="inputEmail" class="sr-only">Correo</label>
      <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Correo" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Contraseña" required>
     <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
</form>

<?php
require "../modulos/pie.php";