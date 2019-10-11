<?php
require "../config/database.php";
session_start();
$id = $_POST['id'];
$description = $_POST['description'];
$value = $_POST['value'];
$type = $_POST['type'];

$sql = "UPDATE operations
        SET 
        description = '$description',
        value = $value,
        type = $type
        WHERE id =  $id";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("location:/operaciones/");
} else {
    mysqli_close($conn);
    header("location:/operaciones/index.php?error");
}
