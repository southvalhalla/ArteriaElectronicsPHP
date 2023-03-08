<?php include_once("conexion.php");

    $cod = $_POST['txtcod'];
    $tipo_pro = $_POST['txttipo_pro'];
    $carac = $_POST['txtcarac'];
    

    mysqli_query($conn,"INSERT INTO categorias(cod,tipo_pro,carac) Values('$cod','$tipo_pro','$carac')");
    
    header("Location:index.php");

    ?>