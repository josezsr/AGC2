<?php
	ini_set("display_errors","1");
	$hostname_conexion_local = "localhost";

	$database_conexion_local = "control";
	$username_conexion_local = "root";
	$password_conexion_local = "";
	$conexion_local = mysqli_connect($hostname_conexion_local, $username_conexion_local, $password_conexion_local, $database_conexion_local);
	if (!$conexion_local) {
	    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
	    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	    exit; 
	}
	/*else {
		echo "conectado";
	}*/
	$conexion = $conexion_local;
	$database_conexion = $database_conexion_local;

	?>