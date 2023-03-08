<?php

    $host = "localhost";
	$basededatos = "arteriadb";    
	$usuariodb = "root";    
	$clavedb = "Pa22w0rd"; 
    
    

    try{
        $conexion = new PDO ("mysql:host=$host;dbname=$basededatos",$usuariodb, $clavedb);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo"conexion exitosa";
    } catch(PDOException $e){
        echo"error en la conexion: ". $e->getMessage(); 
    }
$error;

if (!empty($_POST["btningresar"])){

    if (empty($_POST["nickname"]) and empty($_POST["password"])){
       
        
        $error="vacio";
        header("Location: index.php?error=$error");
        
    } else {
        $user=$_POST["nickname"];
        $password=$_POST["password"];
        $sql=$conexion->query("select * from usuario where correo_cliente='$user' and contrasena='$password'");
        if ($datos=$sql->fetch(PDO::FETCH_OBJ)){
            $error= "ok"; 
       
        header("Location: inicio.php");
        
        } else{
            
            $error="incorrecto";
        header("Location: index.php?error=$error");

        }

    }

    }
    
    
    

?>

