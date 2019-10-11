<?php
//Parámetros de conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "misfinanzas";

// Realizar la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Verificamos la conexión y si no se ha realizado arrojamos un mensaje de error con sus detalles
if (!$conn) {
    die("Ha fallado la conexión a BD: " . mysqli_connect_error());
}

//Si la conexión se realizó podemos enviar un mensaje exitoso y luego lo colocamos como comentario
//echo "Conexión realizada";