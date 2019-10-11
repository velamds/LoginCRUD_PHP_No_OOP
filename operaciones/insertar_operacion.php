<?php
require "../config/database.php";
session_start();
$description = $_POST['description'];
$value = $_POST['value'];
$type = $_POST['type'];
$user = $_SESSION['usuario']['id'];

$sql = "INSERT INTO operations (description, value, type, fk_user) VALUES ('$description', $value, $type, $user)";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("location:/operaciones/");
} else {
    mysqli_close($conn);
    header("location:/operaciones/index.php?error");
}
