<?php
session_start();
require "../config/database.php";
//Consultamos todas las operaciones que pertenezcan al usuario que ha ingresado
$sql = "SELECT * FROM operations WHERE fk_user=".$_SESSION['usuario']['id'];
$resultado = mysqli_query($conn, $sql);

$title = "Listado de operaciones";
require "../modulos/encabezado.php";
?>
<h1>Bienvenido <?=$_SESSION["usuario"]["name"]?> !</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Descripción</th>
            <th>Valor</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (mysqli_num_rows($resultado) > 0)://Esta es una sintaxis alternativa de php
              // recorrer cada resultado
              while($fila = mysqli_fetch_assoc($resultado)):?>
              <tr>
                    <td><?=$fila["id"]?></td>
                    <td><?=$fila["description"]?></td>
                    <td><?=$fila["value"]?></td>
                    <td><?=$fila["type"]?></td>
                    <td>
                        <a href="form_operacion.php?id=<?=$fila['id']?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="borrar_operacion.php?id=<?=$fila['id']?>" class="btn btn-sm btn-danger">Borrar</a>
                    </td>
              </tr>
        <?php endwhile;
        else:?>
            <tr>
                <td colspan=5>No hay resultados</td>
            </tr>
        <?php endif;?>
        <form action="insertar_operacion.php" method="POST">
            <tr>
                <td></td>
                <td><input type="text" name="description" class="form-control" required></td>
                <td><input type="number" name="value" class="form-control" required></td>
                <td>
                    <select name="type" id="type" class="form-control" required>
                        <option value="">Sel Tipo</option>
                        <option value="1">Ingreso</option>
                        <option value="2">Egreso</option>
                    </select>
                </td>
                <td><input type="submit" value="Guardar" class="btn btn-primary"></td>
            </tr>
        </form>
    </tbody>
</table>

<?php
mysqli_close($conn);
require "../modulos/pie.php";