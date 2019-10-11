<?php
$title = "Inicio de Sesión";

require "modulos/encabezado.php";
?>
    <form method="POST" action="usuarios/validar_inicio.php">
      <h1>Mis Finanzas</h1>
      <h2 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h2>
      <label for="inputEmail" class="sr-only">Correo</label>
      <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Correo" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Contraseña" required>
     <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    </form>
<br>
<a href="usuarios/form_registro.php" class="btn btn-lg btn-success btn-block">Registrarse</a>

<?php
require "modulos/pie.php";
