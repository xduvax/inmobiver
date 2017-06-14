<?php 
	include "conexion.php";

	$fecha1 = $_POST['fecha1'];
	$fecha2 = $_POST['fecha2'];
	$columna = $_POST['columna'];
	$municipio = $_POST['municipio'];
	$arreglo = array();

	$query_variable = 
		"SELECT municipio, escritura, enajenante, adquiriente, primer_aviso, entrega_primer, costo_primer, testimonio, entrega_testimonio, costo_testimonio 
			FROM tabla_registros
			WHERE municipio = '".$municipio."' AND ".$columna.">= '".$fecha1."' AND ".$columna."<= '".$fecha2."' ORDER BY ".$columna." ASC";

	$resultado = $mysqli->query($query_variable);
	while ($rows = $resultado->fetch_assoc()):

		$arreglo[] = $rows;

	endwhile;

	echo json_encode($arreglo);
?>