<?php 
	include "conexion.php";

	$fecha1 = $_POST['fecha1'];
	$fecha2 = $_POST['fecha2'];
	$columna = $_POST['columna'];
	$arreglo = array();

	if ($columna == "primer") {	$auxiliar = "primer_aviso";	}
	if ($columna == "testimonio") {	$auxiliar = "testimonio"; }

	$query_variable = "SELECT * FROM tabla_registros 
		WHERE ".$auxiliar.">= ".$fecha1." AND ".$auxiliar."<= ".$fecha2." ORDER BY ".$auxiliar." ASC";

	$resultado = $mysqli->query($query_variable);
	while ($rows = $resultado->fetch_assoc()):

		$arreglo[] = $rows;

	endwhile;

	echo json_encode($arreglo);
?>