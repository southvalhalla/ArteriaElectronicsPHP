<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Arteria</title>
</head>
<body class="bg-dark">
    <?php
    // include_once('comple/router.php');
    include('comple/navBar.php');
    ?>
    <div>
        <div class="position-absolute top-50 start-50 translate-middle">
            <center><h1 class="text-white fs-1 ">Arteria</h1></center>
            <form method="POST" action="index.php" class="text-white" >
                <div class="form-group">
                    <label for="doc">BUSQUEDA</label>
                    <select name="tipo">
                        <option value="nombre">Nombre/Tipo</option>
                        <option value="documento">Documento/ID</option>                        
                    </select>
                    <select name="selec">
                        <option value="usuario">Usuarios</option>
                        <option value="compras">Compras</option>
                        <option value="categorias">Categorias</option>
                        <option value="productos">Productos</option>
                    </select>
                    <input type="text" name="doc" id="doc">
                    <input class="btn btn-primary p-0" type="submit" value="Consultar" name="btn_consultar">
                </div>
            </form>
            <?php
                include("abrir_conexion.php");
                    $doc = "";
                    $select = "";
                    $tipo = "";
                    if(isset($_POST['btn_consultar'])){
                        $doc = $_POST['doc'];
                        $selec = $_POST['selec'];
                        $tipo = $_POST['tipo'];
                        $existe = 0;
                        if ($tipo == "documento"){
                            if($selec=="usuario"){
                                if($doc == ""){
                                    echo "Ingrese datos";
                                }else{
                                    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_usu WHERE cod = '$doc'");
                                    echo '<table><tr><th colspan="9">Usuarios</th></tr><tr>';
                                    echo "<th>Num Documento</th>";
                                    echo "<th>Nombre</th>";
                                    echo "<th>Apellido</th>";
                                    echo "<th>Ciudad</th>";
                                    echo "<th>Direccion</th>";
                                    echo "<th>Telefono</th>";
                                    echo "<th>Codigo postal</th>";
                                    echo "<th>Correo</th>";
                                    echo "</tr> ";
                                    while($consulta = mysqli_fetch_array($resultados)){
                                        echo "<tr>";
                                        echo "<td>".$consulta['cod']."</td>";
                                        echo "<td>".$consulta['nombre']."</td>";
                                        echo "<td>".$consulta['apellido']."</td>";
                                        echo "<td>".$consulta['ciudad']."</td>";
                                        echo "<td>".$consulta['direccion']."</td>";
                                        echo "<td>".$consulta['telefono']."</td>";
                                        echo "<td>".$consulta['codigo_postal']."</td>";
                                        echo "<td>".$consulta['correo_cliente']."</td>";
                                        echo "</tr>";
                                        $existe++;
                                    }
                                    if($existe==0){
                                    echo "el documento no existe";
                                    }
                                    
                                }
                            }
                            else if($selec=="compras"){
                                if($doc == ""){
                                    echo "Ingrese datos";
                                }else{
                                    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_com WHERE cod = '$doc'");
                                    echo "<table><tr>";
                                    echo "<th>ID</th>";
                                    echo "<th>Fecha</th>";
                                    echo "<th>ID Cliente</th>";
                                    echo "<th>Estado del Pedido</th>";
                                    echo "<th>Metodo de Pago</th>";
                                    echo "<th>Precio Total</th>";
                                    echo "</tr> ";
                                    while($consulta = mysqli_fetch_array($resultados)){
                                        echo "<tr>";
                                        echo "<td>".$consulta['cod']."</td>";
                                        echo "<td>".$consulta['fecha']."</td>";
                                        echo "<td>".$consulta['IDcliente']."</td>";
                                        echo "<td>".$consulta['estadoPedido']."</td>";
                                        echo "<td>".$consulta['metodoPago']."</td>";
                                        echo "<td>".$consulta['precioTotal']."</td>";
                                        echo "</tr>";
                                        $existe++;
                                    }
                                    if($existe==0){
                                    echo "el ID no existe";
                                    }
                                    
                                }
                            }
    
                            else if($selec=="categorias"){
                                if($doc == ""){
                                    echo "Ingrese datos";
                                }else{
                                    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_cat WHERE cod = '$doc'");
                                    echo "<table><tr>";
                                    echo "<th>cod</th>";
                                    echo "<th>tipo_pro</th>";
                                    echo "<th>carac</th>";
                                    echo "</tr> ";
                                    while($consulta = mysqli_fetch_array($resultados)){
                                        echo "<tr>";
                                        echo "<td>".$consulta['cod']."</td>";
                                        echo "<td>".$consulta['tipo_pro']."</td>";
                                        echo "<td>".$consulta['carac']."</td>";
                                        $existe++;
                                    }
                                    if($existe==0){
                                    echo "el ID no existe";
                                    }
                                    
                                }
                            }
    
                            else if($selec=="productos"){
                                if($doc == ""){
                                    echo "Ingrese datos";
                                }else{
                                    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_pro WHERE cod = '$doc'");
                                    echo "<table><tr>";
                                    echo "<th>cod</th>";
                                    echo "<th>nom_pro</th>";
                                    echo "<th>id_catego</th>";
                                    echo "<th>marca</th>";
                                    echo "<th>precio</th>";
                                    echo "<th>imagenes</th>";
                                    echo "<th>fecha_fab</th>";
                                    echo "<th>descripcion</th>";
                                    echo "</tr> ";
                                    while($consulta = mysqli_fetch_array($resultados)){
                                        echo "<tr>";
                                        echo "<td>".$consulta['cod']."</td>";
                                        echo "<td>".$consulta['nom_pro']."</td>";
                                        echo "<td>".$consulta['id_catego']."</td>";
                                        echo "<td>".$consulta['marca']."</td>";
                                        echo "<td>".$consulta['precio']."</td>";
                                        echo "<td>".$consulta['imagenes']."</td>";
                                        echo "<td>".$consulta['fecha_fab']."</td>";
                                        echo "<td>".$consulta['descripcion']."</td>";
                                        $existe++;
                                    }
                                    if($existe==0){
                                    echo "el ID no existe";
                                    }
                                  
    
                                }
    
                                
                            }

                        }
                        if($tipo == 'nombre'){

                            if($selec=="usuario"){
                                if($doc == ""){
                                    echo "Ingrese datos";
                                }else{
                                    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_usu WHERE nombre = '$doc'");
                                    echo '<table><tr><th colspan="9">Usuarios</th></tr><tr>';
                                    echo "<th>Num Documento</th>";
                                    echo "<th>Nombre</th>";
                                    echo "<th>Apellido</th>";
                                    echo "<th>Ciudad</th>";
                                    echo "<th>Direccion</th>";
                                    echo "<th>Telefono</th>";
                                    echo "<th>Codigo postal</th>";
                                    echo "<th>Correo</th>";
                                    echo "</tr> ";
                                    while($consulta = mysqli_fetch_array($resultados)){
                                        echo "<tr>";
                                        echo "<td>".$consulta['cod']."</td>";
                                        echo "<td>".$consulta['nombre']."</td>";
                                        echo "<td>".$consulta['apellido']."</td>";
                                        echo "<td>".$consulta['ciudad']."</td>";
                                        echo "<td>".$consulta['direccion']."</td>";
                                        echo "<td>".$consulta['telefono']."</td>";
                                        echo "<td>".$consulta['codigo_postal']."</td>";
                                        echo "<td>".$consulta['correo_cliente']."</td>";
                                        echo "</tr>";
                                        $existe++;
                                    }
                                    if($existe==0){
                                    echo "el usuario no existe";
                                    }
                                    
                                }
                            }
                            else if($selec=="compras"){
                                if($doc == ""){
                                    echo "Ingrese datos";
                                }else{
                                    echo "no se puede buscar nombre en la tabla de compras";
                                    
                                }
                            }
    
                            else if($selec=="categorias"){
                                if($doc == ""){
                                    echo "Ingrese datos";
                                }else{
                                    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_cat WHERE tipo_pro = '$doc'");
                                    echo "<table><tr>";
                                    echo "<th>cod</th>";
                                    echo "<th>tipo_pro</th>";
                                    echo "<th>carac</th>";
                                    echo "</tr> ";
                                    while($consulta = mysqli_fetch_array($resultados)){
                                        echo "<tr>";
                                        echo "<td>".$consulta['cod']."</td>";
                                        echo "<td>".$consulta['tipo_pro']."</td>";
                                        echo "<td>".$consulta['carac']."</td>";
                                        $existe++;
                                    }
                                    if($existe==0){
                                    echo "la categoria no existe";
                                    }
                                    
                                }
                            }
    
                            else if($selec=="productos"){
                                if($doc == ""){
                                    echo "Ingrese datos";
                                }else{
                                    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_pro WHERE nom_pro = '$doc'");
                                    echo "<table><tr>";
                                    echo "<th>cod</th>";
                                    echo "<th>nom_pro</th>";
                                    echo "<th>id_catego</th>";
                                    echo "<th>marca</th>";
                                    echo "<th>precio</th>";
                                    echo "<th>imagenes</th>";
                                    echo "<th>fecha_fab</th>";
                                    echo "<th>descripcion</th>";
                                    echo "</tr> ";
                                    while($consulta = mysqli_fetch_array($resultados)){
                                        echo "<tr>";
                                        echo "<td>".$consulta['cod']."</td>";
                                        echo "<td>".$consulta['nom_pro']."</td>";
                                        echo "<td>".$consulta['id_catego']."</td>";
                                        echo "<td>".$consulta['marca']."</td>";
                                        echo "<td>".$consulta['precio']."</td>";
                                        echo "<td>".$consulta['imagenes']."</td>";
                                        echo "<td>".$consulta['fecha_fab']."</td>";
                                        echo "<td>".$consulta['descripcion']."</td>";
                                        $existe++;
                                    }
                                    if($existe==0){
                                    echo "el producto no existe";
                                    }
                                  
    
                                }
    
                                
                            }
                        }

                      
                    }
                include("cerrar_conexion.php");
            ?>
        </div>
    </div>
</body>
</html>