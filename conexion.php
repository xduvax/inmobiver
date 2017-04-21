<?php 
	$servidor = "127.0.0.1";
	$usuario = "root";
	$clave = "lmsley";
	$bd = "base3";

	$mysqli = new mysqli($servidor, $usuario, $clave, $bd);
	if ($mysqli -> connect_errno) {
		die( "Fallo conexión MySQL: (" . $mysqli -> mysqli_connect_errno() 
		. ") " . $mysqli -> mysqli_connect_error());
	}	
	else {
		//
	}
?>