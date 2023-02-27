<?php
include_once("conexion.php");

$codigo = $_GET['cod'];

mysqli_query($conn, "DELETE FROM compras WHERE cod=$codigo");

header("Location:index.php");

?>