<?php
	include "conexion.php";

	$clave = $_POST['clave'];
	$campo = $_POST['campo'];
	$valor = $_POST['valor'];

	if ($campo == 1) {$variable = "municipio";}
	if ($campo == 2) {$variable = "escritura";}
	if ($campo == 3) {$variable = "enajenante";}
	if ($campo == 4) {$variable = "adquiriente";}
	if ($campo == 5) {$variable = "primer_aviso";}
	if ($campo == 6) {$variable = "entrega_primer";}
	if ($campo == 7) {$variable = "costo_primer";}
	if ($campo == 8) {$variable = "segundo_aviso";}
	if ($campo == 9) {$variable = "testimonio";}
	if ($campo == 10) {$variable = "entrega_testimonio";}
	if ($campo == 11) {$variable = "costo_testimonio";}
	if ($campo == 12) {$variable = "fecha_pago";}
	if ($campo == 13) {$variable = "fecha_salida";}
	if ($campo == 14) {$variable = "fecha_entrega";}
	if ($campo == 15) {$variable = "costo";}

	$query_variable = "UPDATE tabla_registros SET ".$variable."='".$valor."' WHERE id_registro = ".$clave;

	if ($mysqli->query($query_variable)){
	?> <script type="text/javascript">datosInsertados();</script> <?php	
	}else{
		echo $mysqli->error;
		?> <script type="text/javascript"> alert('Hubo un error al intentar editar los datos'); </script> <?php
	}

?>