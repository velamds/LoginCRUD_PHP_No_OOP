<?php
if($_SERVER['REQUEST_METHOD']!="POST"){//Si no es accesso por post lo sacamos
    header("location:/index.php");
}
require "../config/database.php";

$correo     =   $_POST["inputEmail"];
$password   =   $_POST["inputPassword"];

// crear una sentencia preparada para evitar SQL INJECTION es decir por seguridad
$sentencia = mysqli_prepare($conn, "SELECT * FROM users WHERE email=? AND password=?");
// enlazar parámetros las 3 "s" es por que son 3 string
mysqli_stmt_bind_param($sentencia, "ss", $correo,$password);
// ejecutar la consulta
mysqli_stmt_execute($sentencia);
//enlazar variables de resultado 
mysqli_stmt_bind_result($sentencia, $id,$name,$correo,$password);
//obtener valores
$resultado=mysqli_stmt_fetch($sentencia);
// cerrar sentencia
mysqli_stmt_close($sentencia);
// cerrar conexión
mysqli_close($conn);
if($resultado){
    session_start();//Iniciamos sesión y asignamos parametros para dicha sesión
    $_SESSION['usuario'] = [
        "id" =>$id,
        "name"=>$name,
        "correo"=>$correo
    ];
    
    header("location:/operaciones/");
}else{
    header("location:/index.php?error");
}
