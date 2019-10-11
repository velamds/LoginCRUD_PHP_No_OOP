<?php
if($_SERVER['REQUEST_METHOD']!="POST"){//Si no es accesso por post lo sacamos
    header("location:/index.php");
}
require "../config/database.php";

$nombre     =   $_POST["inputName"];
$correo     =   $_POST["inputEmail"];
$password   =   $_POST["inputPassword"];

// crear una sentencia preparada para evitar SQL INJECTION es decir por seguridad
$sentencia = mysqli_prepare($conn, "INSERT INTO users(name, email, password) VALUES (?,?,?)");
// enlazar parámetros las 3 "s" es por que son 3 string
mysqli_stmt_bind_param($sentencia, "sss", $nombre,$correo,$password);
// ejecutar la consulta
mysqli_stmt_execute($sentencia);
// cerrar sentencia
mysqli_stmt_close($sentencia);
// cerrar conexión
mysqli_close($conn);

require "../modulos/encabezado.php";
?>


<div class="alert alert-success">
Usuario Registrado Correctamente
</div>
<a href="/index.php" class="btn btn-primary">Iniciar Sesión</a>