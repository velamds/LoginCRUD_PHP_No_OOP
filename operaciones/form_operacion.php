<?php
require "../config/database.php";
$id=$_GET['id'];
//traemos los datos del registro que se quiere editar
$sql = "SELECT * FROM operations WHERE id=$id";
$resultado = mysqli_query($conn, $sql);
$operacion = mysqli_fetch_assoc($resultado);
$title = "Editar operacion";
require "../modulos/encabezado.php";
?>
<h1>Editar operacion</h1>

    <form method="POST" action="editar_operacion.php">
        <input type="hidden" name="id" value="<?=$operacion['id']?>">
      <input type="text" name="description" id="description" class="form-control" placeholder="Descripción" required autofocus value="<?=$operacion['description']?>">
      <input type="number" name="value" id="value" class="form-control" placeholder="Valor" required value="<?=$operacion['value']?>">
      <select name="type" id="type" class="form-control" required>
                        <option value="">Sel Tipo</option>
                        <option value="1" <?=$operacion['type']=="Ingreso" ? "selected": "" ?> >Ingreso</option>
                        <option value="2" <?=$operacion['type']=="Egreso" ? "selected": "" ?>>Egreso</option>
      </select>
     <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>
    </form>

<?php
require "../modulos/pie.php";