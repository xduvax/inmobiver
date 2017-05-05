<?php
	session_start();
	error_reporting(E_ERROR);
	if ($_SESSION['login'] == true) {
		
	}
	else{
		echo "Para ingresar a esta pagina, debe iniciar sesion...<br>";
		echo "<a href='login'>Aqui</a>";
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inmobiver</title>
	<meta charset="utf-8">

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/funciones.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery-confirm.min.js"></script>

	<link rel="stylesheet" type="text/css" href="estilos/estilos.css" media="all" />
	<link rel="stylesheet" type="text/css" href="estilos/jquery-confirm.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="estilos/jquery-ui.min.css" media="all" />

</head>
<body>