<?php include_once("conexion.php");

    $cod = $_POST['txtcod'];
    $nom_pro = $_POST['txtnom_pro'];
    $id_catego = $_POST['txtid_catego'];
    $marca = $_POST['txtmarca'];
    $precio = $_POST['txtprecio'];
    $imagenes = $_POST['txtimagenes'];
    $fecha_fab = $_POST['txtfecha_fab'];
    $descripcion = $_POST['txtdescripcion'];
    
    

    mysqli_query($conn,"INSERT INTO productos(cod,nom_pro,id_catego,marca,precio,imagenes,fecha_fab,descripcion) Values('$cod','$nom_pro','$id_catego','$marca','$precio','$imagenes','$fecha_fab','$descripcion')");
    
    header("Location:index.php");

    ?>