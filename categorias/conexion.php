<?php
$conn = new mysqli("localhost", "root","Pa22w0rd","arteriadb");
if($conn->connect_errno)
{
    echo "No hay conexion: (" .$conn->connect_errno . ") " . $conn->connect_error;
}
?>
