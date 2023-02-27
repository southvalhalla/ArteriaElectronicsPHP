<?php
include_once("conexion.php");

$codigo = $_GET['cod'];

mysqli_query($conn, "DELETE FROM productos WHERE cod=$codigo");

header("Location:index.php");

?>