<?php
	include "conexion.php";

	$clave = $_POST['clave'];
	$campo = $_POST['campo'];
	$valor = $_POST['valor'];

	if ($campo == 1) {$variable = "escritura";}
	if ($campo == 2) {$variable = "enajenante";}
	if ($campo == 3) {$variable = "adquiriente";}
	if ($campo == 4) {$variable = "primer_aviso";}
	if ($campo == 5) {$variable = "segundo_aviso";}
	if ($campo == 6) {$variable = "fecha_recepcion";}
	if ($campo == 7) {$variable = "fecha_pago";}
	if ($campo == 8) {$variable = "fecha_salida";}
	if ($campo == 9) {$variable = "fecha_entrega";}
	if ($campo == 10) {$variable = "costo";}

	$query_variable = "UPDATE tabla_registros SET ".$variable."='".$valor."' WHERE id_registro = ".$clave;

	if ($mysqli->query($query_variable)){
	?> <script type="text/javascript">datosInsertados();</script> <?php	
	}else{
		echo $mysqli->error;
		?> <script type="text/javascript"> alert('Hubo un error al intentar editar los datos'); </script> <?php
	}

?>