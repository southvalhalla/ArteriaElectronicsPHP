<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "arteriadb";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "Pa22w0rd";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_usu = "usuario"; 
	$tabla_com = "compras";
	$tabla_cat = "categorias"; 
	$tabla_pro = "productos"; 
	$tabla_login = "Login";
		   // tabla de usuarios
	

	//error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>