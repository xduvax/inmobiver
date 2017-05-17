<?php 
	include "conexion.php";

	$fecha1 = $_POST['fecha1'];
	$fecha2 = $_POST['fecha2'];
	$columna = $_POST['columna'];
	$arreglo = array();

	$query_variable = "SELECT * FROM tabla_registros 
		WHERE ".$columna.">= '".$fecha1."' AND ".$columna."<= '".$fecha2."' ORDER BY ".$columna." ASC";

	$resultado = $mysqli->query($query_variable);
	while ($rows = $resultado->fetch_assoc()):

		$arreglo[] = $rows;

	endwhile;

	echo json_encode($arreglo);
?>