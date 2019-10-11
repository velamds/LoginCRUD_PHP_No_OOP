<?php
require "../config/database.php";
$id = $_GET['id'];

$sql = "DELETE FROM operations WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("location:/operaciones/");
} else {
    mysqli_close($conn);
    header("location:/operaciones/index.php?error");
}
